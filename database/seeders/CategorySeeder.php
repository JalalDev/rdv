<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::updateOrCreate(['intitule' => "Categorie #1"]);
        Category::updateOrCreate(['intitule' => "Categorie #2"]);
        Category::updateOrCreate(['intitule' => "Categorie #3"]);
        Category::updateOrCreate(['intitule' => "Categorie #4"]);
        Category::updateOrCreate(['intitule' => "Categorie #5"]);
    }
}
