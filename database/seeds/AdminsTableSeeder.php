<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Admin();
        $user->name = 'Ankush Raikwar';
        $user->email = 'ankush.ggits@gmail.com';
        $user->password = crypt('download', '');
        $user->picture = '';
        $user->save();
    }
}
