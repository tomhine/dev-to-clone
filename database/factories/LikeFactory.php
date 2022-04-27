<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    private int $user_id = 1;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->user_id,
            'post_id' => rand(1, 50),
        ];

        $this->incrementUser();
    }

    private function incrementUser(): void
    {
        $this->user_id = ($this->user_id % 10) + 1;
    }
}
