<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BlogTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_tag')->insert([
          'blog_id' => '1',
          'tag_id' => '1',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '1',
          'tag_id' => '2',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '1',
          'tag_id' => '3',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '1',
          'tag_id' => '4',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '1',
          'tag_id' => '5',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '2',
          'tag_id' => '6',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '2',
          'tag_id' => '7',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '2',
          'tag_id' => '8',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '3',
          'tag_id' => '9',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '3',
          'tag_id' => '10',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '3',
          'tag_id' => '11',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '3',
          'tag_id' => '12',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '4',
          'tag_id' => '13',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '4',
          'tag_id' => '14',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '4',
          'tag_id' => '15',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '5',
          'tag_id' => '16',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '5',
          'tag_id' => '17',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '5',
          'tag_id' => '18',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('blog_tag')->insert([
          'blog_id' => '5',
          'tag_id' => '19',
          'created_at' => \Carbon\Carbon::now(),
          'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
