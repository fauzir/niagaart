<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new \App\Blog([
          'title' => 'First Article',
          'category' => 'Lifestyle',
          'image' => 'http://www.eiforces.org/wp-content/uploads/2017/07/elegant-contemporary-white-living-room-furniture-modern-white-living-room-furniture-jpeg.jpg',
          'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'author' => 'Author'
        ]);
        $blog->save();

        $blog = new \App\Blog([
          'title' => 'Second Article',
          'category' => 'Entertainment',
          'image' => 'http://www.eiforces.org/wp-content/uploads/2017/07/elegant-contemporary-white-living-room-furniture-modern-white-living-room-furniture-jpeg.jpg',
          'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'author' => 'Author'
        ]);
        $blog->save();

        $blog = new \App\Blog([
          'title' => 'Third Article',
          'category' => 'Lifestyle',
          'image' => 'http://www.eiforces.org/wp-content/uploads/2017/07/elegant-contemporary-white-living-room-furniture-modern-white-living-room-furniture-jpeg.jpg',
          'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'author' => 'Author'
        ]);
        $blog->save();
    }
}
