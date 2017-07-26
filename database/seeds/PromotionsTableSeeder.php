<?php

use Illuminate\Database\Seeder;

class PromotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotion = new \App\Promotion([
          'name' => 'Today',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041019/sale-banner_srz4xv.jpg',
          'status' => 'yes'
        ]);
        $promotion->save();

        $promotion = new \App\Promotion([
          'name' => 'This Week',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041018/sale-banner1_d9wkpz.jpg',
          'status' => 'yes'
        ]);
        $promotion->save();

        $promotion = new \App\Promotion([
          'name' => 'This Month',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041019/sale-banner2_wvn36b.jpg',
          'status' => 'yes'
        ]);
        $promotion->save();
    }
}
