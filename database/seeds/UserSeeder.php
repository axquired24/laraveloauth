<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deleteall = User::truncate();
        $user = new User();
        $user->name = "Albert";
        $user->email = "albert@gmail.com";
        $user->password = bcrypt("admin");
        // $user->api_token = str_random(100);
        $user->save();

        echo "User $user->name Created \n";
    }
}
