<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CustomarSeeder::class,
            GenericSeeder::class,
            ManufactureSeeder::class,
            SupplierSeeder::class,
            UnitSeeder::class,
            TypeSeeder::class,
        ]);
    }
}
