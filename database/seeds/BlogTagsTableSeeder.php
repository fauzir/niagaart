<?php

use Illuminate\Database\Seeder;

class BlogTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogtag = new \App\BlogTag([
          'tag' => 'lorem',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'ipsum',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'dolor',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'sit',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'amet',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'consectetur',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'adipisicing',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'elit',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'sed',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'do',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'eiusmod',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'tempor',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'incididunt',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'ut',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'labore',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'et',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'dolore',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'magna',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'aliqua',
        ]);
        $blogtag->save();
    }
}
