<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];
        $faker = factory::create();

        for ($i = 1; $i <= 5; $i++){
            $posts [] = [
                'title' => $faker-> text($maxNbChars = 100),
                'excerpt' => $faker-> sentence($nbWords = 6, $variableNbWords = true),
                'konten' => $faker-> paragraph($nbSentences = 3, $variableNbSentences = true),
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'author_id' => $faker->numberBetween($min = 1, $max = 10)
            ];
        }
        DB::table("posts")->insert($posts);
    }
}
