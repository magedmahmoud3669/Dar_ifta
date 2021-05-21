<?php

namespace Database\Factories;

use App\Models\company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id' => $this->faker->numberBetween(0,300),
            'Name' => $this->faker->sentence,
            'email' => $this->faker->sentence,
            'logo' => $this->faker->image('public/images',100,100, null, false),

            'website' => $this->faker->sentence,

        ];
    }
}
