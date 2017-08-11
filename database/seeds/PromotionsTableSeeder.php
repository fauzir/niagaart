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
          'name' => 'Konsultasi & Desain Interior',
          'sale' => 'GRATIS',
          'class' => 'sale-interior',
          'status' => 'yes'
        ]);
        $promotion->save();

        $promotion = new \App\Promotion([
          'name' => 'Harga Kitchen Set',
          'sale' => 'Mulai Rp.1,4jt/meter',
          'class' => 'sale-kitchen-set',
          'status' => 'yes'
        ]);
        $promotion->save();

        $promotion = new \App\Promotion([
          'name' => 'Produk Kompor Modena',
          'sale' => 'DISKON 10%',
          'class' => 'sale-modena-kompor',
          'status' => 'yes'
        ]);
        $promotion->save();

        $promotion = new \App\Promotion([
          'name' => 'Parquet Vinyl',
          'sale' => 'Mulai Rp. 129rb/m²',
          'class' => 'sale-parquet-vinyl',
          'status' => 'yes'
        ]);
        $promotion->save();

        $promotion = new \App\Promotion([
          'name' => 'Beli Kitchen Set',
          'sale' => 'GRATIS Rak Piring',
          'class' => 'sale-rak-piring',
          'status' => 'yes'
        ]);
        $promotion->save();

        $promotion = new \App\Promotion([
          'name' => 'Onna Vertical Blind',
          'sale' => 'DISKON 10%',
          'class' => 'sale-onna-vertical-blind',
          'status' => 'yes'
        ]);
        $promotion->save();

    }
}
