<?php

namespace Database\Factories;

use App\Models\Generic;
use Illuminate\Database\Eloquent\Factories\Factory;

class GenericFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Generic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'generic_name' => $this->faker->name,
            'generic_details' => $this->faker->text,

        ];
    }
}
