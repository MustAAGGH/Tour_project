<?php

namespace Database\Factories;

use App\Models\Organizer;
use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organizer>
 */
class OrganizerFactory extends Factory
{



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'age'=>fake()->numberBetween(18,70),
            'experience'=>fake()->numberBetween(1,30)
        ];
    }
}
