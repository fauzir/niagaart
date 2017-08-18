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
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1502502288/opening_ugpvwq.jpg',
          'name' => 'Home Living',
          'tagline' => 'Membuat hidup Anda lebih nyaman dengan konsep interior home living seperti Anda merasakan kenyamanan di dalam rumah',
          'description' => 'Ada beberapa syarat agar suatu hunian bisa masuk ke dalam kategori hunian yang ideal, namun syarat-syarat tersebut cenderung relatif dan bergantung pada kebutuhan sang pemilik hunian itu sendiri. Namun syarat-syarat umum dari hunian yang ideal meliputi: kamar tidur yang nyaman, dapur yang efisien, ketersediaan ruang bermain anak, maksimalnya fungsi living room, terdapatnya sudut-sudut untuk membaca atau menyimpan koleksi buku/DVD dan koleksi lainnya, rak sepatu yang tertata rapi, dan lain-lain. Intinya maksimalisasi fungsi ruang sangatlah penting untuk diwujudkan, namun seringkali ketika seseorang melakukan maksimalisasi fungsi ruang yang terjadi adalah nilai estetika dan segi kenyamanannya jadi terbaikan.
Selain itu, penataan perabotan di rumah menjadi hal yang susah-susah gampang bagi sebagian orang, hal itu karena begitu padatnya aktifitas di rumah yang membuat segala hal mudah berantakan dan tidak tertata sebagaimana mestinya.
Oleh karena itu, Niaga Art hadir untuk menawarkan solusi agar hunian anda memenuhi syarat hunian yang ideal dengan menyediakan perabotan yang bergaya minimalis yang mampu mengurangi keresahan anda akan perabotan-perabotan yang kurang efisien kegunaannya. Dengan berkonsultasi dengan kami tentang hunian anda, maka anda selangkah lagi menuju hunian yang ideal, karena kami sudah berpengalaman dalam menangani penataan serta penyediaan perabotan untuk kebutuhan rumah tangga.
Segera hubungi tim kami dan Anda selangkah lebih dekat ke kehidupan rumah yang ideal!',
          'type' => 'interior',
          'publish' => 'yes',
          'lang' => 'id',
          'slug' => 'home-living'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726577/apartment_zml6sa_adsgkl.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1502502110/apartment_e4iiib.jpg',
          'name' => 'Apartment',
          'tagline' => 'Praktis dan serbaguna. Apartemen dengan kriteria hunian mampu memberikan Anda kemudahan ketika beraktivitas dirumah',
          'description' => 'Bagi anda yang memilih untuk tinggal di apartemen, anda adalah orang yang cenderung praktis dan serbaguna, ingin semua serba cepat namun hasilnya efektif. Oleh karena itu anda memilih apartemen sebagai opsi tempat tinggal. Sama halnya dengan hunian, apartemen yang ideal juga sangat relatif, sangat tergantung dengan kebutuhan para penghuninya. Namun biasa para penghuni apartemen akan cenderung memilih perabotan yang sifatnya minimalis dan modern agar terlihat elegan sekaligus praktis.
Dalam hal ini, keinginan anda untuk mengisi apartemen dengan perabotan yang minimalis dan modern sangat bersesuaian dengan jasa serta produk yang ditawarkan oleh Niaga Art. Untuk apartemen yang nyaman, silakan hubungi kami, tim kami siap membantu menata ulang apartemen anda menjadi lebih nyaman dan efisien. Furniture kami akan mendukung Anda jika Anda benar-benar menginginkan desain furnitur sederhana untuk mendukung busy life-style dan aktivitas Anda.',
          'type' => 'interior',
          'publish' => 'yes',
          'lang' => 'id',
          'slug' => 'apartment'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726580/cafe-foodcourt_fggtdn.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1502502225/cafe_wxx7so.jpg',
          'name' => 'Cafe & FoodCourt',
          'tagline' => 'Kepuasan ada pada ketika seseorang merasakan kenyamanan. Mulailah pagi dengan hal baru dan menyenangkan untuk merasa lebih baik',
          'description' => 'Bisnis kuliner adalah bidang usaha yang sedang banyak diminati beberapa tahun terakhir ini. Namun dewasa ini ternyata para pebisnis kuliner tersebut tidak hanya menjual makanan saja, namun juga menjual ‘tempat’. Semakin populernya media sosial seperti Instagram, membuat café atau restoran dijadikan tempat untuk berfoto, sehingga tampilan atau desain suatu café atau restoran akan jadi sebuah pertimbangan bagi konsumen yang hendak berkunjung.
