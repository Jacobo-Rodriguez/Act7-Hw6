<?php

namespace Database\Seeders;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        RoboticsKitSeeder::class,
        UserSeeder::class,
    ]);

    Course::factory(100)->create();
    }
}
