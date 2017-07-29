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
          'sale' => '50% Sale',
          'class' => 'sale-carousel1',
          'status' => 'yes'
        ]);
        $promotion->save();

        $promotion = new \App\Promotion([
          'name' => 'This Week',
          'sale' => '25% Sale',
          'class' => 'sale-carousel2',
          'status' => 'yes'
        ]);
        $promotion->save();

        $promotion = new \App\Promotion([
          'name' => 'This Month',
          'sale' => '15% Sale',
          'class' => 'sale-carousel3',
          'status' => 'yes'
        ]);
        $promotion->save();

        $promotion = new \App\Promotion([
          'name' => 'This Year',
          'sale' => '10% Sale',
          'class' => 'sale-carousel4',
          'status' => 'yes'
        ]);
        $promotion->save();
    }
}
