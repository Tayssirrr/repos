<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->company(),
            'logo'=>fake()->imageUrl(),
            'adresse'=>fake()->address(),
            'boss'=>fake()->name(),
            'manager'=>fake()->name(),
            'email'=>fake()->companyEmail(),
            'Number'=>fake()->phoneNumber(),
            'description'=>fake()->text(),
            'video'=>'http://video.com',
        ];
    }
}
