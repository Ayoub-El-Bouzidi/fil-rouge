<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\User;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first(); // Use the first user or create one

    Blog::create([
        'title' => 'Sample Blog Post',
        'content' => 'This is a sample blog post.',
        'user_id' => $user->id
    ]);
    }
}
