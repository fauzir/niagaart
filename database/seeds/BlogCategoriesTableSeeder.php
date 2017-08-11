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
          'category' => 'News',
        ]);
        $blogcategory->save();

        $blogcategory = new \App\BlogCategory([
          'category' => 'Finance',
        ]);
        $blogcategory->save();

        $blogcategory = new \App\BlogCategory([
          'category' => 'Lifestyle',
        ]);
        $blogcategory->save();

        $blogcategory = new \App\BlogCategory([
          'category' => 'Celebrity',
        ]);
        $blogcategory->save();

        $blogcategory = new \App\BlogCategory([
          'category' => 'Sports',
        ]);
        $blogcategory->save();

        $blogcategory = new \App\BlogCategory([
          'category' => 'Technology',
        ]);
        $blogcategory->save();

        $blogcategory = new \App\BlogCategory([
          'category' => 'Travel',
        ]);
        $blogcategory->save();

        $blogcategory = new \App\BlogCategory([
          'category' => 'Food',
        ]);
        $blogcategory->save();

        $blogcategory = new \App\BlogCategory([
          'category' => 'Health',
        ]);
        $blogcategory->save();

        $blogcategory = new \App\BlogCategory([
          'category' => 'Automotive',
        ]);
        $blogcategory->save();

        $blogcategory = new \App\BlogCategory([
          'category' => 'Furniture',
        ]);
        $blogcategory->save();

        $blogcategory = new \App\BlogCategory([
          'category' => 'Interior',
        ]);
        $blogcategory->save();
    }
}
