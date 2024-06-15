<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (app()->environment('local')) {
          // Create a regular user
           $user = \App\Models\User::factory()->create([
               'name' => 'Test User',
               'email' => 'test@example.com',
           ]);

           Post::factory(30)->has(Comment::factory(15))->for($user)->create();

          // Create an admin user
          User::factory()->create([
              'name' => env('ADMIN_NAME', 'AdminUser'),
              'email' => env('ADMIN_EMAIL', 'admin@example.com'),
              'password' => bcrypt(env('ADMIN_PASSWORD', 'securepassword')),
              'is_admin' => true,
          ]);
        }
    }
}
