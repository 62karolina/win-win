<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cases;
use App\Items;
use App\History;
use App\Delivery;
use App\Contest;
use App\Contest_ticket;
use Auth;
use Crypt;
use DB;
use Illuminate\Contracts\Encryption\DecryptException;
use Carbon\Carbon;
use Redirect;
use Validator;
use App\Deliver;

class PagesController extends Controller
{
    const merchant_id = ''; //free-kassa
    const merchant_secret_1 = ''; //free-kassa
    const merchant_secret_2 = ''; //free-kassa
    const PROCENT_LOWER = 80; //Price lower than case price item
    const DELIVERY_COST = 300; //Delivery price (RUB)
    const REF_CODE_ADD = 50; //Amount (RUB) when entering ref code


    public function success(){
        return Redirect::to('/');
    }
    public function contests(){
        $contests = Contest::where('status',1)->get();
        return view('pages.contests', compact('contests'));
    }
    public function delivery(){
        return view('pages.delivery');
    }
    public function opinions(){
        return view('pages.opinions');
    }
    public function help(){
        return view('pages.help');
    }
    public function license(){
        return view('pages.license');
    }
    public function confidence(){
        return view('pages.confidence');
    }

    public function infocontests(){
            return view('pages.infocontests');
    }

    public function box($id){
        $case = Cases::where('id',$id)->first();
        $items = Items::where('case',$id)->orderBy('price','desc')->get();

        return view('pages.box', compact('case','items'));
    }
    public static  function getStats(){
        $user = User::where('id', '>', 1)->count();
        $cases =  History::where('id', '>', 0)->count();
        return [$user,$cases];
        //return 100;
    }

    public function last(){
        $game = History::where('id', '>', 0)->orderBy('id', 'DESC')->limit(12)->get();
        foreach ($game as $g) {
            $user = User::where('id', $g->user)->first();
            $item  = Items::where('id',$g->item)->first();
            $g->avatar = $user->avatar;
            $g->image = $item->image;
        }
        return $game;
    }

    public function open(Request $r){
        if(!Auth::check()){return response()->json(['status' => 403]);}
        $case =  Cases::where('id',$r->id)->first();
        $user = Auth::user();
        if($user->money < $case->price){return response()->json(['status' => 401]);}
        $user->money = $user->money - $case->price;
        $user->open_box = $user->open_box + 1;
        $user->save();
        $pro = mt_rand(1,100);
        if($pro < self::PROCENT_LOWER ){
            $pro2 = mt_rand(1,100);
            if($pro2 < self::PROCENT_LOWER ){
                $win = Items::where('case',$r->id)->where('price','<',$case->price)->inRandomOrder()->first();
                $win2 = Items::where('case',$r->id)->orderBy('price','desc')->get();
            }else{
                $win = Items::where('case',$r->id)->where('price','<=',$case->price + 1000)->inRandomOrder()->first();
                $win2 = Items::where('case',$r->id)->orderBy('price','desc')->get();
            }
        }else{
            $win = Items::where('case',$r->id)->where('price','>',$case->price)->inRandomOrder()->first();
            $win2 = Items::where('case',$r->id)->orderBy('price','desc')->get();
        }
        foreach ($win2 as $key => $val) {
            if ($val->name == $win->name) {
                $key = $key + 1;

                $int_id =  \DB::table('history')->insertGetId([
                    'user' => $user->id,
                    'item' =>  $win->id,
                    'case' => $case->id,
                ]);
//                History::create([
//                    'user' => $user->id,
//                    'item' => $win->id,
//                    'case' => $case->id
//                ]);
                return response()->json([
                    'status' => 200,
                    'name' => $win->name,
                    'number' => $key,
                    'image' => $win->image,
                    'user_item_id' => $int_id,
                    'balance' => $user->money,
                    'price_sale' => $win->price
                ]);
            }
        }

    }

