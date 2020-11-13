<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'supplier_name' => $this->faker->name,
            'supplier_address' => $this->faker->text,
            'supplier_mobile' =>  $this->faker->randomNumber,
            'supplier_email' => $this->faker->unique()->safeEmail,
            'supplier_previous_balance' => $this->faker->randomNumber,
            'supplier_current_balance' => $this->faker->randomNumber,
            'status' => 1,
        ];
    }
}
