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
          'image_header' => 'https://target.scene7.com/is/image/Target/061817_furniture_dsktp86001-170515_1494884115580?wid=1796&qlt=60&fmt=pjpeg',
          'opening_title' => 'Services',
          'opening_text' => 'This is what we do.'
        ]);
        $servicecatalogue->save();
    }
}
