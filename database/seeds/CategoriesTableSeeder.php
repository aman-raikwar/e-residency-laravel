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
        $category = new Category();
        $category->name = 'Apartments';
        $category->status = 1;
        $category->save();
        
        $category = new Category();
        $category->name = 'Houses';
        $category->status = 1;
        $category->save();
        
        $category = new Category();
        $category->name = 'Land';
        $category->status = 1;
        $category->save();
        
        $category = new Category();
        $category->name = 'Bunglow';
        $category->status = 0;
        $category->save();
    }
}
