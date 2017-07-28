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
          'url' => 'http://www.facebook.com',
          'icon' => 'fa fa-facebook',
          'active' => 'yes'
        ]);
        $social->save();

        $social = new \App\Social([
          'name' => 'Twitter',
          'url' => 'http://www.twitter.com',
          'icon' => 'fa fa-twitter',
          'active' => 'yes'
        ]);
        $social->save();

        $social = new \App\Social([
          'name' => 'LinkedIn',
          'url' => 'http://www.linkedin.com',
          'icon' => 'fa fa-linkedin',
          'active' => 'yes'
        ]);
        $social->save();

        $social = new \App\Social([
          'name' => 'Instagram',
          'url' => 'http://www.instagram.com',
          'icon' => 'fa fa-instagram',
          'active' => 'yes'
        ]);
        $social->save();

        $social = new \App\Social([
          'name' => 'Skype',
          'url' => 'http://www.skype.com',
          'icon' => 'fa fa-skype',
          'active' => 'yes'
        ]);
        $social->save();

        $social = new \App\Social([
          'name' => 'YouTube',
          'url' => 'http://www.youtube.com',
          'icon' => 'fa fa-youtube',
          'active' => 'yes'
        ]);
        $social->save();

        $social = new \App\Social([
          'name' => 'Google',
          'url' => 'http://www.google.com',
          'icon' => 'fa fa-google-plus-official',
          'active' => 'yes'
        ]);
        $social->save();

        $social = new \App\Social([
          'name' => 'Pinterest',
          'url' => 'http://www.pinterest.com',
          'icon' => 'fa fa-pinterest',
          'active' => 'yes'
        ]);
        $social->save();
    }
}
