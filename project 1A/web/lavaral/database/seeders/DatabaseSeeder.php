<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\Article;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
      
        // Beverage::factory(10)->create();
        User::factory(10)->create();
        Profile::factory(10)->create();
        Tag::factory(7)->create();
        Article::factory(7)->create()->each(function($article){
           $ids = range(1, 7);
           shuffle($ids);//trộn
           $sliced = array_slice($ids, 1, 3);
           $article->tags()->attach($sliced);
       });
    }
}
