<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller {

    public function vklogin(Request $r) {
        $client_id = '6713573';
        $client_secret = 'sk0KPPzMvrXS4c0pddZI';
        $redirect_uri = 'cases/';

        if (!is_null($r->code)) {

            $obj = json_decode($this->curl('https://oauth.vk.com/access_token?client_id=' . $client_id . '&client_secret=' . $client_secret . '&redirect_uri=http://' . $redirect_uri . '/vklogin&code=' . $r->code));

            if (isset($obj->access_token)) {

                $info = json_decode($this->curl('https://api.vk.com/method/users.get?user_ids&fields=photo_200&access_token=' . $obj->access_token . '&v=V'), true);



                $user = User::where('login2', $info['response'][0]['uid'])->first();
                if ($user == NULL) {
                    if (array_key_exists('photo_200', $info['response'][0])) {
                        $photo = $info['response'][0]['photo_200'];
                    } else {
                        $photo = 'http://vk.com/images/camera_200.png';
                    }

                    $user = User::create([
                                'username' => $info['response'][0]['last_name'] . ' ' . $info['response'][0]['first_name'],
                                'avatar' => $photo,
                                'password'=> Hash::make($str_random(12)),
                                'login' => 'id' . $info['response'][0]['uid'],
                                'login2' => $info['response'][0]['uid'],
                                'ref_code' => $this->generate(),
                                'nick' => $this->generate_name()
                    ]);
                } else {
                    if (array_key_exists('photo_200', $info['response'][0])) {
                        $photo = $info['response'][0]['photo_200'];
                    } else {
                        $photo = 'http://vk.com/images/camera_200.png';
                    }
                    $user->username = $info['response'][0]['last_name'] . ' ' . $info['response'][0]['first_name'];
                    $user->avatar = $photo;
                    $user->login = 'id' . $info['response'][0]['uid'];
                    $user->login2 = $info['response'][0]['uid'];
                    $user->save();
                }

                Auth::login($user, true);
                return redirect('/');
            }
        } else {
            return redirect('https://oauth.vk.com/authorize?client_id=' . $client_id . '&display=page&redirect_uri=http://' . $redirect_uri . '/vklogin&scope=friends,photos,status,offline,&response_type=code&v=5.53');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function registerPost(Request $r) {
        $photo = 'http://vk.com/images/camera_200.png';
        $user = User::where('login', $r->login)->first();
        if ($user == NULL) {
            $user = User::create([
                        'username' => $r->name,
                        'email' => $r->email,
                        'login' => $r->login,
                        'avatar' => $photo,
                        'password' => Hash::make($r->password),
                        'ref_code' => $this->generate(),
                        'nick' => $this->generate_name()
            ]);
            Auth::login($user, true);
            return redirect('/');
        } else {
            $user = new User();
            $user->name = $r->name;
            $user->email = $r->email;
            $user->login = $r->login;
            $user->password = "";
            $user->userExist = true;
            return view('pages.register', compact('user'));
        }
    }

    public function loginPost(Request $r) {
        $user = User::where('login', $r->login)->first();
        if ($user != NULL && Hash::check($r->password, $user->password)) {
            Auth::login($user, true);
            return redirect('/');
        }
        $userNotFound = true;
        return view('pages.login', compact('userNotFound'));
    }

    public function register() {
        $user = new User();
        $user->name = "";
        $user->login = "";
        $user->password = "";
        $user->email = "";
        $user->userExist = false;
        return view('pages.register', compact('user'));
    }

    public function login() {
        $userNotFound = false;
        return view('pages.login', compact('userNotFound'));
    }

    public function curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    public function generate_name() {
        $length = 8;
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
        $numChars = strlen($chars);
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= substr($chars, rand(1, $numChars) - 1, 1);
        }
        return $string;
    }

    public function generate() {
        $length = 13;
        $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
        $numChars = strlen($chars);
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= substr($chars, rand(1, $numChars) - 1, 1);
        }
        return $string;
    }

}