Selain itu, saat ini sebuah café atau restoran sering juga dijadikan tempat bagi seseorang untuk bekerja maupun mengerjakan tugas, sehingga kenyamanan suatu café atau restoran harus sangat diperhatikan oleh pemiliknya, untuk membidik pelanggan lebih banyak lagi.
Café atau restoran dengan desain yang menarik akan dianggap memiliki nilai plus bagi pelanggannya. Terbukti dengan semakin menjamurnya café dan restoran yang katanya rasa makanannya biasa saja, namun karena memiliki atmosfer yang cozy atau nyaman, maka pengunjung senang untuk mengunjungi café tersebut dan hal ini tentunya mampu meningkatkan keuntungan bagi pemiliknya.
Oleh karena itu, desain café maupun restoran di masa sekarang adalah hal yang utama  dan penting untuk diperhatikan, agar café atau restoran tersebut bisa memiliki nilai jual yang lebih bagi konsumen.',
          'type' => 'interior',
          'publish' => 'yes',
          'lang' => 'id',
          'slug' => 'cafe-foodcourt'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726584/shop-office_upejxz.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726580/office_x1stuu.jpg',
          'name' => 'Shop and Office',
          'tagline' => 'Be The Change You Want To See',
          'description' => 'Sebuah toko harus memiliki konsep dan penataan yang jelas untuk produk-produk yang hendak ditawarkan atau yang hendak dijual. Penataan produk tentu menjadi kunci utama, hal ini harus didukung oleh perabot yang pas atau tepat guna. Etalase atau rak yang sesuai bisa menjadi pilihan agar produk-produk yang dijual bisa terekspos secara maksimal, namun terekspos saja tidak cukup. Produk yang ditata dalam rak atau etalase yang pas atau tepat guna akan terlihat menarik dan tentunya bisa meningkatkan omset penjualan. Dalam melakukannya penataan dan pemilihan perabot pada toko tentu bukan hal yang mudah, namun agar penataan lebih efektif serta efisien maka kehadiran ahli untuk memberikan saran dan menyediakan furniture yang tepat bisa membantu anda menata toko anda dengan efektif tanpa mengabaikan sisi estetikanya.
Sama halnya dengan toko, begitupun areal kantor, di mana penataan areal ini juga menjadi hal yang tidak mudah. Terlebih ada berbagai jenis aktifitas yang biasanya dibagi berdasarkan ruangannya. Artinya, penataan ruangan di kantor juga harus maksimal dan sebisa mungkin nyaman agar pekerjaan bisa dilakukan dengan baik oleh karyawan. Ketika berbicara karyawan, maka kita harus memperhatikan kenyamanan mereka dalam bekerja, selain itu kita juga harus memperhatikan estetika kantor agar tidak dianggap membosankan dan kaku, dengan memperhatikan hal tersebut maka produktifitas karyawan pun bisa meningkat. Oleh karena itu, penataan kantor tidak boleh dilakukan asal-asalan, dengan berkonsultasi dengan ahlinya, maka ruang kerja, ruang rapat, meja resepsionis, dan ruangan-ruangan penting lainnya di kantor bisa tertata dengan maksimal.
Tim kami akan dengan senang hati membantu Anda agar toko dan area kantor Anda lebih teratur tanpa meninggalkan sisi estetisnya.',
          'type' => 'interior',
          'publish' => 'yes',
          'lang' => 'id',
          'slug' => 'shop-office'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726579/flooring_xllqgs.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1503029120/jb-vinyl_main_image_dwyy48.jpg',
          'name' => 'Flooring',
          'tagline' => 'Whatever your style, we’ll help you achieve it',
          'description' => 'Berbagai macam lantai dapat di gunakan. Tren akhir-akhir ini terdapat produk lantai dengan warna-warna natural seperti parquet. Penederhanaan produk dilakukan oleh beberapa peneliti dan tim hingga akhirnya mereka berhasil menciptakan lantai baru yang memiliki banyak kelebihan jika dibanding dengan lantai lain. Manfaat yang di rasakan dari produk lantai atau di sebut juga flooring vinyl adalah menghindari suhu dari udara dingin/panas yang sering masuk melalui permukaan lantai, tekstur flooring vinyl cukup elastis dan setiap pembeli mendapatkan garansi pabrik selama 10 tahun.',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'id',
          'slug' => 'flooring'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726578/blind_pxby4c.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-vitrom_blinds1.png',
          'name' => 'Blind',
          'tagline' => 'Elegance your way',
          'description' => 'Onna merupakan merek dari produk yang awalnya menawarkan kanopi dan kasa nyamuk. Namum saat ini onna telah mengembangkan banyak produknya di dalam bidang Window Fashion baik di Indonesia maupun Singapura. Terdapat banyak kategori produk yang di tawarkan, yaitu: interior blinds, exterior blinds, Insects blinds dan partitions.
