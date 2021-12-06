<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator, Illuminate\Support\Facades\Redirect, Illuminate\Support\Facades\Response, Illuminate\Support\Facades\File;

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



        $getInfo = Socialite::driver($provider)->user();



        $user = $this->createUser($getInfo,$provider);



        auth()->login($user);



        return redirect()->route("notes.index");



    }

    function createUser($getInfo,$provider){



        $user = User::where('provider_id', $getInfo->id)->first();



        if (!$user) {

            $user = User::create([

                'name'     => $getInfo->name,

                'email'    => $getInfo->email,

                'provider' => $provider,

                'provider_id' => $getInfo->id

            ]);

        }

        return $user;

    }

}
