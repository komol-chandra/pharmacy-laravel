<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufactures')->insert([
            'manufac_name'    => "alendronate",
            'manufac_mobile'  => "01874303467",
            'manufac_email'   => "alendronate@gmail.com",
            'manufac_address' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
            'manufac_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
            'manufac_balance' => "1500",
        ]);
        DB::table('manufactures')->insert([
            'manufac_name'    => "jon",
            'manufac_mobile'  => "01874303469",
            'manufac_email'   => "jon@gmail.com",
            'manufac_address' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
            'manufac_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
            'manufac_balance' => "1500",
        ]);
        DB::table('manufactures')->insert([
            'manufac_name'    => "harry",
            'manufac_mobile'  => "01874303468",
            'manufac_email'   => "harry@gmail.com",
            'manufac_address' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
            'manufac_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
            'manufac_balance' => "1500",
        ]);
        DB::table('manufactures')->insert([
            'manufac_name'    => "spider",
            'manufac_mobile'  => "01874303410",
            'manufac_email'   => "spider@gmail.com",
            'manufac_address' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
            'manufac_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
            'manufac_balance' => "1500",
        ]);
        DB::table('manufactures')->insert([
            'manufac_name'    => "ant",
            'manufac_mobile'  => "01874313467",
            'manufac_email'   => "ant@gmail.com",
            'manufac_address' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
            'manufac_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
            'manufac_balance' => "1500",
        ]);

    }
}
