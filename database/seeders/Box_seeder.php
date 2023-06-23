<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Box_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        // insert ke table siswas
        for ($i = 1; $i <= 10; $i++) {
            DB::table('boxes')->insert([
                'tgl_box' => $faker->date(),
                'return_box' => $faker->randomDigitNotNull(),
                'total_box' => $faker->randomDigit(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
