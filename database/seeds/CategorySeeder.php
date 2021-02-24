<?php

use Faker\Generator as Faker;
use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 20 ; $i++) {
        $newCategory = new Category();
        $newCategory->name = $faker->word();
        $newCategory->description = $faker->realText($maxNbChars = 100, $indexSize = 1);
        $newCategory->img = $faker->imageUrl(360, 360, 'tesla cars', true);
        $newCategory->save();
      }
    }
}
