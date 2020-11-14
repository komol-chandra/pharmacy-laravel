<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenericSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generics')->insert([
            'generic_name'    => "alendronate tablet",
            'generic_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi omnis, iusto totam nostrum non labore.",
        ]);
        DB::table('generics')->insert([
            'generic_name'    => "acyclovir capsule",
            'generic_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi omnis, iusto totam nostrum non labore.",
        ]);
        DB::table('generics')->insert([
            'generic_name'    => "acyclovir tablet",
            'generic_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi omnis, iusto totam nostrum non labore.",
        ]);
        DB::table('generics')->insert([
            'generic_name'    => "albuterol inhalation solution",
            'generic_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi omnis, iusto totam nostrum non labore.",
        ]);
        DB::table('generics')->insert([
            'generic_name'    => "albuterol sulfate",
            'generic_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi omnis, iusto totam nostrum non labore.",
        ]);
        DB::table('generics')->insert([
            'generic_name'    => "alclometasone dipropionate cream",
            'generic_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi omnis, iusto totam nostrum non labore.",
        ]);
        DB::table('generics')->insert([
            'generic_name'    => "alfuzosin hcl",
            'generic_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi omnis, iusto totam nostrum non labore.",
        ]);
        DB::table('generics')->insert([
            'generic_name'    => "alitretinoin",
            'generic_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi omnis, iusto totam nostrum non labore.",
        ]);
        DB::table('generics')->insert([
            'generic_name'    => "allopurinol tablet",
            'generic_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi omnis, iusto totam nostrum non labore.",
        ]);
        DB::table('generics')->insert([
            'generic_name'    => "alprazolam",
            'generic_details' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi omnis, iusto totam nostrum non labore.",
        ]);

    }
}
