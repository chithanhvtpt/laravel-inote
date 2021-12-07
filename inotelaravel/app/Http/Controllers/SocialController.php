<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class SocialController extends Controller

{

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->stateless()->user();
        $user = $this->createUser($getInfo, $provider);
        auth()->login($user);
        toastr()->success("Xin chào ". Auth::user()->name);
        return redirect()->route("notes.index");


    }

    function createUser($getInfo, $provider)
    {


//        $user = User::where('provider_id', $getInfo->id)->first();
        $user = User::where('email', $getInfo->email)->first();
        if (!$user) {

            $user = User::create([

                'name' => $getInfo->name,

                'email' => $getInfo->email,

                "avatar" => $getInfo->avatar,

                'provider' => $provider,

                'provider_id' => $getInfo->id

            ]);


        } else {
            $user->update([
                "name" => $getInfo->name,
                "avatar" => $getInfo->avatar,
                "provider" => $provider,
                "provider_id" => $getInfo->id
            ]);
        }

        return $user;

    }

}
