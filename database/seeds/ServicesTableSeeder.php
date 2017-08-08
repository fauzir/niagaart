<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726580/home-living_zdk45o.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/c_scale,h_550,w_650/v1501041018/opening_pwrzjo.jpg',
          'name' => 'Home Living',
          'tagline' => 'Make your life comfortable with the concept of interior home living to make you as comfortable as being at home',
          'description' => '<p>Ada beberapa syarat agar suatu hunian bisa masuk ke dalam kategori hunian yang ideal, namun syarat-syarat tersebut cenderung relatif dan bergantung pada kebutuhan sang pemilik hunian sendiri. Namun syarat-syarat umum dari hunian yang ideal meliputi: kamar tidur yang nyaman, dapur yang efisien, ketersediaan ruang bermain anak, maksimalnya fungsi living room, terdapatnya sudut-sudut untuk membaca atau menyimpan koleksi buku/DVD dan koleksi lainnya, rak sepatu yang tertata rapi, dan lain-lain. Intinya maksimalisasi fungsi ruang sangatlah penting untuk diwujudkan, namun seringkali ketika seseorang melakukan maksimalisasi fungsi ruang yang terjadi adalah nilai estetika dan segi kenyamanannya jadi terbaikan. </p>
          <p>Selain itu, penataan perabotan di rumah menjadi hal yang susah-susah gampang bagi sebagian orang, hal itu karena begitu padatnya aktifitas di rumah yang membuat segala hal mudah berantakan dan tidak tertata sebagaimana mestinya. Oleh karena itu, Niaga Art hadir untuk menawarkan solusi agar hunian anda memenuhi syarat hunian yang ideal dengan menyediakan perabotan yang bergaya minimalis yang mampu mengurangi keresahan anda akan perabotan-perabotan yang kurang efisien kegunaannya. Dengan berkonsultasi dengan kami tentang hunian anda, maka anda selangkah lagi menuju hunian yang ideal, karena kami sudah sangat berpengalaman dalam menangani penataan serta penyediaan perabotan untuk kebutuhan rumah tangga.</p>
          ',
          'type' => 'interior',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726577/apartment_zml6sa_adsgkl.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726576/apartment_td9ffn_troc1h.jpg',
          'name' => 'Apartment',
          'tagline' => 'Modern Conveniences & Entertainment, All Within Your Reach',
          'description' => '<p>Bagi anda yang memilih untuk tinggal di apartemen, anda adalah orang yang cenderung praktis dan serbaguna, ingin semua serba cepat namun hasilnya efektif. Oleh karena itu anda memilih apartemen sebagai opsi tempat tinggal. Sama halnya dengan hunian, apartemen yang ideal juga sangat relatif, sangat tergantung dengan kebutuhan para penghuninya. Namun biasa para penghuni apartemen akan cenderung memilih perabotan yang sifatnya minimalis dan modern agar terlihat elegan sekaligus praktis. Dalam hal ini, keinginan anda untuk mengisi apartemen dengan perabotan yang minimalis dan modern sangat bersesuaian dengan jasa serta produk yang ditawarkan oleh Niaga Art. Untuk apartemen yang nyaman, silakan segera hubungi kami, kami siap membantu menata ulang apartemen anda menjadi lebih nyaman dan efisien!</p>',
          'type' => 'interior',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726580/cafe-foodcourt_fggtdn.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/c_scale,h_550,w_650/v1501041016/cafe_bncjtr.jpg',
          'name' => 'Cafe & FoodCourt',
          'tagline' => 'Start the day with great taste',
          'description' => '<p>Bisnis kuliner adalah bidang usaha yang sedang banyak diminati beberapa tahun terakhir ini. Namun dewasa ini ternyata para pebisnis kuliner tersebut tidak hanya menjual makanan saja, namun juga menjual ‘tempat’. Semakin populernya media sosial seperti Instagram, membuat café atau restoran dijadikan tempat untuk berfoto, sehingga tampilan atau desain suatu café atau restoran akan jadi sebuah pertimbangan bagi konsumen yang hendak berkunjung.</p>
          <p>Selain itu, saat ini sebuah café atau restoran sering juga dijadikan tempat bagi seseorang untuk bekerja maupun mengerjakan tugas, sehingga kenyamanan suatu café atau restoran harus sangat diperhatikan oleh pemiliknya, untuk membidik pelanggan lebih banyak lagi.</p>
          <p>Café atau restoran dengan desain yang menarik akan dianggap memiliki nilai plus bagi pelanggannya. Terbukti dengan semakin menjamurnya café dan restoran yang katanya rasa makanannya biasa saja, namun karena memiliki atmosfer yang cozy atau nyaman, maka pengunjung senang untuk mengunjungi café tersebut dan hal ini tentunya mampu meningkatkan keuntungan bagi pemiliknya. Oleh karena itu, desain café maupun restoran di masa sekarang adalah hal yang utama  dan penting untuk diperhatikan, agar café atau restoran tersebut bisa memiliki nilai jual yang lebih bagi konsumen. Berkonsultasi dengan kami bisa menjadi solusi agar desain café lebih menarik dan tidak monoton.</p>',
          'type' => 'interior',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726584/shop-office_upejxz.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726580/office_x1stuu.jpg',
          'name' => 'Shop and Office',
          'tagline' => 'Be The Change You Want To See',
          'description' => '<p>Sebuah toko harus memiliki konsep dan penataan yang jelas untuk produk-produk yang hendak ditawarkan atau yang hendak dijual. Penataan produk tentu menjadi kunci utama, hal ini harus didukung oleh perabot yang pas atau tepat guna. Etalase atau rak yang sesuai bisa menjadi pilihan agar produk-produk yang dijual bisa terekspos secara maksimal, namun terekspos saja tidak cukup. Produk yang ditata dalam rak atau etalase yang pas atau tepat guna akan terlihat menarik dan tentunya bisa meningkatkan omset penjualan. Dalam melakukannya penataan dan pemilihan perabot pada toko tentu bukan hal yang mudah, namun agar penataan lebih efektif serta efisien maka kehadiran ahli untuk memberikan saran dan menyediakan furniture yang tepat bisa membantu anda menata toko anda dengan efektif tanpa mengabaikan sisi estetikanya.</p>
          <p>Sama halnya dengan toko, begitupun areal kantor, di mana penataan areal ini juga menjadi hal yang tidak mudah. Terlebih ada berbagai jenis aktifitas yang biasanya dibagi berdasarkan ruangannya. Artinya, penataan ruangan di kantor juga harus maksimal dan sebisa mungkin nyaman agar pekerjaan bisa dilakukan dengan baik oleh karyawan. Ketika berbicara karyawan, maka kita harus memperhatikan kenyamanan mereka dalam bekerja, selain itu kita juga harus memperhatikan estetika kantor agar tidak dianggap membosankan dan kaku, dengan memperhatikan hal tersebut maka produktifitas karyawan pun bisa meningkat. Oleh karena itu, penataan kantor tidak boleh dilakukan asal-asalan, dengan berkonsultasi dengan ahlinya, maka ruang kerja, ruang rapat, meja resepsionis, dan ruangan-ruangan penting lainnya di kantor bisa tertata dengan maksimal.</p>
          ',
          'type' => 'interior',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726579/flooring_xllqgs.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501041018/opening_pwrzjo.jpg',
          'name' => 'Flooring',
          'tagline' => 'Whatever your style, we’ll help you achieve it',
          'description' => '',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726578/blind_pxby4c.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726576/apartment_td9ffn_troc1h.jpg',
          'name' => 'Blind',
          'tagline' => 'Elegance your way',
          'description' => '',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726584/wall-paper_ebavzo.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/c_scale,h_550,w_650/v1501041016/cafe_bncjtr.jpg',
          'name' => 'Wall Paper',
          'tagline' => 'Simplicity beats complexity',
          'description' => '',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726584/wall-clading_zuc3d4.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726580/office_x1stuu.jpg',
          'name' => 'Wall Clading',
          'tagline' => 'Make a statement in style',
          'description' => '',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726578/chair_f0sws3.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501041018/opening_pwrzjo.jpg',
          'name' => 'Chair',
          'tagline' => 'Transforming spaces. Transforming Lives.',
          'description' => '',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726578/chair_f0sws3.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501041018/opening_pwrzjo.jpg',
          'name' => 'Rak-Modelline',
          'tagline' => 'Transforming spaces. Transforming Lives.',
          'description' => '',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726578/chair_f0sws3.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501041018/opening_pwrzjo.jpg',
          'name' => 'Cooking-Modena',
          'tagline' => 'Transforming spaces. Transforming Lives.',
          'description' => '',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726578/chair_f0sws3.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501041018/opening_pwrzjo.jpg',
          'name' => 'Cooking-Domo',
          'tagline' => 'Transforming spaces. Transforming Lives.',
          'description' => '',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();
    }
}
