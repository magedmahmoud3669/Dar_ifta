<?php

namespace Database\Factories;

use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
//            'First name' => $this->faker->sentence,
//            'last name' => $this->faker->sentence,
//            'Company' => $this->faker->numberBetween(0,300),
//            'email' => $this->faker->sentence,
//            'phone number' => $this->faker->phoneNumber,


        ];
    }
}
