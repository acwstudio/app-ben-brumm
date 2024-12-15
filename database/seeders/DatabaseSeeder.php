<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        $this->call(StoneTypeSeeder::class);
        $this->call(InsertShapeSeeder::class);
        $this->call(InsertColourSeeder::class);
        $this->call(StoneSeeder::class);
        $this->call(InsertSeeder::class);
        $this->call(InsertPropertySeeder::class);
        $this->call(SampleSeeder::class);
        $this->call(PrcsMetalSeeder::class);
        $this->call(PrcsCoverageSeeder::class);
        $this->call(PrcsMetalColourSeeder::class);
        $this->call(PrcsMetalPropertySeeder::class);
        $this->call(JewellerySeeder::class);
    }
}
