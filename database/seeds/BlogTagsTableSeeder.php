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
          'tag' => 'company',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'fruit',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'smartphone',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'comic',
        ]);
        $blogtag->save();

        $blogtag = new \App\BlogTag([
          'tag' => 'health',
        ]);
        $blogtag->save();
    }
}
