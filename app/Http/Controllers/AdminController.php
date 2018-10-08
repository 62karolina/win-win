<?php

namespace App\Http\Controllers;

use App\User;
use App\Cases;
use App\Stock;
use App\Deliver;
use App\Delivery;
use Crypt;
use App\Payments;
use Illuminate\Http\Request;
use App\Items;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function index()
    {
        $drop = \DB::table('history')->orderBy('id', 'desc')->take(20)->get();
        foreach ($drop as $i) {
            $user = User::find($i->user);
            if($user != null){
              $i->username = $user->username;
              $i->user = $user->id;
              if($i->case == 1){$i->price = 'Gray';}
              if($i->case == 2){$i->price = 'Green';}
              if($i->case == 3){$i->price = 'Red';}
            }
        }
        return view('admin.index', compact('drop'));
    }

    public function addCase()
    {
        return view('admin.add');
    }
    public function cases()
    {
      $cases = \DB::table('cases')->orderBy('price', 'asc')->paginate(100);
        return view('admin.cases', compact('cases'));
    }
    public function caseid($id)
    {
        $case = Cases::find($id);
        return view('admin.case', compact('case'));
    }
    public function casedit(Request $request)
    {
        $case = Cases::find($request->get('id'));
        $case->name = $request->get('name');
        $case->type = $request->get('type');
        $case->price = $request->get('price');
        $case->image = $request->get('image');
        $case->save();
        return redirect('/admin/cases');

    }
    public function users()
    {
      $users = \DB::table('users')->orderBy('id', 'asc')->paginate(100);
        return view('admin.users', compact('users'));
    }
    public function search2(Request $request)
    {
        $users = User::select('users.id',
            'users.username',
            'users.avatar', 'users.money',
            'users.login',
             \DB::raw('COUNT(last_drops.user) as open_box'))->join('last_drops', 'last_drops.user', '=', 'users.id')->where('login', 'LIKE', '%' . $request->get('name') . '%')->orderby('id', 'desc')->paginate(20);
        return view('admin.users', compact('users'));

    }
    public function searchusersname(Request $request)
    {
        $users = User::select('users.id',
            'users.username',
            'users.avatar', 'users.money',
            'users.login',
             \DB::raw('COUNT(last_drops.user) as open_box'))->join('last_drops', 'last_drops.user', '=', 'users.id')->where('username', 'LIKE', '%' . $request->get('name') . '%')->orderby('id', 'desc')->paginate(20);
        return view('admin.users', compact('users'));
    }
    public function givemoney($id, Request $request)
    {
        $user = User::find($id);
        if ($request->get('money')) {
            $user->money += $request->get('money');
            $user->save();
            return redirect('/admin/users');
        }
        return view('admin.givemoney', compact('user'));
    }
    public function userid($id)
    {
        $user = User::find($id);
        return view('admin.user', compact('user'));
    }
    public function userdit(Request $request)
    {
        $user = User::find($request->get('id'));
        $user->money = $request->get('money');
        $user->username = $request->get('username');
        $user->is_admin = $request->get('is_admin');
        $user->is_yt = $request->get('is_yt');
        $user->save();
        return redirect('/admin/users');

    }
    public function ticketsave(Request $request){
      $ticket = Ticket::find($request->get('id'));
      $ticket->name = $request->get('name');
      $ticket->price = $request->get('price');
      $ticket->places = $request->get('places');
      $ticket->jackpot = $request->get('jackpot');
      $ticket->save();
      return redirect('/admin/tickets');
    }
    public function generateCase($case){
        $t = Cases::where('id',$case)->first();
        $items = explode(",", $t->items);

    foreach($items as $item2){
          $t2 = Items::where('price',$item2)->where('cases_id', $case)->get();
      if(count($t2) == null || count($t2) == 0){
          $img = '/uploads/coin-'.$item2.'.svg';
          Items::create([
              'img' => $img,
              'price' => $item2,
              'cases_id' => $t->id
          ]);
        }
      }
        $t33 = Items::where('cases_id', $case)->get();
        foreach ($t33 as $key) {
          if(in_array($key->price, $items) == 1){

          }else{
            $td = Items::where('price',$key->price)->where('cases_id',$t->id)->first();
            $td->delete();
          }
        }
    }

    public function generateGift($case){
        $t = Cases::where('id',$case)->first();
        $items = explode(",", $t->items);

    foreach($items as $item2){
      $aca = substr($item2,-1);

      if($aca == 'g'){
        $t1213 = Items::where('price','12345')->where('cases_id', $case)->get();
          if(count($t1213) == null || count($t1213) == 0){
            $img = '/uploads/gift-'.$item2.'.png';
            Items::create([
                'img' => $img,
                'price' => 12345,
                'cases_id' => $t->id
            ]);
          }
      }else{
            $t2 = Items::where('price',$item2)->where('cases_id', $case)->get();
        if(count($t2) == null || count($t2) == 0){
            $img = '/uploads/coin-'.$item2.'.svg';
            Items::create([
                'img' => $img,
                'price' => $item2,
                'cases_id' => $t->id
            ]);
          }
      }
      $t33 = Items::where('cases_id', $case)->get();
      foreach ($t33 as $key) {
        $aca = substr($item2,-1);

        if($aca == 'g'){

        }else{
          if(in_array($key->price, $items) == 1){

          }else{
            $td = Items::where('price',$key->price)->where('cases_id',$t->id)->first();
            $td->delete();
          }
        }
      }
      }
    }
    public function addCasePost(Request $r)
    {
        \DB::table('cases')->insertGetId([
            'name' => $r->name,
            'price' => $r->price,
            'type' => $r->type,
            'image' => $r->image
        ]);
        return redirect('/admin/addCase');
    }


    public function addItem()
    {
        return view('admin.addItem');
}

    public function addStock()
    {
        $cases =   \DB::table('cases')->orderBy('id', 'desc')->where('id','>',0)->get();
        $items = \DB::table('items')->orderBy('id', 'desc')->where('id','>',0)->get();
        return view('admin.stock', compact('items','cases'));
    }

    public function addStockPost(Request $r)
    {
        if($r->case == '0'){
            if($r->type == 'random'){
                $file = $r->file('keys');
                $nr = mt_rand(0,1999999);
                $name = 'keys'.'-'.$nr.'.csv';
                if ($file) {
                    Storage::disk('local')->put($file->getClientOriginalName(), File::get($file));

                    $file22= storage_path().'/app/'.$file->getClientOriginalName();
                    $csv= file_get_contents($file22);
                    $array = array_map("str_getcsv",preg_split('/\r*\n+|\r+/', $csv));
                    $json = json_encode($array);
                    $widget_id = str_replace(array('[',']'), '',$json);
                    $ac =  str_replace('"',"",$widget_id);
                    $ac2 = str_replace(',',"",$ac);
                    $items = explode(";", $ac2);
                    foreach($items as $item2){
                        if($item2 == ''){

                        }else{
                            Stock::create([
                                'key' => $item2,
                                'case' => $r->case,
                                'type' => $r->type,
                                'game' => 'random'
                            ]);
                        }
                    }
                }
            }else{
                $file = $r->file('keys');
                $nr = mt_rand(0,1999999);
                $name = 'keys'.'-'.$nr.'.csv';

                if ($file) {
                    Storage::disk('local')->put($file->getClientOriginalName(), File::get($file));

                    $file22= storage_path().'/app/'.$file->getClientOriginalName();
                    $csv= file_get_contents($file22);
                    $array = array_map("str_getcsv",preg_split('/\r*\n+|\r+/', $csv));
                    $json = json_encode($array);
                    $widget_id = str_replace(array('[',']'), '',$json);
                    $ac =  str_replace('"',"",$widget_id);
                    $ac2 = str_replace(',',"",$ac);
                    $items = explode(";", $ac2);
                    foreach($items as $item2){
                        if($item2 == ''){

                        }else{
                            Stock::create([
                                'key' => $item2,
                                'case' => $r->case,
                                'type' => $r->type,
                                'game' => $r->game
                            ]);
                        }
                    }
                }
            }
        }else{
            if($r->type == 'random'){
                $file = $r->file('keys');
                $nr = mt_rand(0,1999999);
                $name = 'keys'.'-'.$nr.'.csv';

                if ($file) {
                    Storage::disk('local')->put($file->getClientOriginalName(), File::get($file));

                    $file22= storage_path().'/app/'.$file->getClientOriginalName();
                    $csv= file_get_contents($file22);
                    $array = array_map("str_getcsv",preg_split('/\r*\n+|\r+/', $csv));
                    $json = json_encode($array);
                    $widget_id = str_replace(array('[',']'), '',$json);
                    $ac =  str_replace('"',"",$widget_id);
                    $ac2 = str_replace(',',"",$ac);
                    $items = explode(";", $ac2);
                    foreach($items as $item2){
                        if($item2 == ''){

                        }else{
                            Stock::create([
                                'key' => $item2,
                                'case' => $r->case,
                                'type' => $r->type,
                                'game' => 'random'
                            ]);
                        }
                    }
                }
            }else{
                $file = $r->file('keys');
                $nr = mt_rand(0,1999999);
                $name = 'keys'.'-'.$nr.'.csv';
                if ($file) {
                    Storage::disk('local')->put($file->getClientOriginalName(), File::get($file));

                    $file22= storage_path().'/app/'.$file->getClientOriginalName();
                    $csv= file_get_contents($file22);
                    $array = array_map("str_getcsv",preg_split('/\r*\n+|\r+/', $csv));
                    $json = json_encode($array);
                    $widget_id = str_replace(array('[',']'), '',$json);
                    $ac =  str_replace('"',"",$widget_id);
                    $ac2 = str_replace(',',"",$ac);
                    $items = explode(";", $ac2);

                    foreach($items as $item2){
                        if($item2 == ''){

                        }else{
                            Stock::create([
                                'key' => $item2,
                                'case' => $r->case,
                                'type' => $r->type,
                                'game' => $r->game
                            ]);
                        }
                    }
                }
            }
        }

        return redirect('/admin/stock');
    }


    public function addItemPost(Request $r)
    {
        \DB::table('items')->insertGetId([
            'image' => $r->image,
            'price' => $r->price,
            'case' => $r->case,
            'name' => $r->name,
            'type' => $r->type
        ]);
        return redirect('/admin/addItem');
    }

    public function lastvvod()
    {
      $a = \DB::table('payments')->orderBy('id', 'desc')->where('status', 1)->take(20)->get();
      foreach ($a as $b) {
        $u = User::find($b->user);
        $b->name = $u->username;
        $b->name_id = $u->id;
      }

      return view('admin.lastvvod', compact('a'));
    }

    public function vivod()
    {
        $delivers = Deliver::where('tracking','null')->orderBy('id','asc')->get();
        if(count($delivers) != 0){
            foreach ($delivers as $d){
                $uk = User::where('id',$d->user)->first();
                if($d->item1 != 0){$item1 = Items::where('id',$d->item1)->first(); $d->item1 = $item1->image;}else{$d->item1 = 'null';}
                if($d->item2 != 0){$item2 = Items::where('id',$d->item2)->first(); $d->item2 = $item2->image;}else{$d->item2 = 'null';}
                if($d->item3 != 0){$item3 = Items::where('id',$d->item3)->first(); $d->item3 = $item3->image;}else{$d->item3 = 'null';}
                if($d->item4 != 0){$item4 = Items::where('id',$d->item4)->first(); $d->item4 = $item4->image;}else{$d->item4 = 'null';}
                if($d->item5 != 0){$item5 = Items::where('id',$d->item5)->first(); $d->item5 = $item5->image;}else{$d->item5 = 'null';}
                $d->name = $uk->username;
                $d->user_id = $uk->id;
            }
        }
      return view('admin.vivod', compact('delivers'));
    }

    public function vivodsave(Request $r){
        $deliver = Deliver::where('id',$r->id)->first();
        $deliver->tracking = $r->tracking;
        $deliver->save();
        return redirect('/admin/lastvivod');
    }
    public function close($id)
    {
     $deliver = Deliver::where('id',$id)->first();
     $dev = Delivery::where('user',$deliver->user)->first();
        if(count($dev) != 0){
            $deliver->country = Crypt::decrypt($dev->country);
            $deliver->city  = Crypt::decrypt($dev->city);
            $deliver->postalcode = Crypt::decrypt($dev->postalcode);
            $deliver->dom = Crypt::decrypt($dev->dom);
            $deliver->kvartira = Crypt::decrypt($dev->kvartira);
            $deliver->street = Crypt::decrypt($dev->street);
            $deliver->name = Crypt::decrypt($dev->name); //
        }
        if($deliver->item1 != 0){$item1 = Items::where('id',$deliver->item1)->first(); $deliver->item1 = $item1->name;}else{$deliver->item1 = 'null';}
        if($deliver->item2 != 0){$item2 = Items::where('id',$deliver->item2)->first(); $deliver->item2 = $item2->name;}else{$deliver->item2 = 'null';}
        if($deliver->item3 != 0){$item3 = Items::where('id',$deliver->item3)->first(); $deliver->item3 = $item3->name;}else{$deliver->item3 = 'null';}
        if($deliver->item4 != 0){$item4 = Items::where('id',$deliver->item4)->first(); $deliver->item4 = $item4->name;}else{$deliver->item4 = 'null';}
        if($deliver->item5 != 0){$item5 = Items::where('id',$deliver->item5)->first(); $deliver->item5 = $item5->name;}else{$deliver->item5 = 'null';}
        return view('admin.deliver', compact('deliver'));
    }



    public function closegift($id)
    {
      \DB::table('last_gifts')->where('id', $id)->update(['status' => 3]);
      return redirect('/admin/vivodgifts');
    }
}
