<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
          'service_item_id' => '1',
          'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUCGYDHyQaM_KxFIbI42RcSV_p3q5EXxsg5ZAXoCKxOnrZU0UN',
          'name' => 'Table',
          'price' => '200'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '1',
          'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUCGYDHyQaM_KxFIbI42RcSV_p3q5EXxsg5ZAXoCKxOnrZU0UN',
          'name' => 'Chair',
          'price' => '100'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '2',
          'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUCGYDHyQaM_KxFIbI42RcSV_p3q5EXxsg5ZAXoCKxOnrZU0UN',
          'name' => 'Bed',
          'price' => '500'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '4',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817676/Content/IMAGE%20FLOORING-MERK%20TACO/Wood_Patterns_TV-001_Rustic_Oak.jpg',
          'name' => 'TV-001 Rustic Oak',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '4',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817676/Content/IMAGE%20FLOORING-MERK%20TACO/Wood_Patterns_TV-002_Munich_Pine.jpg',
          'name' => 'TV-002 Munich Pine',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '4',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817677/Content/IMAGE%20FLOORING-MERK%20TACO/Wood_Patterns_TV-003_Washed_Oak.jpg',
          'name' => 'TV-003 Washed Oak',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '4',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817677/Content/IMAGE%20FLOORING-MERK%20TACO/Wood_Patterns_TV-004_Parma_Oak.jpg',
          'name' => 'TV-004 Parma Oak',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '4',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817684/Content/IMAGE%20FLOORING-MERK%20TACO/Wood_Patterns_TV-005_Vintage_Oak.jpg',
          'name' => 'TV-005 Vintage Oak',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '4',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817678/Content/IMAGE%20FLOORING-MERK%20TACO/Wood_Patterns_TV-006_Real_Cherry.jpg',
          'name' => 'TV-006 Real Cherry',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '4',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817679/Content/IMAGE%20FLOORING-MERK%20TACO/Wood_Patterns_TV-007_Merbau_Wood.jpg',
          'name' => 'TV-007 Merbau Wood',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '4',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817678/Content/IMAGE%20FLOORING-MERK%20TACO/Wood_Patterns_TV-008_Sand_Malmo.jpg',
          'name' => 'TV-008 Sand Malmo',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '5',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817675/Content/IMAGE%20FLOORING-MERK%20TACO/Stone_Patterns_V-023-Rust-Granite_productpopup.jpg',
          'name' => 'V-023 Rust Granite',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '5',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817675/Content/IMAGE%20FLOORING-MERK%20TACO/Stone_Patterns_V-024-Grey-Slate_productpopup.jpg',
          'name' => 'V-024 Grey Slate',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817645/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/Jb_Vinyl_-_LUX_5251.jpg',
          'name' => 'Jb Vinyl - LUX 5251',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817646/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/Jb_Vinyl_-_LUX_5252.jpg',
          'name' => 'Jb Vinyl - LUX 5252',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817643/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/Jb_Vinyl_-_LUX_5253.jpg',
          'name' => 'Jb Vinyl - LUX 5253',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817647/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/Jb_Vinyl_-_LUX_5255.jpg',
          'name' => 'Jb Vinyl - LUX 5255',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817647/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/Jb_Vinyl_-_LUX_5257.jpg',
          'name' => 'Jb Vinyl - LUX 5257',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817643/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/Jb_Vinyl_-_LUX_5260.jpg',
          'name' => 'Jb Vinyl - LUX 5260',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817645/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/ozora_8801.jpg',
          'name' => 'Ozora 8801',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817644/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/Ozora_8802.jpg',
          'name' => 'Ozora 8802',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817647/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/Ozora_8803.jpg',
          'name' => 'Ozora 8803',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817646/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/Ozora_8804.jpg',
          'name' => 'Ozora 8804',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817647/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/Ozora_8805.jpg',
          'name' => 'Ozora 8805',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817647/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/Ozora_8806.jpg',
          'name' => 'Ozora 8806',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817648/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/Ozora_8807.jpg',
          'name' => 'Ozora 8807',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817649/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/Ozora_8808.jpg',
          'name' => 'Ozora 8808',
          'price' => '0'
        ]);
        $product->save();
    }
}
