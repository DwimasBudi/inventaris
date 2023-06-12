<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Item;
use App\Models\BorrowedItem;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Dwimas Budi Sulistyo',
            'username' => 'dwimasbudi',
            'role' => 'admin',
            'email' => 'dwimasbudi@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' => 'Aku user biasa',
            'username' => 'userbiasa',
            'role' => 'user',
            'email' => 'userbiasa@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);


        Category::create([
            'name' => 'Programing',
            'slug' => 'programing'
        ]);
        Category::create([
            'name' => 'Desain grafis',
            'slug' => 'desain-grafis'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        User::factory(20)->create();
        Post::factory(100)->create();
        Item::factory(50)->create();
        BorrowedItem::factory(10)->create();
    }
}
