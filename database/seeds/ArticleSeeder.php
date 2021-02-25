<?php

use Faker\Generator as Faker;
use App\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 50; $i++) {
        $newArticle = new Article();
        $newArticle->author = $faker->name();
        $newArticle->title = $faker->sentence();
        $newArticle->body = $faker->realText($maxNbChars = 250, $indexSize = 1);

        // $newArticle->tag_id = $faker->numberBetween($min = 1, $max = 50);
        // $newArticle->category_id = $faker->numberBetween($min = 1, $max = 5);

        $newArticle->save();
      }
    }
}
