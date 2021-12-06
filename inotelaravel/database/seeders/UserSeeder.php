<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make("admin");
        $user->save();

        $user = new User();
        $user->name = "Lan Hương";
        $user->email = "hoangvi@gmail.com";
        $user->password = Hash::make("pengalx1");
        $user->save();
    }
}