    //Get data from encrypted string for delivery
    public function descryptDeliveryInfo($key){
        try {
            $decrypted = Crypt::decrypt($key);
            return $decrypted;
        } catch (DecryptException $e) {
            return 'error';
        }
    }
    //Save user personal data and securly encrypt
    public function updateDelivery(Request $r){

        $validator = Validator::make($r->all(), [
            'profile_country' => 'required|max:255',
            'profile_city' => 'required|max:255',
            'profile_zip' => 'required|max:255',
            'profile_house' => 'required|max:255',
            'profile_name' => 'required|max:255',
            'profile_street' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 500]);
        }

        $user = Auth::user();
        $cauntry = $r->profile_country;
        $city  = $r->profile_city;
        $postalcode = $r->profile_zip;
        $dom = $r->profile_house;
        $kvartira = $r->profile_flat;
        $street = $r->profile_street;
        $name = $r->profile_name;

        $name_e = Crypt::encrypt($name);
        $country_e = Crypt::encrypt($cauntry);
        $city_e  = Crypt::encrypt($city);
        $postalcode_e = Crypt::encrypt($postalcode);
        $kvartira_e = Crypt::encrypt($kvartira);
        $dom_e = Crypt::encrypt($dom);
        $street_e = Crypt::encrypt($street);

