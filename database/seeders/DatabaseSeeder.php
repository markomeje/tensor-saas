<?php

namespace Database\Seeders;
use App\Models\Conference;
use App\Models\Talk;
use App\Models\Tenant;
use App\Models\User;
use Database\Factories\ConferenceFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tenant::factory()->count(9)->create();
        User::factory()
            ->count(34)
            ->has(Talk::factory()->count(5))
            ->create(['tenant_id' => rand(1, 9)]);

            Conference::factory()->count(5)->create();
    }
}
