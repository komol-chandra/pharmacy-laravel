<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CustomarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customars')->insert([
            'customar_name' => "Mr.X",
            'customar_mobile' => "010101010101",
            'customar_address' => "Mirpur-1,Dhaka",
        ]);
        DB::table('customars')->insert([
            'customar_name' => "Mr.X",
            'customar_mobile' => "010101010102",
            'customar_address' => "Mirpur-1,Dhaka",
        ]);
        DB::table('customars')->insert([
            'customar_name' => "Mr. Jahid",
            'customar_mobile' => "010101010103",
            'customar_address' => "Mirpur-2,Dhaka",
        ]);
        DB::table('customars')->insert([
            'customar_name' => "Mr. Refat",
            'customar_mobile' => "010101010104",
            'customar_address' => "Mirpur-1,Dhaka",
        ]);
        DB::table('customars')->insert([
            'customar_name' => "Mr. Tanvir",
            'customar_mobile' => "010101010105",
            'customar_address' => "Mirpur-1,Dhaka",
        ]);
        DB::table('customars')->insert([
            'customar_name' => "Mr. Ahsan",
            'customar_mobile' => "010101010106",
            'customar_address' => "Mirpur-1,Dhaka",
        ]);
        DB::table('customars')->insert([
            'customar_name' => "Mr.Y",
            'customar_mobile' => "010101010107",
            'customar_address' => "Mirpur-1,Dhaka",
        ]);

    }
}
