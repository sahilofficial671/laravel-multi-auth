<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Sahil',
            'email'=>'sahilofficial671@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password'=>Hash::make('sahil1234'),
        ]);
        User::create([
            'name'=> 'Rohit',
            'email'=>'rohitsh671@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password'=>Hash::make('sahil1234'),
        ]);
    }
}
