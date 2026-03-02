<?php

namespace Database\Factories;
use App\Models\RoboticsKit;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'course_key' => $this->faker->unique()->bothify('Rob###'),
        'title' => $this->faker->sentence(3),
        'cover' => $this->faker->imageUrl(640, 480, 'education', true),
        'content' => $this->faker->paragraph(5),
        'robotics_kit_id' => RoboticsKit::inRandomOrder()->first()->id
        ];
    }
}
