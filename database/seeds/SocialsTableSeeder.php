<?php

use Illuminate\Database\Seeder;

class SocialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $social = new \App\Social([
          'name' => 'Facebook',
          'url' => 'https://www.facebook.com/nafurniturebdg/',
          'icon' => 'fa fa-facebook',
          'active' => 'yes'
        ]);
        $social->save();

        $social = new \App\Social([
          'name' => 'Twitter',
          'url' => 'https://twitter.com/niaga_art',
          'icon' => 'fa fa-twitter',
          'active' => 'yes'
        ]);
        $social->save();

        $social = new \App\Social([
          'name' => 'LinkedIn',
          'url' => 'http://www.linkedin.com',
          'icon' => 'fa fa-linkedin',
          'active' => 'no'
        ]);
        $social->save();

        $social = new \App\Social([
          'name' => 'Instagram',
          'url' => 'https://www.istagram.com/na_furniturebdg/',
          'icon' => 'fa fa-instagram',
          'active' => 'yes'
        ]);
        $social->save();

        $social = new \App\Social([
          'name' => 'Skype',
          'url' => 'http://www.skype.com',
          'icon' => 'fa fa-skype',
          'active' => 'no'
        ]);
        $social->save();

        $social = new \App\Social([
          'name' => 'YouTube',
          'url' => 'https://www.youtube.com/channel/UCGBg-na9t31-N-w_sotxX0w',
          'icon' => 'fa fa-youtube',
          'active' => 'yes'
        ]);
        $social->save();

        $social = new \App\Social([
          'name' => 'Google',
          'url' => 'https://plus.google.com/u/2/108272742697424845379',
          'icon' => 'fa fa-google-plus-official',
          'active' => 'yes'
        ]);
        $social->save();

        $social = new \App\Social([
          'name' => 'Pinterest',
          'url' => 'http://www.pinterest.com',
          'icon' => 'fa fa-pinterest',
          'active' => 'no'
        ]);
        $social->save();
    }
}
