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
          'image_header' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501726579/interior-designer_zlmnye.jpg',
          'opening_title' => 'Our Services',
          'opening_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ]);
        $servicecatalogue->save();

        $servicecatalogue = new \App\ServiceCatalogue([
          'image_header' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501726579/interior-designer_zlmnye.jpg',
          'opening_title' => 'Layanan Kami',
          'opening_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ]);
        $servicecatalogue->save();
    }
}
