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
          'welcome_text' => 'Interior and Minimalist Furnite Service',
          'company_description' => '<p>Niaga Art that has been in the interior design for more than 10 years has proven it with experience. Our works have been applied to various needs of arrangement, from start occupancy, apartment, café & foodcourt, shops, office area, etc. With our experience, Niaga Art is ready to commit to help and solve your problems in arranging the room with maximum function and display, of course with quality furniture products.</p>
           <p>Welcome to our digital gallery!</p>'
        ]);
        $home->save();

        $home = new \App\Home([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726579/home-carousel_rggpxq.jpg',
          'welcome_text' => 'Jasa Desain Interior dan Furniture Minimalis',
          'company_description' => '<p>Niaga Art yang sudah berkecimpung dalam dunia desain interior selama kurang lebih 10 tahun telah membuktikannya dengan pengalaman. Karya-karya kami sudah diaplikasikan ke dalam berbagai kebutuhan penataan, dari mulai hunian, apartemen, café & foodcourt, pertokoan, areal kantor, dll. Dengan pengalaman kami tersebut, Niaga Art siap berkomitmen untuk membantu dan menyelesaikan permasalahan anda dalam menata ruangan dengan fungsi dan tampilan yang maksimal, tentunya dengan produk-produk furniture yang berkualitas.</p>
          <p>Selamat datang di galeri digital kami!</p>'
        ]);
        $home->save();
    }
}