Sebagian besar produk onna sudah memiliki sertifikasi “ramah lingkungan”; meminimalisasi terjadinya polusi/limbah dan bebas dari bahan-bahan berbahaya. Selain itu, sebagian dari bahan kain yang tersedia merupakan bahan kain tahan api. Produk tirai yang kami miliki dapat mengurangi panas dari sinar UV yang berbahaya, dapat mengurangi penggunaan listrik di dalam rumah dan kenyamanan tetap terjaga”.',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'id',
          'slug' => 'blind'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726584/wall-paper_ebavzo.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1503029121/main_image_wallpaper_vlrxmk.jpg',
          'name' => 'Wall Paper',
          'tagline' => 'Simplicity beats complexity',
          'description' => 'Wallpaper yang ditawarkan adalah sebuah lapisan untuk memberikan suasana tempat tinggal atau kantor yang nyaman. Produk yang ditawarkan di bidang wallpaper memiliki berbagaimacam motif pada produk seperti; warna polos, warna serat, motif bunga dsb.Tanpa perlu menuangkan cat ditembok, sebagian besar produk wallpaper bisa menjadi salah satu alternatif  untuk mengatur ulang ruangan Anda sehingga tampil ruangan yang nyaman.',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'id',
          'slug' => 'wall-paper'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726584/wall-clading_zuc3d4.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1503029296/3D_PANEL_-_LINEAR_af5ind.jpg',
          'name' => 'Wall Clading',
          'tagline' => 'Make a statement in style',
          'description' => 'Desain 3 dimensi, bahan pulp tebu, tekstur alami, bersih dan elegan, ramah lingkungan, membantu penyerapan suara',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'id',
          'slug' => 'wall-clading'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726578/chair_f0sws3.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1503029120/main_image_chair_wll8qi.jpg',
          'name' => 'Chair',
          'tagline' => 'Transforming spaces. Transforming Lives.',
          'description' => 'Merk dari produk Chitose dan Donati merupakan produk kursi-kursi berteknologi tinggi. Selaras dengan permintaan produk mebel berkualitas yang terus meningkat produk tersebut terus mengembangkan rangkaian produk mereka, seperti: perangkat mebel hotel dan restoran, kantor, sekolah dan rumah tinggal.
