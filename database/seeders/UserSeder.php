<?php

namespace Database\Seeders;

use App\Models\User; // important
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // important

class UserSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); // to removes all rows from a table

        User::create(
            [
                'name'=>'mahmoud',
                'email'=>'m@gmail.com',
                'password'=>Hash::make('12345678'),
            ]);

        User::create(
            [
                'name'=>'ahmed nour',
                'email'=>'a@gmail.com',
                'password'=>Hash::make('12345678'),
            ]);
//        $this->call([
//            UserSeder::class
//        ]);
    }
}
