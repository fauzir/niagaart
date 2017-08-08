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
          'opening_text' => 'Making a room comfortable and organized as its function is the hope of many people. Minimalist interior design can be used as a solution to realize these expectations, because this design tends to emphasize on the functional side, especially for those who have a room that tends to be limited or small. This minimalist concept gives the impression of simple but elegant, it is certainly able to cover the lack of occupancy that stands on a limited land. This is because this minimalist concept does give the impression of "spacious" for a room. The key is on the technique of arrangement of goods that as much as possible not set in the furniture, instead of arranging furniture on furniture, this concept is more priority to organize items in furniture to maintain neatness. To avoid the arrangement of rooms that tend to be monotonous, then this minimalist design requires the role of decorations such as vase, photo frame, etc. which of course character in line with the minimalist concept itself.'
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
