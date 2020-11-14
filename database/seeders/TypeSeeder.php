<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'type_name'        => "Liquid",
            'type_description' => "The active part of the medicine is combined with a liquid to make it easier to take or better absorbed. A liquid may also be called a ‘mixture’, ‘solution’ or ‘syrup’. Many common liquids are now available without any added colouring or sugar.",
        ]);
        DB::table('types')->insert([
            'type_name'        => "Tablet",
            'type_description' => "The active ingredient is combined with another substance and pressed into a round or oval solid shape. There are different types of tablet. Soluble or dispersible tablets can safely be dissolved in water. ",
        ]);
        DB::table('types')->insert([
            'type_name'        => "Capsules",
            'type_description' => "The active part of the medicine is contained inside a plastic shell that dissolves slowly in the stomach. You can take some capsules apart and mix the contents with your child’s favourite food. Others need to be swallowed whole, so the medicine isn’t absorbed until the stomach acid breaks down the capsule shell.",
        ]);
        DB::table('types')->insert([
            'type_name'        => "Drops",
            'type_description' => "These are often used where the active part of the medicine works best if it reaches the affected area directly. They tend to be used for eye, earor nose.",
        ]);
        DB::table('types')->insert([
            'type_name'        => "Injections",
            'type_description' => "There are different types of injection, in how and where they're injected. Subcutaneous or SC injections are given just under the surface of the skin. Intramuscular or IM injections are given into a muscle. Intrathecal injections are given into the fluid around the spinal cord. Intravenous or IV injections are given into a vein. Some injections can be given at home but most are given at your doctor’s surgery or in hospital.",
        ]);

    }
}
