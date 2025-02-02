<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conference>
 */
class ConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $starts_at = now()->addMonths(6);
        $ends_at = $starts_at->clone()->addDays(3);
        $cfp_starts_at = $starts_at->clone()->subMonths(4);
        $cfp_ends_at = $cfp_starts_at->clone()->subMonths(4);

        return [
            'title' => fake()->sentence(),
            'location' => fake()->city(),
            'description' => fake()->paragraph(),
            'url' => fake()->url(),
            'starts_at' => $starts_at,
            'ends_at' => $ends_at,
            'cfp_starts_at' => $cfp_starts_at,
            'cfp_ends_at' => $cfp_ends_at,
        ];
    }
}
