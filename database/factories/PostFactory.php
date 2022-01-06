<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentences(mt_rand(2,6)),
            'category_id' => mt_rand(1,3),
            'user_id' => mt_rand(1,3),
            'slug' => $this->faker->slug(mt_rand(2,6)),
            'author' => $this->faker->name(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5,10))) . '</p>'
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(fn($p)=>"<p>$p</p>")
                        ->implode("")
        ];
    }
}