        $check = Delivery::where('user', $user->id)->first();
        if(count($check) == 0){
            Delivery::create([
                'user' => $user->id,
                'name' => $name_e,
                'country' => $country_e,
                'city' => $city_e,
                'postalcode' => $postalcode_e,
                'dom' => $dom_e,
                'kvartira' => $kvartira_e,
                'street' => $street_e
            ]);
            return response()->json(['status' => 200]);
        }else{
            $check->user = $user->id;
            $check->name = $name_e;
            $check->country = $country_e;
            $check->city = $city_e;
            $check->postalcode =  $postalcode_e;
            $check->dom = $kvartira_e;
            $check->kvartira = $dom_e;
            $check->street =  $street_e;
            $check->save();
            return response()->json(['status' => 200]);
        }
    }

    public function pay(Request $r){
        $type = $r->provider;
        $amount = $r->amount;

            if((int)$amount < 1){
                $amount = 99;
            }

            $int_id =  \DB::table('payments')->insertGetId([
                'amount' => (int)$amount,
                'user' => Auth::user()->id,
                'time' => time(),
                'status' => 0,
            ]);
            $orderID = $int_id;

            $sign = md5(self::merchant_id.':'.$amount.':'.self::merchant_secret_1.':'.$orderID);
            if($type == 'qiwi'){
                $url = 'http://www.free-kassa.ru/merchant/cash.php?m='.self::merchant_id.'&oa='.$amount.'&o='.$orderID.'&s='.$sign.'&lang=ru&i=63';
            }else if($type == 'card'){
                $url = 'http://www.free-kassa.ru/merchant/cash.php?m='.self::merchant_id.'&oa='.$amount.'&o='.$orderID.'&s='.$sign.'&lang=ru&i=94';
            }else if($type == 'mts'){
                $url = 'http://www.free-kassa.ru/merchant/cash.php?m='.self::merchant_id.'&oa='.$amount.'&o='.$orderID.'&s='.$sign.'&lang=ru&i=84';
            }else if($type == 'beeline'){
                $url = 'http://www.free-kassa.ru/merchant/cash.php?m='.self::merchant_id.'&oa='.$amount.'&o='.$orderID.'&s='.$sign.'&lang=ru&i=83';
            }else if($type == 'mega'){
                $url = 'http://www.free-kassa.ru/merchant/cash.php?m='.self::merchant_id.'&oa='.$amount.'&o='.$orderID.'&s='.$sign.'&lang=ru&i=82';
            }else if($type == 'tele2'){
                $url = 'http://www.free-kassa.ru/merchant/cash.php?m='.self::merchant_id.'&oa='.$amount.'&o='.$orderID.'&s='.$sign.'&lang=ru&i=132';
            }else{
                $url = 'http://www.free-kassa.ru/merchant/cash.php?m='.self::merchant_id.'&oa='.$amount.'&o='.$orderID.'&s='.$sign.'&lang=ru';
            }

                return response()->json(['redirect_url' => $url]);

            //$url = 'http://www.free-kassa.ru/merchant/cash.php?m='.self::merchant_id.'&oa='.$amount.'&o='.$orderID.'&s='.$sign.'&lang=ru';

    }
    function getIP() {
        if(isset($_SERVER['HTTP_X_REAL_IP'])) return $_SERVER['HTTP_X_REAL_IP'];
        return $_SERVER['REMOTE_ADDR'];
    }

    public function getPayment(Request $request){
        if (!in_array($this->getIP(), array('136.243.38.147', '136.243.38.149', '136.243.38.150', '136.243.38.151', '136.243.38.189', '88.198.88.98'))) {
            return "Ip nneatbilst";
        }

        $sign = md5(self::merchant_id.':'.$request->AMOUNT.':'.self::merchant_secret_2.':'.$request->MERCHANT_ORDER_ID);

        if($sign != $request->SIGN){
            return "Signi neatbilst";
        }
        $payment=   \DB::table('payments')
            ->where('id', $request->MERCHANT_ORDER_ID)->first();
        if(count($payment) == 0){
            return "Neatrada bd";
        }else{
            if($payment->status != 0){
                return "Status nav 0";
            }else{
                if($payment->amount != $request->AMOUNT){
                    return "Summa neatbilst";
                }else{
                    $user = User::where('id', $payment->user)->first();
                    $user->money = $user->money + $payment->amount;
                    $user->deposit = $user->deposit + $payment->amount;
                    $user->save();
                    //1 tas kas uzaicina
                    $te = User::where('ref_code', $user->ref_use)->first();
                    if(count($te) == null || count($te) == 0){

                    }else{
                        $bon = (10/100)*$payment->amount;
                        $te->refferal_money =   $te->refferal_money + $bon;
                        $te->save();
                    }
                    \DB::table('payments')
                        ->where('id', $payment->id)
                        ->update(['status' => 1]);
                    return 'success';
                }
            }
        }
    }

    public function activate(Request $r)
    {
        $code2 = $r->code;
        $user = User::where('id',$r->user)->first();
        $code = \DB::table('users')->where('ref_code', $code2)->first();
        if ($user->ref_use !== NULL) {
            return response()->json(['status' => 403]);
        } else if ($code == NULL) {
            return response()->json(['status' => 404]);
        } else if ($user->ref_code == $code2) {
            return response()->json(['status' => 401]);
        } else {
            $user->money = $user->money + self::REF_CODE_ADD;
            $user->ref_use = $code2;
            $user->save();
            return response()->json(['status' => 200,'balance' => $user->money]);
        }
    }

    public function deliver(Request $r){
        //if ($r->ajax()){
            $h1 =  History::where('id', $r->item_1_id)->where('status',0)->first();
            $h2 =  History::where('id', $r->item_2_id)->where('status',0)->first();
            $h3 =  History::where('id', $r->item_3_id)->where('status',0)->first();
            $h4 =  History::where('id', $r->item_4_id)->where('status',0)->first();
            $h5 =  History::where('id', $r->item_5_id)->where('status',0)->first();
            $user = User::where('id',$r->user)->first();
            $delivery = Delivery::where('user',$user->id)->first();
            if(count($h1) != 0){$itema = Items::where('id',$h1->item)->first(); $item1 = $itema->id;}else{$item1 = 'null';}
            if(count($h2) != 0){$itemb = Items::where('id',$h2->item)->first(); $item2 = $itemb->id;}else{$item2 = 'null';}
            if(count($h3) != 0){$itemc = Items::where('id',$h3->item)->first(); $item3 = $itemc->id;}else{ $item3 = 'null';}
            if(count($h4) != 0){$itemd = Items::where('id',$h4->item)->first(); $item4 = $itemd->id;}else{$item4 = 'null';}
            if(count($h5) != 0){$iteme = Items::where('id',$h5->item)->first(); $item5 = $iteme->id;}else{ $item5 = 'null';}

            if($user->money < self::DELIVERY_COST){ return response()->json(['status' => 400]);}
            if(count($delivery) == 0){return response()->json(['status' => 502]);}
            if(count($h1) != 0){ if($h1->status !=  0){return response()->json(['status' => 456]);} if($h1->user !=  $r->user){return response()->json(['status' => 500]);}}
            if(count($h2) != 0){if($h2->status !=  0){return response()->json(['status' => 456]);} if($h2->user !=  $r->user){return response()->json(['status' => 500]);}}
            if(count($h3) != 0){if($h3->status !=  0){return response()->json(['status' => 456]);} if($h3->user !=  $r->user){return response()->json(['status' => 500]);}}
            if(count($h4) != 0){if($h4->status !=  0){return response()->json(['status' => 456]);} if($h4->user !=  $r->user){return response()->json(['status' => 500]);}}
            if(count($h5) != 0){if($h5->status !=  0){return response()->json(['status' => 456]);} if($h5->user !=  $r->user){return response()->json(['status' => 500]);}}

            if(count($h1) != 0){$h1->status = 2;$h1->save();}
            if(count($h2) != 0){$h2->status = 2;$h2->save();}
            if(count($h3) != 0){$h3->status = 2;$h3->save();}
            if(count($h4) != 0){$h4->status = 2;$h4->save();}
            if(count($h5) != 0){$h5->status = 2;$h5->save();}

            Deliver::create([
                'user' => $user->id,
                'item1' => $item1,
                'item2' => $item2,
                'item3' => $item3,
                'item4' => $item4,
                'item5' => $item5
            ]);
            return response()->json(['status' => 200]);
        //}else{

        //}
    }

    public function sell(Request $r){
        if ($r->ajax()){
            $itemss = History::where('id',$r->id)->first();
            $item = Items::where('id',$itemss->item)->first();
            $user = User::where('id',$itemss->user)->first();
            if($itemss->status != 0){return response()->json(['status' => 401]);}
            $user->money = $user->money + $item->price;
            $user->save();
            $itemss->status = 1;
            $itemss->save();
            return response()->json(['balance' => $user->money]);
        }else{

        }
    }

    //User profile

    //STATUS MEANINGS
    //0 - Status not selected
    //1 - Status sold
    //2 - status delivery

    public function profile(){
        if(!Auth::check()){
            return Redirect::to('/login');
        }else{

            $items = History::where('user',Auth::user()->id)->where('status',0)->get();
            $tickets = Contest_ticket::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->get();
            $dev = Delivery::where('user', Auth::user()->id)->first();
            $c = User::where('ref_use',Auth::user()->ref_code)->count();
            $deliver = Deliver::where('user',Auth::user()->id)->orderBy('id','desc')->get();

            if(count($deliver) != 0){
                foreach ($deliver as $d){
                    $uk = User::where('id',$d->user)->first();
                    if(count($dev) != 0){
                        $d->country = Crypt::decrypt($dev->country);
                        $d->city  = Crypt::decrypt($dev->city);
                        $d->postalcode = Crypt::decrypt($dev->postalcode);
                        $d->dom = Crypt::decrypt($dev->dom);
                        $d->kvartira = Crypt::decrypt($dev->kvartira);
                        $d->street = Crypt::decrypt($dev->street);
                        $d->name = Crypt::decrypt($dev->name); //
                    }
                    if($d->item1 != 0){$item1 = Items::where('id',$d->item1)->first(); $d->item1 = $item1->name;}else{$d->item1 = 'null';}
                    if($d->item2 != 0){$item2 = Items::where('id',$d->item2)->first(); $d->item2 = $item2->name;}else{$d->item2 = 'null';}
                    if($d->item3 != 0){$item3 = Items::where('id',$d->item3)->first(); $d->item3 = $item3->name;}else{$d->item3 = 'null';}
                    if($d->item4 != 0){$item4 = Items::where('id',$d->item4)->first(); $d->item4 = $item4->name;}else{$d->item4 = 'null';}
                    if($d->item5 != 0){$item5 = Items::where('id',$d->item5)->first(); $d->item5 = $item5->name;}else{$d->item5 = 'null';}
                    $d->name = $uk->username;
                }
            }

            if(count($tickets) != 0){
                foreach ($tickets as $t){
                    $contest = Contest::where('id',$t->contest_id)->first();
                    $item = Items::where('id',$contest->item_id)->first();
                    $t->item_image = $item->image;
                }
            }
            if(count($dev) != 0){
                $country = Crypt::decrypt($dev->country);
                $city  = Crypt::decrypt($dev->city);
                $postalcode = Crypt::decrypt($dev->postalcode);
                $dom = Crypt::decrypt($dev->dom);
                $kvartira = Crypt::decrypt($dev->kvartira);
                $street = Crypt::decrypt($dev->street);
                $name = Crypt::decrypt($dev->name); //
                $c = User::where('ref_use',Auth::user()->ref_code)->count();
                foreach ($items as $item ){
                    $itema = Items::where('id',$item->item)->first();
                    $item->image = $itema->image;
                    $item->name  = $itema->name;
                    $item->price = $itema->price;
                }
                return view('pages.profile',compact('items','tickets','deliver','country','city','postalcode','dom','kvartira','street','name','c'));
            }else{
                $country = '';
                $city  = '';
                $postalcode = '';
                $dom = '';
                $kvartira = '';
                $street = '';
                $name = '';
                $deliver = 'null';
                $c = User::where('ref_use',Auth::user()->ref_code)->count();
                foreach ($items as $item ){
                    $itema = Items::where('id',$item->item)->first();
                    $item->image = $itema->image;
                    $item->name  = $itema->name;
                    $item->price = $itema->price;
                }
                return view('pages.profile',compact('items','tickets','deliver','country','city','postalcode','dom','kvartira','street','name','c'));
            }

        }
    }
    public function account($id){
            $user = User::where('id',$id)->first();
            if(Auth::check()){
                if($user->id == Auth::user()->id){
                    return redirect('/profile');
                }
            }
            $drops = \DB::table('history')->where('user',$user->id)->limit(2000)->orderBy('id', 'desc')->get();
            $user->c = User::where('ref_use',$user->ref_code)->count();
            foreach($drops as $drop) {
                $as = \DB::table('items')->where('id', $drop->item)->first();
                $drop->image = $as->image;
            }
            return view('pages.account', compact('user','drops'));
    }


    public function cases($id){
        $case = \DB::table('cases')->where('id',$id)->first();
        $items = \DB::table('items')->where('case', $id)->orderBy('price', 'desc')->first();
        $time = Carbon::now();
        return view('pages.case', compact('case','items','time'));
    }




    public function index(Request $r){
        if($r->r != null){
            if(!Auth::check()){

            }else{
                $this->refuseurl($r->r);
            }
        }
        $cases = \DB::table('cases')->get();
//        $case2 = \DB::table('cases')->where('id', 2)->first();
//        $case3 = \DB::table('cases')->where('id', 3)->first();
//
//        $item1 = \DB::table('items')->where('case', 1)->get();
//        $item2 = \DB::table('items')->where('case', 2)->get();
//        $item3 = \DB::table('items')->where('case', 3)->get();
//
//        $c1 = \DB::table('items')->where('case', 1)->count();
//        $c2 = \DB::table('items')->where('case', 2)->count();
//        $c3 = \DB::table('items')->where('case', 3)->count();

        return view('pages.index', compact('cases'));
    }

    public function refuseurl($code2)
    {
        $code = \DB::table('users')->where('ref_code', $code2)->first();
        if (Auth::user()->ref_use !== NULL) {
            return 'Code used';
        } else if ($code == NULL) {
            return 'Code null';
        } else if (Auth::user()->ref_code == $code2) {
            return 'Code user';
        } else {
            $user = User::find(Auth::user()->id);
            $user->money = $user->money + 5;
            $user->ref_use = $code2;
            $user->save();
            return redirect('/login');
        }
    }

}
