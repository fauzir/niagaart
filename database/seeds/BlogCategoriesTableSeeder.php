<?php

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogcategory = new \App\BlogCategory([
          'category' => 'Entertainment',
        ]);
        $blogcategory->save();

        $blogcategory = new \App\BlogCategory([
          'category' => 'Lifestyle',
        ]);
        $blogcategory->save();
    }
}
