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
          'company_description' => '<p>Choosing a proper design for a room on the purpose of making it comfortable and appealing requires a design interior concept that is in line with the room criteria and its functions such as design interion in an apartment, a home, a hotel, a office, a retail, and many more.</p>
<p>There are a lot of design interior concepts needed to apply, one of them is minimalist design interior concept. Niaga Art is an experienced company which is proficient in making design interor and minimalist furniture since the beginning of 2000. Niaga Art serve every furniture made by a plywood or multiplex’s outmost quality. </p>
<p>Our vision is to become a company offering products and design interior services based on our customer’s needs. Building the trust of our clients is our effort to enhance their satisfaction. Hence, we always try to be the number one choice in Indonesia for furniture products, becoming an excellent business partner for, either for private company or public companies that can fulfill all design interior and furniture needs, providing minimalist furniture products to all people especially in Indonesia, and  offering of interior design with minimalist concept emphasizing on function of every well-made product. </p>'
        ]);
        $home->save();

        $home = new \App\Home([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726579/home-carousel_rggpxq.jpg',
          'welcome_text' => 'Jasa Desain Interior dan Furniture Minimalis',
          'company_description' => '<p>Memilih desain yang tepat untuk ruangan dengan tujuan agar ruangan terasa nyaman dan tampil menarik. Perlu ada konsep desain interior harus menyesuaikan dengan kriteria ruangan berdasarkan fungsinya seperti desain interior di apartemen, rumah/hunian, hotel, perkantoran, pertokoan dan lain-lain.</p>
<p>Banyak konsep desain interior yang diterapkan salah satunya adalah konsep desain interior minimalis. Niaga Art merupakan perusahaan yang sudah berpengalaman mengerjakan desain interior dan furniture minimalis sejak awal tahun 2000. Niaga Art melayani pesanan untuk setiap furniture berbahan dasar kayu lapis/multiplex dengan kualitas bahan baku terbaik.</p>
<p>Visi kami adalah perusahaan yang menawarkan produk dan layanan jasa desain interior dan furniture sesuai dengan kebutuhan dan keinginan pelanggan. Membangun kepercayaan konsumen adalah upaya kami untuk meningkatkan kepuasan pelanggan, oleh karena itu kami berupaya untuk menjadikan produk furniture nomor 1 sebagai pilihan masyarakat Indonesia, menjadi perusahaan terpercaya yang mampu memenuhi semua kebutuhan desain interior dan furniture, menjadi partner bisnis baik dengan instansi pemerintahan maupun instansi swasta dalam bidang desain interior dan furniture, menawarkan produk furniture minimalis kepada seluruh masyarakat khususnya di Indonesia, memberikan penawaran desain interior dengan konsep minimalis yang mengutamakan fungsi dari setiap produk yang akan dibuat.</p>'
        ]);
        $home->save();
    }
}