Merk kursi yang ditawarkan yang pertama adalah merk chitose yang telah berpengalaman lama dalam memproduksi kursi dan furniture, kelebihan lainnya adalah produk chitose menjamin kestabilan dalam mutu, keamanan dan kesehatan, serta keindahan yang diperuntukan kepada seluruh pelanggannya.
sedangkan produk Donati yang ditawarkan adalah produk furniture, khususnya kursi dengan harga yang relatif lebih murah di banding merk lain dan memiliki kualitas.',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'id',
          'slug' => 'chair'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1502340355/Rak_Piring_Modelline_vxph3e.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1503029120/9-B30ED_pbj7nb.jpg',
          'name' => 'Rak-Modelline',
          'tagline' => 'Transforming spaces. Transforming Lives.',
          'description' => 'Modelline sejak dahulu sudah dikenal sebagai pabrik rak yang secara profesional mendesain dan memproduksi berbagai keperluan rak rumah tangga dan rak serbaguna seperti rak piring, rak laci, rak lemari, rak sendok, rak dapur, rak kamar mandi, rak display, rak pajang, rak dinding, rak majalah, rak sepatu dan rak-rak lainnya. Dirancang dan dikembangkan secara detail dengan pertimbangan efisiensi, keindahan estetika dan fungsional agar produk kami semakin mudah untuk ditempatkan dan digunakan. Produk Modelline telah diproduksi dengan mesin berteknologi tinggi dan mesin modern dari Jepang dan Jerman yang dioperasikan oleh tenaga kerja profesional dan terlatih. Kami telah memperkenalkan banyak produk-produk dan desain baru kami ke pasar dan didistribusikan ke seluruh Indonesia',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'id',
          'slug' => 'rak-modelline'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1502340356/Modena_Kitchen_ufkw0n.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1503029121/Modena_main_image_t4pyes.jpg',
          'name' => 'Cooking-Modena',
          'tagline' => 'Transforming spaces. Transforming Lives.',
          'description' => 'MODENA telah menjejakkan kaki sebagai penyedia peralatan elektronik rumah tangga berkualitas tinggi dengan kehandalan produk yang menyasar pada segmen pasar kelas atas serta menengah atas. Terus berupaya untuk menjadi yang terbaik di kelasnya, MODENA secara berkesinambungan mengembangkan beragam produk yang diklasifikasian ke dalam 3 lini kategori, yaitu cooking, cleaning & cooling. Keseluruhan produk MODENA senantiasa menekankan pada aspek estetika desain, kaya akan fitur yang memberikan kemudahan dan kenyamanan bagi pengguna (user friendly), penerapan teknologi terkini serta ramah lingkungan. Produk MODENA sebagai solusi cerdas dalam menciptakan smart living – sebuah kualitas hidup yang lebih baik bagi masyarakat.',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'id',
          'slug' => 'cooking-modena'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1502340355/Cooking_Domo_llj9b5.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1503029120/Domo_main_image_ydqlwm.jpg',
          'name' => 'Cooking-Domo',
          'tagline' => 'Transforming spaces. Transforming Lives.',
          'description' => 'DOMO mulai dipasarkan di Indonesia dalam rangka memenuhi keinginan konsumen untuk produk-produk dengan ratio harga-kualitas yang optimal. Dalam waktu yang singkat, DOMO telah berhasil membuktikan diri sebagai satu di antara banyak merk yang menekankan pada kualitas, design dan harga yang terjangkau.
Produk DOMO tersedia dalam berbagai macam kategori, di mana menyorotkan pada functionality dan user-friendly dari produk-produk yang tersedia. Produk DOMO juga disesuaikan dengan keperluan dari setiap negara di mana produk tersebut dijual, mengingat kondisi cuaca (suhu & kelembaban) dari negara tersebut, kebutuhan listrik, dll.',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'id',
          'slug' => 'cooking-domo'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726580/home-living_zdk45o.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1502502288/opening_ugpvwq.jpg',
          'name' => 'Home Living',
          'tagline' => 'Make your life comfortable with the concept of interior home living to make you as comfortable as being at home',
          'description' => 'There are some conditions for an ideal home living, but those conditions is such a relative and really depend on the needs of the owner. But the general conditions are: the cozy bedroom, the efficient kitchen, the availability of play room for kids, the maximal function of living room, the existence of book corners or a place to store some collection things, the tidiness of the shoe self, etc. The most important thing is how the room used maximally, but usually when the room used maximally the aesthetic aspect is getting abandoned. Organizing furniture at home is always a tricky one, because too much activities happen at home, and it makes the things easily getting to disorder situation. In this case, we won’t those things to actually happen.
So, as a professional, we exist to give you some solutions about creating an ideal home living through our products and services, we try to apply minimalist design that help you to diminish any common problems that generally happened at home.
Go call our team and you one step closer to an ideal home-living!',
          'type' => 'interior',
          'publish' => 'yes',
          'lang' => 'en',
          'slug' => 'home-living'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726577/apartment_zml6sa_adsgkl.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1502502110/apartment_e4iiib.jpg',
          'name' => 'Apartment',
          'tagline' => 'Practical and versatile. Apartment with the criteria of a dwelling can fasilitates you for doing the activity at home',
          'description' => 'For everyone who lives in an apartment, we’re sure that you are the type of person who want everything done in efficient and effective ways, if it’s possible you always want something done in an instant, far from the word of ‘complicated’. You want every room is easy to organize and not easily getting disorder. You don’t have so many times to focus on those things. Basically, what you need just the right furniture which ideally easy to be cleaned with the minimalist design, believe us, that will easily solve your daily problem.
