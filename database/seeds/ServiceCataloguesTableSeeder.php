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
          'opening_text' => 'Konsep desain minimalis yang kami terapkan seperti interior pada apartemen, rumah/hunian, hotel, perkantoran, pertokoan yang mengutamakan kegunaan produk berdasarkan fungsinya yang di desain  artistik untuk memberikan kesan nyaman dan indah pada ruangan Anda.'
        ]);
        $servicecatalogue->save();
    }
}
