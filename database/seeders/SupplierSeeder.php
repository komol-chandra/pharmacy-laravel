<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'supplier_name'    => "alendronate",
            'supplier_mobile'  => "01874303467",
            'supplier_email'   => "alendronate@gmail.com",
            'supplier_address' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
            'supplier_previous_balance' => "1500",
            "supplier_current_balance"=>"2000"
        ]);
        DB::table('suppliers')->insert([
            'supplier_name'    => "jon",
            'supplier_mobile'  => "01874303469",
            'supplier_email'   => "jon@gmail.com",
            'supplier_address' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
            'supplier_previous_balance' => "1500",
            'supplier_current_balance' => "1500",
        ]);
        DB::table('suppliers')->insert([
            'supplier_name'    => "harry",
            'supplier_mobile'  => "01874303468",
            'supplier_email'   => "harry@gmail.com",
            'supplier_address' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
            'supplier_previous_balance' => "1500",
            'supplier_current_balance' => "1500",
        ]);
        DB::table('suppliers')->insert([
            'supplier_name'    => "spider",
            'supplier_mobile'  => "01874303410",
            'supplier_email'   => "spider@gmail.com",
            'supplier_address' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
            'supplier_previous_balance' => "1500",
            'supplier_current_balance' => "1500",
        ]);
    }
}
