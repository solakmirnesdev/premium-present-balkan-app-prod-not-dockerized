<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $this->seedMultipleUsers($faker, 10000);
    }

    /**
     * Seed a specific user.
     *
     * @param \Faker\Generator $faker
     */
    private function seedSpecificUser($faker): void
    {
        DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);
    }

    /**
     * Seed multiple users.
     *
     * @param \Faker\Generator $faker
     * @param int $count
     */
    private function seedMultipleUsers($faker, int $count): void
    {
        for ($i = 0; $i < $count; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
            ]);
        }
    }
}
