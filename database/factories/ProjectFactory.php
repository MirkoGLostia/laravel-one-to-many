<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => fake() -> sentence(),
            "description" => fake() -> sentence(10),
            "authors" => fake() -> name(),
            "start_date" => fake() -> dateTimeThisYear(),
            "end_date" => fake() -> dateTimeThisMonth()
        ];
    }
}
