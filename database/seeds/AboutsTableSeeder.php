<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new \App\About([
          'image_header' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041017/about-banner_nqcwcs.jpg',
          'opening_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041018/opening_mqcfez.jpg',
          'opening_title' => 'About Niaga Art',
          'opening_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        $about->save();

        $about = new \App\About([
          'image_header' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041017/about-banner_nqcwcs.jpg',
          'opening_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041018/opening_mqcfez.jpg',
          'opening_title' => 'Tentang Niaga Art',
          'opening_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        $about->save();
    }
}
