<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //otomatis
         \App\Models\User::factory(10)->create();

       // Manual
         \App\Models\User::factory()->create([
             'name' => 'Danang user',
             'email' => 'danangnie@gmail.com',
             'password' => Hash::make('12345678'),
         ]);

         // data dummy for company
        \App\Models\Company::create([
            'name' => 'PT. ABCD',
            'email' => 'Mobepic1@gmail.com',
            'address' => 'Jl. Raya Aja',
            'latitude' => '-7.74703345',
            'longitude' => '110.35539812',
            'radius_km' => '0.5',
            'time_in' => '08:00',

        ]);
    }
}