<?php

namespace Database\Factories\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin\Apellido>
 */
class ApellidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lastname' => $this->faker->lastName(),
            'user_id' => function () {
                return User::factory()->create()->id;
            },
        ];
    }
}