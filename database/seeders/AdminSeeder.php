<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Admin::create([ 'name'=> 'Admin','email'=>'admin@gmail.com','password'=>"admin1234"]);
        Admin::create([ 'name'=> 'Admin1','email'=>'nabin@gmail.com','password'=>Hash::make('admin1234')]);
    }
}
