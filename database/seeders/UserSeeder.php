<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert 1 Data
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@example.com',
        //     'password' => Hash::make('admin12345')
        // ]);

        // Batch
        // for($i=1; $i <=10; $i++ ){
        //     DB::table('users')->insert([
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@example.com',
        //         'password' => Hash::make('admin12345')
        //     ]);
        // }

        // Batch with faker
        $faker = Faker::create('id_ID'); //Set local Indo pake ID
        for($i=0; $i <=10; $i++ ){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('admin12345')
            ]);
        }
    }
}
