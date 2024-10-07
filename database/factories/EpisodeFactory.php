<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{
    static $number = 1;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'length_in_minutes' => rand(1,60),
            'sort' => fake()->unique()->randomNumber($number = 1, $strict = false),
            'vimeo_id' => fake()->randomElement(['681917052', '323323909', '236553268', '178149841', '964731897', '83037590', '45790551', '4664796']),
            'overview' => fake()->sentence(),
            'course_id' => Course::factory(),
        ];
    }

    function autoIncrement()
    {
        for($i = 0; $i < 10; $i++){
            return $i;
        }
    }
}
