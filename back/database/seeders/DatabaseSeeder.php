<?php

namespace Database\Seeders;

use App\Models\Classs;
use App\Models\Roles;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Roles::create([
            'roles' => 'admin',

        ]);
        Classs::create([
            'className' => 'A+',
            'tethName' => 'MM',
            'time' => '20:00',
            'target' => 'ss',
            'startDate' => '12/1/2000',
            'endDate' => '12/1/2019',
            'numberClass' => "5",
            'discretion' => 'SSS',


        ]);
        user::create([
            'name' => 'mohammed',
            'phone' => '01040479006',
            'location' => 'aa',
     
            'email' => 'aaa@aaa',
            'password' => '123456',



        ]);
    }
}
