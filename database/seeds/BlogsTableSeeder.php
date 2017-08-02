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
          'title' => 'Lorem ipsum dolor sit amet',
          'category' => 'News',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501052156/blog-1501052156.jpg',
          'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
          'author' => 'Author',
          'comment' => 'yes',
          'visitor_count' => '0'
        ]);
        $blog->save();

        $blog = new \App\Blog([
          'title' => 'Consectetur adipisicing elit',
          'category' => 'Finance',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501052156/blog-1501052156.jpg',
          'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
          'author' => 'Author',
          'comment' => 'yes',
          'visitor_count' => '0'
        ]);
        $blog->save();

        $blog = new \App\Blog([
          'title' => 'Sed do eiusmod tempor',
          'category' => 'Lifestyle',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501052156/blog-1501052156.jpg',
          'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
          'author' => 'Author',
          'comment' => 'yes',
          'visitor_count' => '0'
        ]);
        $blog->save();

        $blog = new \App\Blog([
          'title' => 'Incididunt ut labore',
          'category' => 'Celebrity',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501052156/blog-1501052156.jpg',
          'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
          'author' => 'Author',
          'comment' => 'yes',
          'visitor_count' => '0'
        ]);
        $blog->save();

        $blog = new \App\Blog([
          'title' => 'Et dolore magna aliqua',
          'category' => 'News',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501052156/blog-1501052156.jpg',
          'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
          'author' => 'Author',
          'comment' => 'yes',
          'visitor_count' => '0'
        ]);
        $blog->save();
    }
}
