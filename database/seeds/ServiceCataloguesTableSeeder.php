<?php

use Illuminate\Database\Seeder;

class ServiceCataloguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicecatalogue = new \App\ServiceCatalogue([
          'image_header' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726579/interior-designer_zlmnye.jpg',
          'opening_title' => 'Our Services',
          'opening_text' => 'We apply minimalist design concept for an apartment, home living, hotel, office, and retail focusing on function-based products that were designed artistically to give a comfortable and eye-pleasing room. '
        ]);
        $servicecatalogue->save();

        $servicecatalogue = new \App\ServiceCatalogue([
          'image_header' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726579/interior-designer_zlmnye.jpg',
          'opening_title' => 'Layanan Kami',
          'opening_text' => 'Menjadikan suatu ruangan nyaman dan tertata sebagaimana fungsinya merupakan harapan banyak orang. Desain interior minimalis bisa dijadikan solusi untuk mewujudkan harapan tersebut, karena desain ini cenderung menekankan pada sisi fungsional terutama bagi mereka yang memiliki ruangan yang cenderung terbatas atau berukuran kecil.
Konsep minimalis ini memberi kesan sederhana tapi elegan, hal ini tentunya bisa menutupi kekurangan dari hunian yang berdiri di lahan terbatas. Hal ini karena konsep minimalis ini memang memberikan kesan ‘luas’ bagi suatu ruangan. Kuncinya berada pada teknik penataan barang yang sebisa mungkin tidak ditata di atas furniture, alih-alih menata perabot di atas furniture, konsep ini lebih mengutamakan menata barang-barang di dalam furniture untuk menjaga kerapihan. Untuk menghindari penataan ruangan yang cenderung monoton, maka desain minimalis ini memerlukan peran hiasan seperti vas bunga, bingkai foto, dll yang tentunya berkarakter sejalan dengan konsep minimalis itu sendiri.'
        ]);
        $servicecatalogue->save();
    }
}
