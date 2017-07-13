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
          'image_header' => 'http://bibliafull.com/wp-content/uploads/2017/06/modern-home-living-room-decorating-idea-inexpensive-contemporary-and-modern-home-living-room-design-ideas.jpg',
          'opening_image' => 'http://www.homestoreandmore.ie/content/ebiz/hsandm/page/homeliving_pg/floordecor.jpg',
          'opening_title' => 'About Niaga Art',
          'opening_text' => 'This is where you describe your company'
        ]);
        $about->save();
    }
}
