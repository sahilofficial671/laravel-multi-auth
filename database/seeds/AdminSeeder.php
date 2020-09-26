<?php

use App\Admin;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=> 'Sahil',
            'email'=>'sahilofficial671@gmail.com',
            'role'=>'Super Admin',
            'email_verified_at' => Carbon::now(),
            'password'=>Hash::make('sahil1234'),
        ]);
        Admin::create([
            'name'=> 'Rohit',
            'email'=>'rohitsh671@gmail.com',
            'role'=>'Sub Admin',
            'email_verified_at' => Carbon::now(),
            'password'=>Hash::make('sahil1234'),
        ]);
    }
}
