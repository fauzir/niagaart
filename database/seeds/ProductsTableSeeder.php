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

        $product = new \App\Product([
          'service_item_id' => '8',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817513/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roller_blind1.png',
          'name' => 'Roller Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '8',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817514/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roller_blind2.png',
          'name' => 'Roller Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '8',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817514/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roller_blind3.png',
          'name' => 'Roller Blinds 3',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '8',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817514/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roller_blind4.png',
          'name' => 'Roller Blinds 4',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '8',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817514/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roller_blind5.png',
          'name' => 'Roller Blinds 5',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '8',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817515/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roller_blind6.png',
          'name' => 'Roller Blinds 6',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '8',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817515/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roller_blind7.png',
          'name' => 'Roller Blinds 7',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817516/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-shadow_blind1.png',
          'name' => 'Shadows Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817516/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-shadow_blind2.png',
          'name' => 'Shadows Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '10',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817516/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roman_shades_blind1.png',
          'name' => 'Roman Shades Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '10',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817516/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roman_shades_blind2.png',
          'name' => 'Roman Shades Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-Slimeline_Blinds1.png',
          'name' => 'Slimeline Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-Slimeline_Blinds2.png',
          'name' => 'Slimeline Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '12',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817512/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-panel_blinds.png',
          'name' => 'Panel Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '12',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817512/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-panel_blinds2.png',
          'name' => 'Panel Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '13',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-vertical_sheer_blind.png',
          'name' => 'Vertical Sheer Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '13',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-vertical_sheer_blind2.png',
          'name' => 'Vertical Sheer Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '14',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-skylight_blind1.png',
          'name' => 'Skylight Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '14',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-skylight_blind2.png',
          'name' => 'Skylight Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '15',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817512/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-rainbow_blind1.png',
          'name' => 'Rainbow Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '15',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817513/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-rainbow_blind2.png',
          'name' => 'Rainbow Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '16',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-vitrom_blinds1.png',
          'name' => 'Vitrom Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '16',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-vitrom_blinds2.png',
          'name' => 'Vitrom Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '17',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817516/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roman_bars_blinds1.png',
          'name' => 'Roman Bars Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '17',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817516/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roman_bars_blinds2.png',
          'name' => 'Roman Bars Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '18',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-wooden_blinds1.png',
          'name' => 'Wooden Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '18',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-wooden_blinds2.png',
          'name' => 'Wooden Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '19',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-vertical_blinds1.png',
          'name' => 'Vertical Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '19',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-vertical_blinds2.png',
          'name' => 'Vertical Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '20',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-curtain_manual1.png',
          'name' => 'Curtain Manual 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '20',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-curtain_manual2.png',
          'name' => 'Curtain Manual 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '21',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817510/Content/IMAGE%20BLIND-MERK%20ONNA/Exterior_Blind_-_suntex_blind1.png',
          'name' => 'Suntex Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '21',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Exterior_Blind_-_suntex_blind2.png',
          'name' => 'Suntex Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '22',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Exterior_Blind_-_windhouse_outdoor_blinds1.png',
          'name' => 'Windhouse Outdoor Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '22',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817513/Content/IMAGE%20BLIND-MERK%20ONNA/Exterior_Blind_-_windhouse_outdoor_blinds2.png',
          'name' => 'Windhouse Outdoor Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '23',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817512/Content/IMAGE%20BLIND-MERK%20ONNA/Exterior_Blind_-_uv_blinds1.png',
          'name' => 'UV Blinds 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '23',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817512/Content/IMAGE%20BLIND-MERK%20ONNA/Exterior_Blind_-_uv_blinds2.png',
          'name' => 'UV Blinds 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '24',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817514/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-Lipat_Door1.png',
          'name' => 'Lipat Door 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '24',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817514/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-Lipat_Door2.png',
          'name' => 'Lipat Door 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '25',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817515/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-Magnetic_Insect_Screen1.png',
          'name' => 'Magnetic Insect Screen 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '25',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817515/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-Magnetic_Insect_Screen2.png',
          'name' => 'Magnetic Insect Screen 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '25',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817515/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-Magnetic_Insect_Screen3.png',
          'name' => 'Magnetic Insect Screen 3',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '26',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-windhouse_insect_screen1.png',
          'name' => 'Windhouse Insect Screen 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '26',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817510/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-windhouse_insect_screen2.png',
          'name' => 'Windhouse Insect Screen 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '26',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-windhouse_insect_screen3.png',
          'name' => 'Windhouse Insect Screen 3',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '27',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817513/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-Lipat_windows1.png',
          'name' => 'Lipat Windows 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '27',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817514/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-Lipat_windows2.png',
          'name' => 'Lipat Windows 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '28',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-rubber_insect_screen.png',
          'name' => 'Rubber Insect Screen',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '29',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-Pintu_Exona1.png',
          'name' => 'Pintu exona 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '29',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817519/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-Pintu_Exona2.png',
          'name' => 'Pintu exona 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '30',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-shower_screen1.png',
          'name' => 'Shower Screen 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '30',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817519/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-shower_screen2.png',
          'name' => 'Shower Screen 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '31',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817519/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-tralis_exona1.png',
          'name' => 'Tralis Exona 1',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '31',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817519/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-tralis_exona2.png',
          'name' => 'Tralis Exona 2',
          'price' => '0'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_item_id' => '32',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-folding_doors1.png',
          'name' => 'Folding Doors 1',
          'price' => '0'
        ]);
        $product->save();
    }
}
