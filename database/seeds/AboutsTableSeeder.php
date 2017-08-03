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
          'image_header' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726576/about-banner_quugy3.jpg',
          'opening_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726580/opening_pwrzjo.jpg',
          'opening_title' => 'About Niaga Art',
          'opening_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        $about->save();

        $about = new \App\About([
          'image_header' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726576/about-banner_quugy3.jpg',
          'opening_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726580/opening_pwrzjo.jpg',
          'opening_title' => 'Tentang Niaga Art',
          'opening_text' => 'Membuat hunian nyaman dan bersih merupakan keinginan banyak orang. Desain interior minimalis merupak salah satu solusi ciptakan ruangan yang ada lebih funsional terutama bagi yang memiliki ruangan terbatas/kecil. Konsep minimalis untuk desain interior rumah yabg memiliki ciri sederha dan elegan. Banyak kelebihan lain yang bisa di dapat dari desain interior ruangan dengan konsep minimalis, seperti ruangan akan tampak lebih luas karena desain interior minimalis umumnya tidak banyak barang yang di simpan diatas interior-interior ruangan atau di atas furniture dalam ruangan tersebut karena semua telah di desain untuk penyimpanan barang ada di dalam furniture.a. disisi lain terkadang desain minimalis terlihat agak monoton karena tidak ada barang yang terlihat di dalam ruangan, oleh karena itu untuk menghindari kelemahan tersebut bisa dilakukan dengan menyimpan beberapa hiasan di dalam ruangan tersebut seperti menyimpan pajangan di atas furniture-furniture minimalis dan menaruh figura pada ruangan tersebut.'
        ]);
        $about->save();
    }
}
