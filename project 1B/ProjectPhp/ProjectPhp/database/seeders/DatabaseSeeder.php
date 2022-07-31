<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use App\Models\Tag;
use App\Models\Profile;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(10)->create();
         Role::factory(3)->create();
         Profile::factory(10)->create();
         Tag::factory(10)->create();
         Article::factory(10)->create()->each(function($article){
            $ids = range(1, 10);
            shuffle($ids);//trộn
            $sliced = array_slice($ids, 1, 3);
            $article->tags()->attach($sliced);
        });
    }
}
