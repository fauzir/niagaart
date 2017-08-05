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
          'opening_text' => 'Making a comfortable and clean home is what people dream of. Minimalist design interior is one of the solutions to create a more functional room, especially for those who have limited or small space. The minimalist concept for home design interior has an elegant and simple feature. There are a lot of advantages that you can get from the minimalist concept. For instance, the room will look bigger because a minimalist design interior  doesn’t usually have many objects on top of furniture, instead, all types of the furniture are designed to put the objects inside. However, some may argue that the minimalist design looks less various because there are no objects found on top of the furniture. Thus, you can avoid this issue by placing couples of decorations in the room such as several displays and picture frames on top of the furniture.'
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
