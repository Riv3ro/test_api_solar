<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate existing records to start from scratch
        Comment::truncate();

        // creating new faker
        $faker = Factory::create();

        // creating a 1-level comments 
        for ($i = 0; $i < 50; $i++) {
            Comment::create([
                'parent_id' => NULL,
                'author' => $faker->name,
                'text' => $faker->text,
            ]);
        }

        // creating a 2-level comments
        for ($i = 0; $i < 50; $i++) {
            Comment::create([
                'parent_id' => $faker->numberBetween(1, 50),
                'author' => $faker->name,
                'text' => $faker->text,
            ]);
        }

        // creating a 3-level comments
        for ($i = 0; $i < 50; $i++) {
            Comment::create([
                'parent_id' => $faker->numberBetween(50, 100),
                'author' => $faker->name,
                'text' => $faker->text,
            ]);
        }
    }
}
