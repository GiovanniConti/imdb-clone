<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            "Animazione",
            "Avventura",
            "Azione",
            "Biografico",
            "Commedia",
            "Documentario",
            "Drammatico",
            "Pornografico",
            "Erotico",
            "Fantascienza",
            "Fantasy/Fantastico",
            "Guerra",
            "Horror",
            "Musical",
            "Storico",
            "Thriller",
            "Western",
        ];

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->save();
        }
    }
}
