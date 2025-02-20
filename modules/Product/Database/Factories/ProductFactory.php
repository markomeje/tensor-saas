<?php

namespace Modules\Product\Database\Factories;
use App\Enums\TalkTypeEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Product\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Talk>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = new Product();
        $product->getCreatedAtColumn();

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
