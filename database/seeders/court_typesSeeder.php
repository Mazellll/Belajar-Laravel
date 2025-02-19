<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class court_typesSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i=1; $i <=10; $i++ ){
            DB::table('court_types')->insert([
                'name' => 'Tipe ' .$i,
            ]);
        }
    }
}
