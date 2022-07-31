<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\Article;
use App\Models\User;
use App\Models\Role;
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word
        ];
    }
}
