<?php

namespace Database\Factories;

use App\Enums\TalkTypeEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Talk>
 */
class TalkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => fake()->sentence(),
            'type' => fake()->randomElement(TalkTypeEnum::cases())->value,
            'length' => rand(15, 60),
            'abstract' => fake()->paragraph(),
            'organizer_notes' => fake()->paragraph(),
        ];
    }
}