Same as home living, apartment also has a relative conditions to be called an ideal one. But usually, for somebody who live in an apartment they will choose minimalist design to be applied in theirs to supported the fast-moving life activity. You can contact us for further details about apartment furniture and how to organize it. We are ready to fill your apartment with the minimalist yet qualified furniture. Our furniture will supported you if you really want a simple design of furniture for supporting your busy life-style and activity.',
          'type' => 'interior',
          'publish' => 'yes',
          'lang' => 'en',
          'slug' => 'apartment'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726580/cafe-foodcourt_fggtdn.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1502502225/cafe_wxx7so.jpg',
          'name' => 'Cafe & FoodCourt',
          'tagline' => 'Satisfaction is in when one feels comfort. Start the morning with new and funny things for felling better',
          'description' => 'Food/culinary sector is a business that never dies, nowadays this sector is even easily becoming a promising trend. In this era, culinary sector not only sell their foods, but they sell ‘place’, the vibes of the place is really basic to provide. More interesting the design of the place, more the costumer wants to come. As a trend and life-style, café/restaurant now becomes a place which used as a place to work or doing some assignments, it makes the coziness-side is a must to exist if the business wants going well and make a big profit.
Young people is a promising costumer if we talk about culinary business. They always choose a café based on the aesthetic side or something ‘istagramable’. So… It’s a must for everyone who works in this food/culinary business to provide a place with a great and unique concept.
You can contact us for further details about café/restaurant design and furniture, we will really happy to give you some solutions!',
          'type' => 'interior',
          'publish' => 'yes',
          'lang' => 'en',
          'slug' => 'cafe-foodcourt'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726584/shop-office_upejxz.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726580/office_x1stuu.jpg',
          'name' => 'Shop and Office',
          'tagline' => 'Be The Change You Want To See',
          'description' => 'A shop must have a clear concept for organizing the offering products. Organizing the product is a key, this thing has to be supported by the appropriate furniture. Display window or shelf has exposing the products maximally. But, exposing the products maximally is not enough, it’s also must supported by a good organizing technique. Organizing and choose the furniture for the shop is also not an easy thing to do, sometimes experts or professionals needs to help in order to make your shop organized properly.
Same as the shop, to organize office area is a tricky one to be done. It’s getting hard because an office has so many activities which generally divided based on the room functions. It means, organizing an office also has to be done in a maximal technique, both from the room function and the aesthetic-side. If we talk about office, we also talk about the employee who works there, so the comfort office is an important thing especially to increase employees’ productivity. Aesthetic-side of the office is also necessary for making the office’s atmosphere more living, also to avoid the boringness and monotonous vibes…
If you have a problem in organizing a shop or an office, you can consult with us! Our team will be happy to help you to make your shop and office area more organizing without abandoning its aesthetic-side.',
          'type' => 'interior',
          'publish' => 'yes',
          'lang' => 'en',
          'slug' => 'shop-office'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726579/flooring_xllqgs.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1503029120/jb-vinyl_main_image_dwyy48.jpg',
          'name' => 'Flooring',
          'tagline' => 'Whatever your style, we’ll help you achieve it',
          'description' => 'A variety of floors can be used. Recent trends have floor products with natural colors like parquet. The simplification of the product is done by some researchers and team until finally they succeed to create new floor which has many advantages when compared with other floor. The benefits of the flooring or vinyl flooring are to avoid the temperature of the cold / hot air that often enters the floor, the texture of vinyl flooring is quite elastic and every buyer gets a factory warranty for 10 years.',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'en',
          'slug' => 'flooring'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726578/blind_pxby4c.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-vitrom_blinds1.png',
          'name' => 'Blind',
          'tagline' => 'Elegance your way',
          'description' => 'Onna is a brand of product that initially offers canopies and mosquito netting. Currently, onna has developed many products in the field of Window Fashion both in Indonesia and Singapore. There are many categories of products that offered, namely: interior blinds, exterior blinds, Insects blinds and partitions.
