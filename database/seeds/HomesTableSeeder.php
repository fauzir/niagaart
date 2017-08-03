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
          'welcome_text' => 'Welcome',
          'company_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        $home->save();

        $home = new \App\Home([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726579/home-carousel_rggpxq.jpg',
          'welcome_text' => 'Jasa Desain Interior dan Furniture Minimalis',
          'company_description' => 'Memilih desain yang tepat untuk ruangan dengan tujuan agar ruangan terasa nyaman dan tampil menarik. Perlu ada konsep desain interior harus menyesuaikan dengan kriteria ruangan berdasarkan fungsinya seperti desain interior di apartemen, rumah/hunian, hotel, perkantoran, pertokoan dan lain-lain.
Banyak konsep desain interior yang diterapkan salah satunya adalah konsep desain interior minimalis. Niaga Art merupakan perusahaan yang sudah berpengalaman mengerjakan desain interior dan furniture minimalis sejak awal tahun 2000. Niaga Art melayani pesanan untuk setiap furniture berbahan dasar kayu lapis/multiplex dengan kualitas bahan baku terbaik.
Visi kami adalah perusahaan yang menawarkan produk dan layanan jasa desain interior dan furniture sesuai dengan kebutuhan dan keinginan pelanggan. Membangun kepercayaan konsumen adalah upaya kami untuk meningkatkan kepuasan pelanggan, oleh karena itu kami berupaya untuk menjadikan produk furniture nomor 1 sebagai pilihan masyarakat Indonesia, menjadi perusahaan terpercaya yang mampu memenuhi semua kebutuhan desain interior dan furniture, menjadi partner bisnis baik dengan instansi pemerintahan maupun instansi swasta dalam bidang desain interior dan furniture, menawarkan produk furniture minimalis kepada seluruh masyarakat khususnya di Indonesia, memberikan penawaran desain interior dengan konsep minimalis yang mengutamakan fungsi dari setiap produk yang akan dibuat.'
        ]);
        $home->save();
    }
}
