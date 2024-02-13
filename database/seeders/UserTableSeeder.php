<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::updateOrCreate(['email'=>'admin@finberg.com'],['name'=>'admin','email'=>'admin@finberg.com','mobile_number'=>"7903609286",'password'=>Hash::make('12345678')]);

        // $user = User::updateOrCreate(['email'=>'admin@streebd.com'],['name'=>'admin','email'=>'admin@streebd.com','mobile_number'=>"7903609286",'password'=>Hash::make('12345678')]);

    }
}
