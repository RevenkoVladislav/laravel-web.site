<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

//        Category::factory(5)->create();
//        $posts = Post::factory(15)->create();
//        $tags = Tag::factory(5)->create();
//
//        foreach ($posts as $post){
//            $tagIds = $tags->random(rand(2, 5))->pluck('id');
//            $post->tags()->attach($tagIds);
//        }

        Product::factory(5)->create();
        Shop::factory(3)->create();
    }
}
