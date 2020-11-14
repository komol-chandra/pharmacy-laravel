<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            'unit_name'    => "Box",
            'unit_description'  => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
        ]);
        DB::table('units')->insert([
            'unit_name'    => "Piece",
            'unit_description'  => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
        ]);
        DB::table('units')->insert([
            'unit_name'    => "Liter",
            'unit_description'  => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
        ]);
        DB::table('units')->insert([
            'unit_name'    => "Gram",
            'unit_description'  => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
        ]);

    }
}
