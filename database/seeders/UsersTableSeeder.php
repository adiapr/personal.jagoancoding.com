<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
        $user->name = "Adi Apr";
        $user->email = "da801100@gmail.com";
        $user->password = bcrypt('ac180115');
        $user->save();
    }
}
