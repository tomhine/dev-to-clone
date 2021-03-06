<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'tags' => $this->getRandomTags(),
            'content' => $this->faker->text(rand(1000, 5000)),
            'banner_image_url' => "post-banner-" . rand(1, 5) . '.webp',
            'author_id' => rand(1, 10),
            'created_at' => $this->faker->dateTimeBetween('-30 days'),
        ];
    }

    /**
     * Get a comma seperated string of tags
     *
     * @param integer $minTags minimum amount of tags inclusive
     * @param integer $maxTags maximum amount of tags inclusive
     * @return string comma seperated string of tags
     */
    private function getRandomTags(int $minTags = 1, int $maxTags = 4): string
    {
        $words = ['javascript', 'laravel', 'php', 'webdev', 'python', 'html', 'css', 'tailwind', 'sql', 'vue', 'react', 'postgresql', 'supabase'];

        $nbLoops = rand($minTags, $maxTags);

        $tagArray = [];

        for ($i = 0; $i < $nbLoops; $i++) {
            array_push($tagArray, $words[rand(0, count($words) - 1)]);
        }

        $uniqueTagArray = array_unique($tagArray);

        return implode(",", $uniqueTagArray);
    }
}