Most of our products are "green" certified; this means that they are produced with limited pollution/waste and free from harmful toxics. On top of that, most of our materials are fire retardant. Window blinds block out harmful UV rays and heat, helping you save energy used to cool down your house.',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'en',
          'slug' => 'blind'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726584/wall-paper_ebavzo.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1503029121/main_image_wallpaper_vlrxmk.jpg',
          'name' => 'Wall Paper',
          'tagline' => 'Simplicity beats complexity',
          'description' => 'The wallpaper which has been offering to provide a comfortable living or office environment. Products offered in the field of wallpaper have some variety of motifs on products such as; Plain color, color fiber, floral motifs etc. Without the need to pour the paint on the wall, most of the wallpaper products can be one of the alternatives to rearrange your room so that it appears a comfortable room.',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'en',
          'slug' => 'wall-paper'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726584/wall-clading_zuc3d4.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1503029296/3D_PANEL_-_LINEAR_af5ind.jpg',
          'name' => 'Wall Clading',
          'tagline' => 'Make a statement in style',
          'description' => '3-dimentional design, Sugarcane pulp material, natural texture, clean and elegant, eco friendly, helps in noise absorption',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'en',
          'slug' => 'wall-clading'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726578/chair_f0sws3.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1503029120/main_image_chair_wll8qi.jpg',
          'name' => 'Chair',
          'tagline' => 'Transforming spaces. Transforming Lives.',
          'description' => 'Brands from Chitose and Donati are the products of high-tech seats. Aligned with the growing demand for quality furniture products, the product continues to expand their product range, such as: hotel and restaurant furniture, office, school and residence.
The first offered chitose brand is a chitose brand that has long experience in producing chairs and furniture, another advantage is that chitose products guarantee stability in quality, safety and health, and beauty that is intended for all customers.
While Donati products offered are furniture products, especially seats with a relatively cheaper price on the appeal of other brands and have quality.',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'en',
          'slug' => 'chair'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1502340355/Rak_Piring_Modelline_vxph3e.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1503029120/9-B30ED_pbj7nb.jpg',
          'name' => 'Rak-Modelline',
          'tagline' => 'Transforming spaces. Transforming Lives.',
          'description' => 'Our ready made household colletions are versatile racks for kitchen, bathroom, displays, magazines, shoes and many more. Designed and developed to be easy to install and low maintanance with consideration to accomodate efficiency, aesthetic and functional of the area this product to be placed and used. Modelline"s products has been produced with high technology and modern machine from Japan and Germany and operated by fully trained and skillful employees. We have since introduced many new and versatile wire ware products into the market and distributed to anywhere around Indonesia.',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'en',
          'slug' => 'rak-modelline'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1502340356/Modena_Kitchen_ufkw0n.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1503029121/Modena_main_image_t4pyes.jpg',
          'name' => 'Cooking-Modena',
          'tagline' => 'Transforming spaces. Transforming Lives.',
          'description' => 'MODENA has become known as a provider of high quality home appliances targeted at the upper and upper middle class in support of a modern lifestyle. In line with its efforts to become the leader in its field, MODENA continuously developed various products within its three product lines, namely Cooking, Cleaning and Cooling. As a whole, MODENA products emphasize aesthetic design, user-friendly features, cutting edge technology and an eco-friendly approach. In short, MODENA products offer intelligent solutions for smart living – delivering a better quality of life for customers.',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'en',
          'slug' => 'cooking-modena'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1502340355/Cooking_Domo_llj9b5.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1503029120/Domo_main_image_ydqlwm.jpg',
          'name' => 'Cooking-Domo',
          'tagline' => 'Transforming spaces. Transforming Lives.',
          'description' => 'DOMO began to be marketed in Indonesia in order to meet consumer demand for products with an optimal price-quality ratio. In a short time, DOMO has proven itself as one of many brands that emphasizes quality, design and affordable price.
DOMO products are available in a wide variety of categories, which highlight the functionality and user-friendliness of the products available. DOMO products are also tailored to the needs of each country where the product is sold, given the weather conditions (temperature & humidity) of the country, electricity requirements, etc.',
          'type' => 'other',
          'publish' => 'yes',
          'lang' => 'en',
          'slug' => 'cooking-domo'
        ]);
        $service->save();
    }
}
