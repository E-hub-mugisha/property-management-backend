<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'image' => 'assets/img/blog/blog-1.jpg',
            'category' => 'Property',
            'title' => 'How to achieve financial independence',
            'description' => 'There are many variations of passages of lorem ipsum available.',
            'author_name' => 'Rafael',
        ]);
    }
}
