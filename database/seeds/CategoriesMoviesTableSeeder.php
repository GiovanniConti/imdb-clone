<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\Category;

class CategoriesMoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $randomCategories = 3;
        $movies = Movie::all();
        $categories = Category::all();
        $categoriesIds = [];

        foreach ($categories as $category) {
            $categoriesIds[] = $category->id;
        }

        foreach ($movies as $movie) {
            $savedNumbers = [];

            for ($i=0; $i < rand(1, min($randomCategories, count($categories))); $i++) {
                $generatedNumber = rand(0, count($categoriesIds));

                if (in_array($generatedNumber, $savedNumbers)) {
                    $i--;
                    continue;
                }
                
                $savedNumbers[] = $categoriesIds[$generatedNumber];
                $movie->category()->attach($categoriesIds[$generatedNumber]);
            }
        }
    }
}
