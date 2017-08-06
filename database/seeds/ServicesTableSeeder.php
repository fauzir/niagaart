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
          'description' => 'Make your life comfortable with the concept of interior home living to make you as comfortable as being at home',
          'type' => 'interior',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726577/apartment_zml6sa_adsgkl.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726576/apartment_td9ffn_troc1h.jpg',
          'name' => 'Apartment',
          'description' => 'Modern Conveniences & Entertainment, All Within Your Reach',
          'type' => 'interior',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726580/cafe-foodcourt_fggtdn.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/c_scale,h_550,w_650/v1501041016/cafe_bncjtr.jpg',
          'name' => 'Cafe & FoodCourt',
          'description' => 'Start the day with great taste',
          'type' => 'interior',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726584/shop-office_upejxz.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726580/office_x1stuu.jpg',
          'name' => 'Shop and Office',
          'description' => 'Be The Change You Want To See',
          'type' => 'interior',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726579/flooring_xllqgs.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501041018/opening_pwrzjo.jpg',
          'name' => 'Flooring',
          'description' => 'Whatever your style, we’ll help you achieve it',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726578/blind_pxby4c.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726576/apartment_td9ffn_troc1h.jpg',
          'name' => 'Blind',
          'description' => 'Elegance your way',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726584/wall-paper_ebavzo.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/c_scale,h_550,w_650/v1501041016/cafe_bncjtr.jpg',
          'name' => 'Wall Paper',
          'description' => 'Simplicity beats complexity',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726584/wall-clading_zuc3d4.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726580/office_x1stuu.jpg',
          'name' => 'Wall Clading',
          'description' => 'Make a statement in style',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726578/chair_f0sws3.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501041018/opening_pwrzjo.jpg',
          'name' => 'Chair',
          'description' => 'Transforming spaces. Transforming Lives.',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726578/chair_f0sws3.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501041018/opening_pwrzjo.jpg',
          'name' => 'Rak-Modelline',
          'description' => 'Transforming spaces. Transforming Lives.',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726578/chair_f0sws3.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501041018/opening_pwrzjo.jpg',
          'name' => 'Cooking-Modena',
          'description' => 'Transforming spaces. Transforming Lives.',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();

        $service = new \App\Service([
          'banner_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726578/chair_f0sws3.jpg',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501041018/opening_pwrzjo.jpg',
          'name' => 'Cooking-Domo',
          'description' => 'Transforming spaces. Transforming Lives.',
          'type' => 'other',
          'publish' => 'yes'
        ]);
        $service->save();
    }
}
