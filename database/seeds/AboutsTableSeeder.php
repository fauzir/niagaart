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
          'opening_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502502288/opening_ugpvwq.jpg',
          'opening_title' => 'About Niaga Art',
          'opening_text' => 'We are a company engaged in the field of interior design and furniture that emphasizes the concept of wood-based minimalist which has been established since 2008. Our company is supported by the presence of professional employees who are experienced in their field. Until now, we have been working on various projects, both on a home scale and in collaboration with government agencies and private agencies.
Our presence among the community is none other than to provide the products and services of interior and furniture design in accordance with the needs and desires of the customers. With our slogan, Functional & Artistic Design, we strive to deliver products that are not only good in terms of function but also have aesthetic value which is equally good. Thus, our products not only emphasize the accuracy of use and convenience, but also the appearance of the product is very attention.'
        ]);
        $about->save();

        $about = new \App\About([
          'image_header' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726576/about-banner_quugy3.jpg',
          'opening_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502502288/opening_ugpvwq.jpg',
          'opening_title' => 'Tentang Niaga Art',
          'opening_text' => 'Kami merupakan perusahaan yang bergerak di bidang desain interior dan furniture yang menekankan pada konsep minimalis berbahan dasar kayu yang telah berdiri sejak tahun 2008. Perusahaan kami didukung oleh keberadaan karyawan-karyawan profesional yang sudah berpengalaman di bidangnya. Sampai saat ini, kami telah mengerjakan beragam proyek, baik berskala rumahan maupun bekerjasama dengan instansi pemerintahan dan instansi swasta.
Kehadiran kami di antara masyarakat tidak lain adalah untuk, menyediakan produk dan layanan jasa desain interior maupun furniture sesuai dengan kebutuhan dan keinginan pelanggan. Dengan slogan kami, Fungsional & Artistic Design, kami berupaya menghadirkan produk yang tidak hanya baik dari segi fungsi namun juga memiliki nilai estetika yang juga sama baiknya. Sehingga, produk kami tak hanya menekankan pada ketepatan guna dan kenyamanannya saja, namun juga penampilan produk sangat diperhatikan.
'
        ]);
        $about->save();
    }
}
