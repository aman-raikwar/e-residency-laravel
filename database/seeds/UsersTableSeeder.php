<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Aman Raikwar';
        $user->email = 'aman.btech12@gmail.com';
        $user->password = crypt('download', '');
        $user->phone = '9425388641';
        $user->gender = 'M';
        $user->location = 'Indore';
        $user->picture = '';
        $user->bio = 'I m Web Developer!';
        $user->save();
    }
}
