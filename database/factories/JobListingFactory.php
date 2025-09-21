<?php

namespace Database\Factories;

use App\Enum\JobListingCategory;
use App\Enum\JobListingExperience;
use App\Models\JobListing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraphs(3, true),
            'salary' => $this->faker->numberBetween(5_000, 150_000),
            'location' => $this->faker->city(),
            'category' => $this->faker->randomElement(JobListingCategory::values()),
            'experience' => $this->faker->randomElement(JobListingExperience::values()),
        ];
    }
}
