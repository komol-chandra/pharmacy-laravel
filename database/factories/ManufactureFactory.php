<?php

namespace Database\Factories;

use App\Models\Manufacture;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ManufactureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Manufacture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'manufac_name' => $this->faker->name,
            'manufac_email' => $this->faker->unique()->safeEmail,
            'manufac_mobile' =>  $this->faker->randomNumber, 
            'manufac_address' => $this->faker->text,
            'manufac_balance' => $this->faker->randomNumber,
            'manufac_details' => $this->faker->text,
        ];
    }
}
