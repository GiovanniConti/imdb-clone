<?php

use App\Movie;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) {
            $newMovie = new Movie();
            $newMovie->title = $faker->sentence(5);
            $newMovie->coverImg = 'https://picsum.photos/400/500';
            $newMovie->description = $faker->paragraph(7);
            $newMovie->year = $faker->dateTime();
            $newMovie->duration = $faker->time();
            $newMovie->rating = $faker->randomFloat(2, 0, 10);
            $newMovie->save();
        }
    }
}
