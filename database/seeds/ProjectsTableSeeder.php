<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1503564242/PROJEK_UNGGULAN-2_wntif0.jpg',
          'name' => 'Kitchen Set 1',
          'description' => '<p>Konsep Kitchen set disamping adalah dapur dengan warna natural, warna coklat tua serat kayu yang pada kabinet bawah kitchen set dan warna putih pada kitchen set kabinet atas, ditambah lemari oven, dan lemari kulkas disamping kitchen set.</p><p>Desain yang sangat memperhatikan fungsi dari produk yang dihasilkan ini memiliki beberapa lampu pada bagian kabinet atas kitchen set, dua buah bak sing yang cukup besar, kompor tanam dua tungku bewarna hitam dan filtrek dibagian atas kompor. <em>Top table</em> yang di terapkan adalah warna terang yaitu granit star white sehingga kitchen set kabinet bawah tampil kontras dengan <em>top table-</em>nya. Pada dinding kitchen set di terapkan kaca cermin yang menjadikan dapur tampak lebih luas.</p><p>Ketidaknyamanan ketika terlalu banyak barang di dapur akan terasa menyempitkan, oleh karena itu desain kitchen set ini di rancang minimalis sehingga semua perabotan memasak dapat disimpan di dalam lemari kitchen set yang terlah disediakan. Kelebihan lainnya piring yang masih basah tetap bisa dimasukan ke dalam lemari kitchen set tanpa harus membasahi lemari bagian dalam karena terdapat piring tatakan yang bisa menampung air bilasan pencucian alat makan dan perabotan masak.</p>',
          'status' => 'yes',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1503564242/PROJEK_UNGGULAN-2_wntif0.jpg',
          'name' => 'Kitchen Set 1',
          'description' => '<p>Kitchen set concept is kitchen with natural color, dark brown wooden color which in cabinet under kitchen set and white color in kitchen set top cabinet, plus oven cupboard, and refrigerator cabinet set beside kitchen set.</p><p>The design is very paying attention to the function of the resulting product has several lights on the cabinet top of the kitchen set, two large sing tubs, stove planting two black colored stove and filtrek at the top of the stove. Top table is applied is a bright color of granite star white so that the kitchen set under the cabinet appear in contrast with its top table. On the wall of the kitchen set in the application of mirror glass that makes the kitchen look more spacious.</p><p>Inconvenience when too many items in the kitchen will feel narrow, therefore the design of this kitchen set in minimalist design so that all cooking utensils can be stored in the kitchen cabinets set terlah provided. Another advantage is still a wet plate that can be incorporated into the kitchen cabinet set without having to wet the inner cabinet because there are placemat plates that can accommodate rinse water washing equipment and cooking utensils.</p>',
          'status' => 'yes',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1503564242/project-jakarta_qzbumg.jpg',
          'name' => 'Kitchen Set 2',
          'description' => '<p>Ruangan memasak di rumah atau yang sering juga dikenal dengan kitchen set. Seperti hunian disamping merupakan contoh dari kitchen set dengan perpaduan warna putih yang cukup mendominasi, ditambah serat kayu dan sedikit terdapat warna merah pada kursi bar juga kelengkapan aksesoris yang di pajang bewarna merah memberikan kesan pada dapur tampak luas dan bersih namun tidak memiliki kesan monoton pada ruangan. Desain kitchen set dikonsep dengan sangat baik agar dapur terlihat lebih hidup sehingga tidak tampak dapur yang membosankan. Terdapat beberapa lampu LED sebagai aksesoris pada kitchen set kabiner atas dan kitchen set pada bagian bawah untuk memberikan penerangan ketika dapur sedang digunakan. Kelengkapan yang ada pada kitchen set tersebut adalah microwave, kompor tanam, filtrek dan sing.</p><p>Selain itu kitchen set ini dilengkapi dengan minibar yang unik berukuran 60 x 150 cm. Permukaan atas minibar terdapat kaca. Dinding bagian dalam minibar multifungsi ini sebenarnya memiliki ukuran lebar yang lebih besar ketika pada bagian belakang di tarik untuk memperluas minibar. Kelebihan lain, minibar tersebut memiliki kabinet penyimpanan barang yang cukup luas untuk menyimpan peralatan memasak.</p>',
          'status' => 'yes',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1503564242/project-jakarta_qzbumg.jpg',
          'name' => 'Kitchen Set 2',
          'description' => '<p>Part of room for cooking at home which is often also known as the kitchen set. Occupancy is an example of a kitchen set with a blend of white color that dominates enough, plus wood fiber and a little red color on the bar stool also the accessories that are on display red colored give the impression on the kitchen looks spacious and clean but do not have the impression of monotonous in the room. The design of the kitchen set is very well concepted to make the kitchen look more alive so it does not look like a boring kitchen. There are several LED lights as accessories on the kitchen set top cabin and kitchen set on the bottom to provide lighting when the kitchen is being used. Completeness that is in the kitchen set is a microwave, stove planting, filtrek and sing.</p><p>In addition the kitchen set is equipped with a unique minibar measuring 60 x 150 cm. The upper surface of the minibar is glass. Actually the interior wall of this multifunctional minibar has a larger width when open the back of the drag to expand the minibar. In addition, the minibar has a storage cabinet of goods large enough to store cooking utensils.</p>',
          'status' => 'yes',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072685/Bed_hcl14f.jpg',
          'name' => 'Kids Bed',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072694/Desk_1_rl5x5r.jpg',
          'name' => 'Kids Desk 1',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072689/Desk_2_izpxzy.jpg',
          'name' => 'Kid Desk 2',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072691/Bed_1_zi0g8m.jpg',
          'name' => 'Bed 1',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072679/Bed_2_rytrgx.jpg',
          'name' => 'Bed 2',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072671/Bed_3_ogw4wl.jpg',
          'name' => 'Bed 3',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072675/Bed_4_zdvp2a.jpg',
          'name' => 'Bed 4',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072681/Bed_5_ncnhzw.jpg',
          'name' => 'Bed 5',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072675/Bed_6_bngh0a.jpg',
          'name' => 'Bed 6',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072678/Bed_7_nzhzfg.jpg',
          'name' => 'Bed 7',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072682/TV_1_oowjy7.jpg',
          'name' => 'TV 1',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072680/TV_2_enz2yu.jpg',
          'name' => 'TV 2',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072674/Wardrobe_1_bhqeo5.jpg',
          'name' => 'Wardrobe 1',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072677/Wardrobe_2_xqfxpu.jpg',
          'name' => 'Wardrobe 2',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072689/Cream_Kitchen_Set_ohmb4m.jpg',
          'name' => 'Cream Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072691/Large_Kitchen_Set_qeracp.jpg',
          'name' => 'Large Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072690/Modern_Kitchen_Set_2_gxc6dw.jpg',
          'name' => 'Modern Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072702/Red_Kitchen_Set_u9sars.jpg',
          'name' => 'Red Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072696/Simple_Kitchen_Set_2_sbkz79.jpg',
          'name' => 'Simple Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072694/Small_Kitchen_Set_g7l55x.jpg',
          'name' => 'Small Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072698/Wood_Kitchen_Set_vc3hl2.jpg',
          'name' => 'Wood Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072709/Black_Style_Kitchen_Table_with_Chair_aj4lbv.jpg',
          'name' => 'Black Style Kitchen Table with Chair',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072708/Kitchen_Table_hveb99.jpg',
          'name' => 'Kitchen Table',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072715/Kitchen_Table_with_Red_Chair_h8jdkh.jpg',
          'name' => 'Kitchen Table with Red Chair',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072707/Modern_Kitchen_Set_monlwy.jpg',
          'name' => 'Modern Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072717/Nice_Kitchen_Set_gzjfdk.jpg',
          'name' => 'Nice Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072702/Nice_Small_Kitchen_Set_qqf9os.jpg',
          'name' => 'Nice Small Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072701/Orange_Kitchen_Set_2_biak9u.jpg',
          'name' => 'Orange Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072702/Silver_Kitchen_Set_v1syn9.jpg',
          'name' => 'Silver Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072694/Simple_but_Elegant_Kitchen_Set_aouuda.jpg',
          'name' => 'Simple but Elegant Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072716/Small_Red_Kitchen_Set_vjz1q6.jpg',
          'name' => 'Small Red Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072708/Brown_Cabinet_binueq.jpg',
          'name' => 'Brown Cabinet',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072724/Brown_Stair_sfb3na.jpg',
          'name' => 'Brown Stair',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072711/Corner_Sofa_tr6mv4.jpg',
          'name' => 'Corner Sofa',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072716/Decorative_Stair_emyp0t.jpg',
          'name' => 'Decorative Stair',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072716/Family_Dining_Table_zbefbf.jpg',
          'name' => 'Family Dining Table',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072713/Family_Sofa_nzynzl.jpg',
          'name' => 'Family Sofa',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072724/Great_Kitchen_Set_enrhcj.jpg',
          'name' => 'Great Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072722/Grey_Small_Kitchen_Set_oe3wcr.jpg',
          'name' => 'Grey Small Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072711/Ordinary_Kitchen_Set_wvtdqb.jpg',
          'name' => 'Ordinary Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072719/Red_Stair_vwykwp.jpg',
          'name' => 'Red Stair',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072718/White_Simple_Shelf_am80gr.jpg',
          'name' => 'White Simple Shelf',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072725/Wood_Shelf_ceevt6.jpg',
          'name' => 'Wood Shelf',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072720/Wood_Style_Dining_Table_jgsyre.jpg',
          'name' => 'Wood Style Dining Table',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072718/Working_Desk_utiwnl.jpg',
          'name' => 'Working Desk',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'id'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072685/Bed_hcl14f.jpg',
          'name' => 'Kids Bed',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072694/Desk_1_rl5x5r.jpg',
          'name' => 'Kids Desk 1',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072689/Desk_2_izpxzy.jpg',
          'name' => 'Kid Desk 2',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072691/Bed_1_zi0g8m.jpg',
          'name' => 'Bed 1',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072679/Bed_2_rytrgx.jpg',
          'name' => 'Bed 2',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072671/Bed_3_ogw4wl.jpg',
          'name' => 'Bed 3',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072675/Bed_4_zdvp2a.jpg',
          'name' => 'Bed 4',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072681/Bed_5_ncnhzw.jpg',
          'name' => 'Bed 5',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072675/Bed_6_bngh0a.jpg',
          'name' => 'Bed 6',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072678/Bed_7_nzhzfg.jpg',
          'name' => 'Bed 7',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072682/TV_1_oowjy7.jpg',
          'name' => 'TV 1',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072680/TV_2_enz2yu.jpg',
          'name' => 'TV 2',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072674/Wardrobe_1_bhqeo5.jpg',
          'name' => 'Wardrobe 1',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072677/Wardrobe_2_xqfxpu.jpg',
          'name' => 'Wardrobe 2',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072689/Cream_Kitchen_Set_ohmb4m.jpg',
          'name' => 'Cream Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072691/Large_Kitchen_Set_qeracp.jpg',
          'name' => 'Large Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072690/Modern_Kitchen_Set_2_gxc6dw.jpg',
          'name' => 'Modern Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072702/Red_Kitchen_Set_u9sars.jpg',
          'name' => 'Red Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072696/Simple_Kitchen_Set_2_sbkz79.jpg',
          'name' => 'Simple Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072694/Small_Kitchen_Set_g7l55x.jpg',
          'name' => 'Small Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072698/Wood_Kitchen_Set_vc3hl2.jpg',
          'name' => 'Wood Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072709/Black_Style_Kitchen_Table_with_Chair_aj4lbv.jpg',
          'name' => 'Black Style Kitchen Table with Chair',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072708/Kitchen_Table_hveb99.jpg',
          'name' => 'Kitchen Table',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072715/Kitchen_Table_with_Red_Chair_h8jdkh.jpg',
          'name' => 'Kitchen Table with Red Chair',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072707/Modern_Kitchen_Set_monlwy.jpg',
          'name' => 'Modern Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072717/Nice_Kitchen_Set_gzjfdk.jpg',
          'name' => 'Nice Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072702/Nice_Small_Kitchen_Set_qqf9os.jpg',
          'name' => 'Nice Small Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072701/Orange_Kitchen_Set_2_biak9u.jpg',
          'name' => 'Orange Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072702/Silver_Kitchen_Set_v1syn9.jpg',
          'name' => 'Silver Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072694/Simple_but_Elegant_Kitchen_Set_aouuda.jpg',
          'name' => 'Simple but Elegant Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072716/Small_Red_Kitchen_Set_vjz1q6.jpg',
          'name' => 'Small Red Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072708/Brown_Cabinet_binueq.jpg',
          'name' => 'Brown Cabinet',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072724/Brown_Stair_sfb3na.jpg',
          'name' => 'Brown Stair',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072711/Corner_Sofa_tr6mv4.jpg',
          'name' => 'Corner Sofa',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072716/Decorative_Stair_emyp0t.jpg',
          'name' => 'Decorative Stair',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072716/Family_Dining_Table_zbefbf.jpg',
          'name' => 'Family Dining Table',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072713/Family_Sofa_nzynzl.jpg',
          'name' => 'Family Sofa',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072724/Great_Kitchen_Set_enrhcj.jpg',
          'name' => 'Great Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072722/Grey_Small_Kitchen_Set_oe3wcr.jpg',
          'name' => 'Grey Small Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072711/Ordinary_Kitchen_Set_wvtdqb.jpg',
          'name' => 'Ordinary Kitchen Set',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072719/Red_Stair_vwykwp.jpg',
          'name' => 'Red Stair',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072718/White_Simple_Shelf_am80gr.jpg',
          'name' => 'White Simple Shelf',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072725/Wood_Shelf_ceevt6.jpg',
          'name' => 'Wood Shelf',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072720/Wood_Style_Dining_Table_jgsyre.jpg',
          'name' => 'Wood Style Dining Table',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072718/Working_Desk_utiwnl.jpg',
          'name' => 'Working Desk',
          'description' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Bahan baku</p></td><td><p><strong>Multiplex</strong></p></td></tr><tr><td><p>Finishing dalam</p></td><td><p><strong>Supercone</strong></p></td></tr><tr><td><p>Finishing Luar</p></td><td><p><strong>High Pressure Laminate (HPL)</strong></p></td></tr></tbody></table>',
          'status' => 'no',
          'lang' => 'en'
        ]);
        $project->save();
    }
}
