<?php

use Illuminate\Database\Seeder;

class HomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = new \App\Home([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726579/home-carousel_rggpxq.jpg',
          'welcome_text' => 'Interior and Minimalist Furnite Service Ps: Fungtional & Artistic Design',
          'company_description' => '<p>Niaga Art is a company which focused in interior design. We have been established for 10 years in this field. With our long experience in the field of interior design, our creative works have applied in many kind of customer orders, such as home living, apartment, office area, hotel, shop, etc. Our design not only focused in its visual but also the coziness of the room is always coming to our first priority. So, our works not only able to maximize the aesthetic side of the room, but also the coziness.</p>
           <p>Welcome to our digital gallery!</p>'
        ]);
        $home->save();

        $home = new \App\Home([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726579/home-carousel_rggpxq.jpg',
          'welcome_text' => 'Jasa Desain Interior dan Furniture Minimalis Nb: Fungsional & Artistik Desain',
          'company_description' => '<p>Niaga Art merupakan perusahaan yang berfokus pada pengerjaan desain interior yang sudah berdiri selama 10 tahun. Dengan pengalaman bertahun-tahun di dunia desain interior, karya-karya desain kreatif kami sudah diaplikasikan pada berbagai jenis permintaan pelanggan, seperti pada rumah tinggal/hunian, apartemen, kantor, hotel, pertokoan, dan lain-lain. Desain-desain yang kami buat tak hanya berfokus pada segi estetikanya saja namun juga pada segi kenyamanannya. Sehingga, apa yang kami berikan tak hanya mampu mempercantik ruangan saja, tapi juga mampu memberikan kenyamanan bagi setiap pelanggan.</p>
          <p>Selamat datang di galeri digital Niaga Art! </p>'
        ]);
        $home->save();
    }
}
