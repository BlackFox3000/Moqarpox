<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Sport & Aventure'
        ]);
        DB::table('categories')->insert([
            'name' => 'Séjour & Weekend'
        ]);
        DB::table('categories')->insert([
            'name' => 'Beauté & Bien-être'
        ]);
        DB::table('categories')->insert([
            'name' => 'Gastronomie'
        ]);
        DB::table('categories')->insert([
            'name' => 'Multi-Categorie'
        ]);
    }
}
