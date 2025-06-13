<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\ReactionType;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PostStatusSeeder::class,
            ReactionTypeSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            ReplySeeder::class,
            ReactionSeeder::class,
        ]);
    }
}
