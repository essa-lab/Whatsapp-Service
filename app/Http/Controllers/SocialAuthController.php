<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\FacebookProvider;
use Laravel\Socialite\Two\GoogleProvider;

class SocialAuthController extends Controller
{
    public function redirectToProvider(Request $request, $service)
    {   

        $config = config("social-auth.$service");
        return Socialite::buildProvider($service=="google" ? GoogleProvider::class : FacebookProvider::class,$config )->redirect();
    }

    public function handleProviderCallback($service)
    {
        $config = config("social-auth.$service");
        $user_data = Socialite::buildProvider($service=="google" ? GoogleProvider::class : FacebookProvider::class,$config )->stateless()->user();

        $user = User::where('email', $user_data->getEmail())->first();

        $name = explode(' ', $user_data['name']);
        if (count($name) > 1) {
            $fast_name = implode(" ", array_slice($name, 0, -1));
            $last_name = end($name);
        } else {
            $fast_name = implode(" ", $name);
            $last_name = '';
        }

            if ($service=='facebook') {
                $img = $user_data->avatar_original . "&access_token={$user->token}";
                $imageName = ImageManager::update('profile/', $fast_name.' '.$last_name, 'png', $img);
            }else{
                $img = $user_data->avatar;
                $imageName = ImageManager::update('profile/',  $fast_name.' '.$last_name, 'png', $img);
            }

        if (isset($user) == false) {
            $user = User::create([
                'f_name' => $fast_name,
                'l_name' => $last_name,
                'email' => $user_data->getEmail(),
                'phone' => '',
                'image'=>$imageName,
                'password' => bcrypt($user_data->id),
                'is_active' => 1,
                'login_medium' => $service,
                'social_id' => $user_data->id,
                'is_phone_verified' => 0,
                'is_email_verified' => 1,
                'temporary_token' => Str::random(40)
            ]);
        } else {
            $user->temporary_token = Str::random(40);
            $user->save();
        }

        /*if ($user->phone == '') {
            return redirect()->route('customer.auth.update-phone', $user->id);
        }*/
        //redirect if website user
        // $message = self::login_process($user, $user_data->getEmail(), $user_data->id);
        // Toastr::info($message);
        return redirect()->route('home');
    }
}