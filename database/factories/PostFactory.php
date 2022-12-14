<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
        $title = $this->faker->sentence;
        $slug = Str::slug($title, '-');

        return [
            'user_id' => User::factory(),
            'category_id' =>
            2,
            // Category::where('name','like','Tests')->pluck('id'),
            // returns 1x1 array, expects string
            'title' => $title,
            'slug' => $slug,
            'excerpt' => $this->faker->sentence,
            'body' => $this->faker->paragraph,

        ];
    }
}
