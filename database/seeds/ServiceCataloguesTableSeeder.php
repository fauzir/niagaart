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
          'opening_text' => 'Create a cozy and organized room as its function is everybody’s dream. For make it happens minimalist interior design can be a right solution, it’s because the minimalist design determining by the functional-side, especially for everyone who own limited or small room/building area.
Minimalist design gives the impression of simple yet elegant vibes, this things certainly can diminishing the deficiency of a limited or small room, because the minimalist design can give the touch of wide looks, so a room can look bigger visually. The minimalist design’s key lies on the tidying-up technique which is, ‘it’s a big no to place too much things/decorations all over the furniture’. Minimalist concept chooses to put the things inside the furniture instead of put so many things over the furniture, put the things inside is useful to maintain the tidiness of a place. We still use some decorations to avoid the monotonous atmosphere, but the decorations have to be simple and elegant, and to be noted: do not put too much things over the furniture is a main point.'
        ]);
        $servicecatalogue->save();

        $servicecatalogue = new \App\ServiceCatalogue([
          'image_header' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726579/interior-designer_zlmnye.jpg',
          'opening_title' => 'Layanan Kami',
          'opening_text' => 'Menjadikan suatu ruangan nyaman dan tertata sebagaimana fungsinya merupakan harapan banyak orang. Desain interior minimalis bisa dijadikan solusi untuk mewujudkan harapan tersebut, karena desain ini cenderung menekankan pada sisi fungsional terutama bagi mereka yang memiliki ruangan yang cenderung terbatas atau berukuran kecil. Konsep minimalis ini memberi kesan sederhana tapi elegan, hal ini tentunya bisa menutupi kekurangan dari hunian yang berdiri di lahan terbatas. Hal ini karena konsep minimalis ini memang memberikan kesan ‘luas’ bagi suatu ruangan. Kuncinya berada pada teknik penataan barang yang sebisa mungkin tidak ditata di atas furniture, alih-alih menata perabot di atas furniture, konsep ini lebih mengutamakan menata barang-barang di dalam furniture untuk menjaga kerapihan. Untuk menghindari penataan ruangan yang cenderung monoton, maka desain minimalis ini memerlukan peran hiasan seperti vas bunga, bingkai foto, dll yang tentunya berkarakter sejalan dengan konsep minimalis itu sendiri.'
        ]);
        $servicecatalogue->save();
    }
}
