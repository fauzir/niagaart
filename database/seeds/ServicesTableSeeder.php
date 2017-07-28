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
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/c_scale,h_550,w_650/v1501041018/opening_mqcfez.jpg',
          'name' => 'Home Living',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'type' => 'interior',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041016/apartment_td9ffn.jpg',
          'name' => 'Apartment',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'type' => 'interior',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/c_scale,h_550,w_650/v1501041016/cafe_vethtu.jpg',
          'name' => 'Cafe & FoodCourt',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'type' => 'interior',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041018/office_hi8i4b.jpg',
          'name' => 'Shop / Office',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'type' => 'interior',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041018/opening_mqcfez.jpg',
          'name' => 'Flooring',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041016/apartment_td9ffn.jpg',
          'name' => 'Blind',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041016/cafe_vethtu.jpg',
          'name' => 'Wall Paper',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041018/office_hi8i4b.jpg',
          'name' => 'Wall Clading',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041018/opening_mqcfez.jpg',
          'name' => 'Chair',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();
    }
}
