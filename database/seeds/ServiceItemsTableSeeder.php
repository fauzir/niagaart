<?php

use Illuminate\Database\Seeder;

class ServiceItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $serviceitem = new \App\ServiceItem([
          'service_id' => '1',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901048/389_i1pswr.jpg',
          'name' => 'Backdrop, Partisi, Buffet',
          'description' => '',
          'detail' => '<p> <strong></strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '1',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901056/489.1_x2bchd.jpg',
          'name' => 'Bed Room Set',
          'description' => '',
          'detail' => '<p> <strong></strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '1',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901051/389.2_wv8xk4.jpg',
          'name' => 'Kitchen Set - Minibar',
          'description' => '',
          'detail' => '<p> <strong></strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '5',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817676/Content/IMAGE%20FLOORING-MERK%20TACO/TACO_-_MAIN_IMAGE.png',
          'name' => 'Taco: Nature Amplified (Wood Patterns)',
          'description' => 'Heavy duty luxury vinyl planks from TACO Flooring, bringing confort eith four excellent benefits: Water-proof,Termite-proof, Noise Reduction and Easy Maintainance.',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Lapisan</p></td><td><p><strong>Wear Layer, UV Protection, PVC Decor Layer, Bottom Layer</strong></p></td></tr><tr><td><p>Thickness</p></td><td><p><strong>3 mm</strong></p></td></tr><tr><td><p>Wearlayer</p></td><td><p><strong>0.2 mm</strong></p></td></tr><tr><td><p>Dimention</p></td><td><p><strong>152.4 mm x 914.4 mm</strong></p></td></tr><tr><td><p>1 Box</p></td><td><p><strong>3.34 m&sup2; (24 Planks)</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '5',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817676/Content/IMAGE%20FLOORING-MERK%20TACO/TACO_-_MAIN_IMAGE2.png',
          'name' => 'Taco: Nature Amplified (Stone Patterns)',
          'description' => 'Heavy duty luxury vinyl planks from TACO Flooring, bringing confort eith four excellent benefits: Water-proof,Termite-proof, Noise Reduction and Easy Maintainance.',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Lapisan</p></td><td><p><strong>Wear Layer, UV Protection, PVC Decor Layer, Bottom Layer</strong></p></td></tr><tr><td><p>Thickness</p></td><td><p><strong>3 mm</strong></p></td></tr><tr><td><p>Wearlayer</p></td><td><p><strong>0.2 mm</strong></p></td></tr><tr><td><p>Dimention</p></td><td><p><strong>304.8 mm x 609.6 mm</strong></p></td></tr><tr><td><p>1 Box</p></td><td><p><strong>3.34 m&sup2; (18 Planks)</strong></p></td></tr><tr><td><p>Harga</p></td><td><p><strong>Rp 525.000,-/ 3m&sup2;</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '5',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817648/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/OZORA-MAIN_PICTURE.jpg',
          'name' => 'JB-Vinyl: Natural, Elegance, Beauty, Style',
          'description' => 'Can prevent the cold from the floor, easy to clean and durable, motif image dous not fade, can be used in all the rooms (dloor/wall),there are variety of motifs and colors, can adjust the room temperature hot and cold.',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Lapisan</p></td><td><p><strong>Wear Layer, Pattern Layer, Substrate Layer, Backing Layer.</strong></p></td></tr><tr><td><p>Dimention change of heating</p></td><td><p><strong>Unit:mm; Measurement: MD &ndash; 0.18 &amp; CD + 0.10</strong></p></td></tr><tr><td><p>Leri of water absorption</p></td><td><p><strong>Measurement: MD &ndash; 0.10 &amp; CD + 0.07</strong></p></td></tr><tr><td><p>Ratio of swelling</p></td><td><p><strong>Unit: 20&ordm;C; Measurement: 0.47 x 10&ordm;C</strong></p></td></tr><tr><td><p>Indentation</p></td><td><p><strong>Unit: 40&ordm;C; Measurement: 0.12 mm &amp; 0.25 mm</strong></p></td></tr><tr><td><p>Lost of heating</p></td><td><p><strong>Measurement: bellow 0.10</strong></p></td></tr><tr><td><p>Light resistance</p></td><td><p><strong>Measurement: 3-4 Class</strong></p></td></tr><tr><td><p>Ressilience</p></td><td><p><strong>Measurement: Good</strong></p></td></tr><tr><td><p>Critical Radiant Fluse</p></td><td><p><strong>Measurement: 0.45 Watts/cm&sup3;</strong></p></td></tr><tr><td><p>Size</p></td><td><p><strong>186 x 920 x 3 mm</strong></p></td></tr><tr><td><p>Sheet</p></td><td><p><strong>18 Sheet</strong></p></td></tr><tr><td><p>Harga</p></td><td><p><strong>Rp 388.000,-/ 3m&sup2;</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '5',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817648/Content/IMAGE%20FLOORING-MERK%20OZORA%20_%20JB%20VINYL/OZORA-MAIN_PICTURE.jpg',
          'name' => 'Ozora: Natural Vinyl Floor and Wall ',
          'description' => 'Prevent cold from the loor, durable and easy to clean, fade resistance for motif image,luxury at floor and wall, variety motifs and colors, can adjust the room temperature hot and cold.',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Lapisan</p></td><td><p><strong>Wear Layer, UV Protection, PVC Decor Layer, Bottom Layer</strong></p></td></tr><tr><td><p>Dimention change of heating</p></td><td><p><strong>Unit:mm; Measurement: MD &ndash; 0.18 &amp; CD + 0.10</strong></p></td></tr><tr><td><p>Leri of water absorption</p></td><td><p><strong>Measurement: MD &ndash; 0.10 &amp; CD + 0.07</strong></p></td></tr><tr><td><p>Ratio of swelling</p></td><td><p><strong>Unit: 20&ordm;C; Measurement: 0.47 x 10&ordm;C</strong></p></td></tr><tr><td><p>Indentation</p></td><td><p><strong>Unit: 40&ordm;C; Measurement: 0.12 mm &amp; 0.25 mm</strong></p></td></tr><tr><td><p>Lost of heating</p></td><td><p><strong>Measurement: bellow 0.10</strong></p></td></tr><tr><td><p>Light resistance</p></td><td><p><strong>Measurement: 3-4 Class</strong></p></td></tr><tr><td><p>Ressilience</p></td><td><p><strong>Measurement: Good</strong></p></td></tr><tr><td><p>Critical Radiant Fluse</p></td><td><p><strong>Measurement: 0.45 Watts/cm&sup3;</strong></p></td></tr><tr><td><p>1 Box</p></td><td><p><strong>3.10 m&sup2; (18 Planks)</strong></p></td></tr><tr><td><p>Harga</p></td><td><p><strong>Rp 388.000,-/ 3m&sup2;</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817513/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roller_blind1.png',
          'name' => 'Interior Blind: Roller Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817516/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-shadow_blind1.png',
          'name' => 'Interior Blind: Shadows Blind',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817516/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roman_shades_blind1.png',
          'name' => 'Interior Blind: Roman Shades Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-Slimeline_Blinds1.png',
          'name' => 'Interior Blind: Slimeline Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817512/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-panel_blinds.png',
          'name' => 'Interior Blind: Panel Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-vertical_sheer_blind.png',
          'name' => 'Interior Blind: Vertical Sheer Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-skylight_blind1.png',
          'name' => 'Interior Blind: Skylight Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817512/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-rainbow_blind1.png',
          'name' => 'Interior Blind: Rainbow Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-vitrom_blinds1.png',
          'name' => 'Interior Blind: Vitrom Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817516/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-roman_bars_blinds1.png',
          'name' => 'Interior Blind: Roman Bars Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-wooden_blinds1.png',
          'name' => 'Interior Blind: Wooden Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817517/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-vertical_blinds1.png',
          'name' => 'Interior Blind: Vertical Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Interior_Blind-curtain_manual1.png',
          'name' => 'Interior Blind: Curtain Manual',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817510/Content/IMAGE%20BLIND-MERK%20ONNA/Exterior_Blind_-_suntex_blind1.png',
          'name' => 'Exterior Blind: Suntex Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Exterior_Blind_-_windhouse_outdoor_blinds1.png',
          'name' => 'Exterior Blind: Windhouse Outdoor Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817512/Content/IMAGE%20BLIND-MERK%20ONNA/Exterior_Blind_-_uv_blinds1.png',
          'name' => 'Exterior Blind: UV Blinds',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817514/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-Lipat_Door1.png',
          'name' => 'Insect Screens: Lipat Door',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817515/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-Magnetic_Insect_Screen1.png',
          'name' => 'Insect Screens: Magnetic Insect Screen',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-windhouse_insect_screen1.png',
          'name' => 'Insect Screens: Windhouse Insect Screen',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817513/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-Lipat_windows1.png',
          'name' => 'Insect Screens: Lipat Windows',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817511/Content/IMAGE%20BLIND-MERK%20ONNA/Insect_Screen-rubber_insect_screen.png',
          'name' => 'Insect Screens: Rubber Insect Screen',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-Pintu_Exona1.png',
          'name' => 'Partition: Pintu exona',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-shower_screen1.png',
          'name' => 'Partition: Shower Screen',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817519/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-tralis_exona1.png',
          'name' => 'Partition: Tralis Exona',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817518/Content/IMAGE%20BLIND-MERK%20ONNA/Partition-folding_doors1.png',
          'name' => 'Partition: Folding Door',
          'description' => 'Onna constantly updates and upgrades its product line and materials to adhere with current technology and international trends. ',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '8',
          'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUCGYDHyQaM_KxFIbI42RcSV_p3q5EXxsg5ZAXoCKxOnrZU0UN',
          'name' => 'Decorative 3D Interior Panels',
          'description' => 'Pulp of sugarcane Bagassse or of other fibrous cellulostic Material;Moulded or pressed articles of sugarcane Bagasse pulp or of other fibrous cellulosic Material other pulp, cellulose wadding and webs of celulose fibres, cut to size or shape; other articles of sugarcane Bagasse ulp, cellulse fibres.',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Size</p></td><td><p><strong>500x500 mm or 625x800mm with &plusmn;0.5 mm. Tolerance sideways per 500 mm and &plusmn;0.7 mm diagonal</strong></p></td></tr><tr><td><p>Weight</p></td><td><p><strong>+275 grams</strong></p></td></tr><tr><td><p>Thickness</p></td><td><p><strong>approx 1.5mm (&plusmn;tolerance of 0.05mm)</strong></p></td></tr><tr><td><p>Height</p></td><td><p><strong>thickness of panel +15mm (total approx15.5mm)</strong></p></td></tr><tr><td><p>Material</p></td><td><p><strong>white bagasse (natural bleanched sugarcene pulp)</strong></p></td></tr><tr><td><p>Packing</p></td><td><p><strong>12 panel covers 3m&sup2; (for 500x500 mm) and 6 panels covers 3m&sup2; (for 625x800mm)</strong></p></td></tr><tr><td><p>Fire Resistance</p></td><td><p><strong>Classic, but we advice to use class a fire proof coating/fire retardant paint like dc333 after installing for best an safest result!</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '4',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901057/479_ahvw9o.jpg',
          'name' => 'Shop and Office',
          'description' => '',
          'detail' => '<p> <strong></strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901059/Chitose-NC_i6ij3m.jpg',
          'name' => 'Chitose: NC',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>395 x 510 x 1010</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>560 ~ 650</strong><br/></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>5</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>2</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>PVC Vinyl</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Hammertone,&nbsp;Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Black</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901058/Chitose-NA_o0p42l.jpg',
          'name' => 'Chitose: NA',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>395 x 510 x 860</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>400 ~ 490</strong><br/></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>6.5</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>2</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>PVC Vinyl</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Hammertone,&nbsp;Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Black</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901060/Chitose-NBK_kqm4ui.jpg',
          'name' => 'Chitose: NBK',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>395 x 510 x 860</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>400 ~ 490</strong><br/></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>9.1</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>2</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>PVC Vinyl</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Hammertone,&nbsp;Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Black</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901059/jasmine-c1111_ehozq4.jpg',
          'name' => 'Jasmine C-111',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>487 x478 x 747</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>445</strong><br/></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>4.2</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>Fabric,PVC Vinyl,Oscar</strong></p></td></tr><tr><td><p>Back Material</p></td><td><p><strong>Plastic ( White & Grey )</strong></p></td></tr><tr><td><p>Upholstery Color</p></td><td><p><strong>Orange, Yellow, Green, Blue, Red, Black, Light Green</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Chrome Plating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Chrome</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901061/flora-h1_xdi3xz.jpg',
          'name' => 'Flora H',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>495 x 415 x 675</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>445</strong><br/></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>6.5</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>2</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>PVC Vinyl</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Hammertone, Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Black</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901058/flora-san1_j9wyij.jpg',
          'name' => 'Flora SAN',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>515 x 515 x 445</strong></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>2.5</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>6</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>PVC Vinyl</strong></p></td></tr><tr><td><p>Upholstery Color</p></td><td><p><strong>Yellow, Red, Green, Blue, Cream</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Chrome Plating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Yellow, Red, Green, Chrome, Blue, Cream</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901057/jasmine-c2111_wgwczm.jpg',
          'name' => 'Jasmine C-211',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>448 x 465 x 722</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>420</strong></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>3.7</strong></p></td></tr><tr><td><p>Seat Material</p></td><td><p><strong>Fabric, PVC Vinyl, Oscar</strong></p></td></tr><tr><td><p>Back Material</p></td><td><p><strong>Plastic ( White & Grey )</strong></p></td></tr><tr><td><p>Seat & Back Colours</p></td><td><p><strong>Orange, Yellow, Green, Blue, Red, Black, Light Green,Blue</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Chrome Plating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Chrome</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901058/hanako-s1_qnhiw6.jpg',
          'name' => 'Hanako S',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>455 x 555x 890</strong></p><p>Seat Height (mm) <strong>460</strong></p><p>Weight Per Piece (Kg) <strong>6.8</strong></p><p>Contain per Carton <strong>4</strong></p><p>Upholstery Material <strong>Fabric</strong></p><p>Upholstery Colours <strong>Blue, Red, Green, Black</strong></p><p>Frame Finisihing <strong>Powder Coating</strong></p><p>Frame Color <strong>Silver, Gold, Cream</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901058/hanako-o1_bp70ad.jpg',
          'name' => 'Hanako O',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>455 x 555x 890</strong></p><p>Seat Height (mm) <strong>440</strong></p><p>Weight Per Piece (Kg) <strong>6.8</strong></p><p>Contain per Carton <strong>4</strong></p><p>Upholstery Material <strong>Fabric</strong></p><p>Upholstery Colours <strong>Blue, Red, Green, Black</strong></p><p>Frame Finisihing <strong>Powder Coating</strong></p><p>Frame Color <strong>Silver, Gold, Cream</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901058/jiro-s1_bsxwhy.jpg',
          'name' => 'Jiro S',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>455 x 554 x 890</strong></p><p>Seat Height (mm) <strong>460</strong></p><p>Weight Per Piece (Kg) <strong>6.5</strong></p><p>Contain per Carton <strong>4</strong></p><p>Upholstery Material <strong>Fabric</strong></p><p>Upholstery Colours <strong>Blue, Red, Green, Black</strong></p><p>Frame Finisihing <strong>Powder Coating</strong></p><p>Frame Color <strong>Gold</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901060/jiro-o1_mn8gsu.jpg',
          'name' => 'Jiro O',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>455 x 554 x 890</strong></p><p>Seat Height (mm) <strong>440</strong></p><p>Weight Per Piece (Kg) <strong>6.8</strong></p><p>Contain per Carton <strong>4</strong></p><p>Upholstery Material <strong>Fabric</strong></p><p>Upholstery Colours <strong>Blue, Red, Green, Black</strong></p><p>Frame Finisihing <strong>Powder Coating</strong></p><p>Frame Color <strong>Silver, Gold, Cream</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901058/taro-s1_sakv4p.jpg',
          'name' => 'Taro S',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>455 x 563 x 890</strong></p><p>Seat Height (mm) <strong>460</strong></p><p>Weight Per Piece (Kg) <strong>6.5</strong></p><p>Contain per Carton <strong>4</strong></p><p>Upholstery Material <strong>Fabric</strong></p><p>Upholstery Colours <strong>Blue, Red, Green, Black</strong></p><p>Frame Finisihing <strong>Powder Coating</strong></p><p>Frame Color <strong>Gold</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901058/taro-o1_dx1pa4.jpg',
          'name' => 'Taro O',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>455 x 554 x 890</strong></p><p>Seat Height (mm) <strong>440</strong></p><p>Weight Per Piece (Kg) <strong>6.5</strong></p><p>Contain per Carton <strong>4</strong></p><p>Upholstery Material <strong>Fabric</strong></p><p>Upholstery Colours <strong>Blue, Red, Green, Black</strong></p><p>Frame Finisihing <strong>Powder Coating</strong></p><p>Frame Color <strong>Silver, Gold, Cream</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901059/caesar-n-p1_esjzpn.jpg',
          'name' => 'Caesar N / P',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>410 x 505 x 875</strong></p><p>Seat Height (mm) <strong>476</strong></p><p>Weight Per Piece (Kg) <strong>5.3</strong></p><p>Contain per Carton <strong>4</strong></p><p>Upholstery Material <strong>Fabric & PVC</strong></p><p>Upholstery Colours <strong>Red, Blue, Grey, Green, Black</strong></p><p>Frame Finisihing <strong>Chrome Plating (N), Powder Coating (P)</strong></p><p>Frame Color <strong>Black, Silver</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => '',
          'name' => 'Prince',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>440 x 573 x 900</strong></p><p>Weight Per Piece (Kg) <strong>4.65</strong></p><p>Frame Finisihing <strong>Chrome Plating, Powder Coating</strong></p><p>Frame Color <strong>Chrome, Gold, Silver</strong></p><p>Colour Options & Upholstery Material <strong>Fabric</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901060/sakata-n1_hfbraj.jpg',
          'name' => 'Sakata N',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>435 x 512 x 895</strong></p><p>Seat Height (mm) <strong>450</strong></p><p>Weight Per Piece (Kg) <strong>4.8</strong></p><p>Contain per Carton <strong>4</strong></p><p>Upholstery Material <strong>Fabric & PVC</strong></p><p>Upholstery Colours <strong>Red, Brown, Cream, Blue, Grey, L6Green, Lv6 Green , L1 Blue, Lv1 Blue, Black</strong></p><p>Frame Finisihing <strong>Chrome Plating</strong></p><p>Frame Color <strong>Chrome</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901058/lotus1_c3ydhw.jpg',
          'name' => 'Lotus',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>500 x 510 x 760</strong></p><p>Seat Height (mm) <strong>451</strong></p><p>Weight Per Piece (Kg) <strong>3.5</strong></p><p>Upholstery Material <strong>Fabric (Seat), Plastic (Back)</strong></p><p>Upholstery Colours <strong>Blue, Grey, Green, Black, Red, Brown, Cream</strong></p><p>Frame Finisihing <strong>Chrome Plating</strong></p><p>Frame Color <strong>Chrome</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901059/olive-a1_zgsqrs.jpg',
          'name' => 'Olive A',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>515 x 585 x 795</strong></p><p>Weight Per Piece (Kg) <strong>4.2</strong></p><p>Upholstery Material <strong>Plastic</strong></p><p>Upholstery Colours <strong>White, Beige,  Grey, Dark Grey, Red, Light Blue, Light Green</strong></p><p>Frame Finisihing <strong>Powder Coating</strong></p><p>Frame Color <strong>Silver</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901060/glory1_nbwnaw.jpg',
          'name' => 'Glory',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>437 x 436 x 807</strong></p><p>Weight Per Piece (Kg) <strong>3</strong></p><p>Seat & Back material <strong>Plastic</strong></p><p>Seat & Back Colours <strong>Dark Grey, Blue, White, Orange</strong></p><p>Frame Finisihing <strong>Zinc Chrome Plating,& Powder Coating</strong></p><p>Frame Color <strong>Chrome, White & Light Silver</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901060/sam1_lk9xpq.jpg',
          'name' => 'SAM',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>453 x 456 x 770</strong></p><p>Seat Height (mm) <strong>448</strong></p><p>Weight Per Piece (Kg) <strong>4.7</strong></p><p>Seat & Back material <strong>Plate</strong></p><p>Seat & Back Colours <strong>Grey, Silver, White, Orange</strong></p><p>Frame Finisihing <strong>Powder Coating</strong></p><p>Frame Color <strong>Grey, Silver, White, Orange</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901058/ribbon-p-z1_mrbiza.jpg',
          'name' => 'Ribbon P / Z',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>435 x 435 x 460</strong></p><p>Weight Per Piece (Kg) <strong>1.6</strong></p><p>Seat Colours <strong>Yellow, Grey, Black</strong></p><p>Frame Finisihing <strong>Powder Coating (Ribbon-P), Zinc Chrome Plating (Ribbon-Z)</strong></p><p>Frame Color <strong>Yellow, Chrome</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901064/BERRY_ygkegx.jpg',
          'name' => 'BERRY',
          'description' => '',
          'detail' => '<p>Width <strong>31</strong></p><p>Depth <strong>31</strong></p><p>Height <strong>32-40</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901064/CAFTO_gkouwy.jpg',
          'name' => 'CAFTO',
          'description' => '',
          'detail' => '<p>Width <strong>38</strong></p><p>Depth <strong>38</strong></p><p>Height <strong>60-82</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901063/CANDY-1_iumi8h.jpg',
          'name' => 'CANDY 1',
          'description' => '',
          'detail' => '<p>Width <strong>56</strong></p><p>Depth <strong>53</strong></p><p>Height <strong>87-97</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901063/CANDY-2_ph8xm2.jpg',
          'name' => 'CANDY 2',
          'description' => '',
          'detail' => '<p>Width <strong>56</strong></p><p>Depth <strong>53</strong></p><p>Height <strong>96-108</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901064/CANDY-3_g6mljo.jpg',
          'name' => 'CANDY 3',
          'description' => '',
          'detail' => '<p>Width <strong>67</strong></p><p>Depth <strong>65</strong></p><p>Height <strong>89-101</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901061/CERRY_p2onzp.jpg',
          'name' => 'CERRY',
          'description' => '',
          'detail' => '<p>Width <strong>45</strong></p><p>Depth <strong>43</strong></p><p>Height <strong>67-90</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901062/DO-67-GR_hfamrx.jpg',
          'name' => 'DO-67 GR',
          'description' => '',
          'detail' => '<p>Width <strong>61</strong></p><p>Depth <strong>38</strong></p><p>Height <strong>61-71</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901063/DO-67-M_klnoes.jpg',
          'name' => 'DO-67 M',
          'description' => '',
          'detail' => '<p>Width <strong>43</strong></p><p>Depth <strong>38</strong></p><p>Height <strong>51</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901061/DO-68-PUM_v4geof.jpg',
          'name' => 'DO-68 PUM',
          'description' => '',
          'detail' => '<p>Width <strong>37</strong></p><p>Depth <strong>36</strong></p><p>Height <strong>43</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901063/DO-68-PUGR_shdoo7.jpg',
          'name' => 'DO-68 PUGR',
          'description' => '',
          'detail' => '<p>Width <strong>43</strong></p><p>Depth <strong>36</strong></p><p>Height <strong>54</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901062/DO-68-PUGBP_cfpo5t.jpg',
          'name' => 'DO-68 PUGBP',
          'description' => '',
          'detail' => '<p>Width <strong>36</strong></p><p>Depth <strong>61</strong></p><p>Height <strong>61-71</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901062/DO-71-GR_kmjhxt.jpg',
          'name' => 'DO-71 GR',
          'description' => '',
          'detail' => '<p>Width <strong>43</strong></p><p>Depth <strong>52</strong></p><p>Height <strong>89-98</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901062/DO-71-G_uemgvv.jpg',
          'name' => 'DO-71 G',
          'description' => '',
          'detail' => '<p>Width <strong>43</strong></p><p>Depth <strong>52</strong></p><p>Height <strong>74-84</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901061/DO-74-GB_ip9nln.jpg',
          'name' => 'DO-74 GB',
          'description' => '',
          'detail' => '<p>Width <strong>43</strong></p><p>Depth <strong>38</strong></p><p>Height <strong>51</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901064/DO-74-M_wwlmzd.jpg',
          'name' => 'DO-74 M',
          'description' => '',
          'detail' => '<p>Width <strong>43</strong></p><p>Depth <strong>38</strong></p><p>Height <strong>51</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901063/DO-74-GBR_vxe7j7.jpg',
          'name' => 'DO-74 GBR',
          'description' => '',
          'detail' => '<p>Width <strong>61</strong></p><p>Depth <strong>38</strong></p><p>Height <strong>61-71</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901061/DO-74-GRP_qel4xh.jpg',
          'name' => 'DO-74 GRP',
          'description' => '',
          'detail' => '<p>Width <strong>61</strong></p><p>Depth <strong>36</strong></p><p>Height <strong>61-71</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901061/DO-76-S_b9a5z5.jpg',
          'name' => 'DO-76 S',
          'description' => '',
          'detail' => '<p>Width <strong>39</strong></p><p>Depth <strong>39</strong></p><p>Height <strong>89</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901061/DO-76_zwmr77.jpg',
          'name' => 'DO-76',
          'description' => '',
          'detail' => '<p>Width <strong>39</strong></p><p>Depth <strong>39</strong></p><p>Height <strong>73</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901064/DO-77-S-besar_xvd63g.jpg',
          'name' => 'DO-77 S',
          'description' => '',
          'detail' => '<p>Width <strong>39</strong></p><p>Depth <strong>39</strong></p><p>Height <strong>64</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901061/DO-77_xhinbr.jpg',
          'name' => 'DO-77',
          'description' => '',
          'detail' => '<p>Width <strong>39</strong></p><p>Depth <strong>39</strong></p><p>Height <strong>48</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901062/DO-78-R-besar_epspxb.jpg',
          'name' => 'DO-78 R',
          'description' => '',
          'detail' => '<p>Width <strong>39</strong></p><p>Depth <strong>39</strong></p><p>Height <strong>62-74</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901063/DO-78-P_rmt0ut.jpg',
          'name' => 'DO-78 P',
          'description' => '',
          'detail' => '<p>Width <strong>35</strong></p><p>Depth <strong>35</strong></p><p>Height <strong>44</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501901064/DO-78_f4ohod.jpg',
          'name' => 'DO-78',
          'description' => '',
          'detail' => '<p>Width <strong>35</strong></p><p>Depth <strong>35</strong></p><p>Height <strong>44-56</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '10',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817707/Content/IMAGE%20MODELLINE/9-B30ED.jpg',
          'name' => 'CIS',
          'description' => '',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '10',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817707/Content/IMAGE%20MODELLINE/basket_sink.png',
          'name' => 'Basket Sink',
          'description' => '',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '10',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817708/Content/IMAGE%20MODELLINE/rak_tempat_sampah.jpg',
          'name' => 'Rak Tempat Sampah',
          'description' => '',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '10',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817708/Content/IMAGE%20MODELLINE/rak_tempat_sampah.jpg',
          'name' => 'Rak Tempat Sampah',
          'description' => '',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817617/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/BOLSENA_-_KS_3101_Rp_1.825jt.png',
          'name' => 'BOLSENA - KS 3101',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 1.825.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817617/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/BRACCIANO_-_KS_8200_Rp_7.75jt.png',
          'name' => 'BRACCIANO - KS 8200',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 7.750.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817617/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/BRAVO_-_BO_3632_10.25jt.png',
          'name' => 'BRAVO - BO 3632',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 10.250.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817617/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/BUONO_-_MG_3112_Rp_3.635jt.png',
          'name' => 'BUONO - MG 3112',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 3.635.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817617/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/BUONO_-_MV_3002_Rp_4.4jt.png',
          'name' => 'BUONO - MV 3002',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 4.400.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817617/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/CRISTA_-_BE_1325_Rp_2.5jt.png',
          'name' => 'CRISTA - BE 1325',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 2.500.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817618/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/FERRARA_-_CX_6301_Rp_3.55jt.png',
          'name' => 'FERRARA - CX 6301',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 3.550.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817618/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/FORLI_-_CX_9701_L_Rp_3.5jt.png',
          'name' => 'FORLI - CX 9701 L',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 3.500.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817618/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/MAESTRO_-_BH_1725_MC_Rp_3.4jt.png',
          'name' => 'MAESTRO - BH 1725 MC',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 3.400.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817618/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/MAGNE_-_BI_1321_Rp.7.35jt.png',
          'name' => 'MAGNE - BI 1321',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 7.350.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817619/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/MAGNE_-_BI_1721_Rp.9jt.png',
          'name' => 'MAGNE - BI 1721',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 9.000.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817619/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/ORTA_-_KS_2100_Rp_1.175jt.png',
          'name' => 'ORTA - KS 2100',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 1.175.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817619/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/PIAZZA_-_CX_6150_Rp_3.55jt.png',
          'name' => 'PIAZZA - CX 6150',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 3.550.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817619/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/PLANO_-_BH_3930_Rp_6.55jt.png',
          'name' => 'PLANO - BH 3930',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 6.550.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817620/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/PRIMA_-_FC_7643_S_Rp_10jt.png',
          'name' => 'PRIMA - FC 7643 S',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 10.000.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817620/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/PRIMA_-_FC_7943_S_Rp_12.5jt.png',
          'name' => 'PRIMA - FC 7943 S',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 12.500.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817620/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/PRIMA_-_FC_7943_W_Rp_10.75jt.png',
          'name' => 'PRIMA - FC 7943 W',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 10.750.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817621/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/SATINA_-_BE_1320_Rp_2.3jt.png',
          'name' => 'SATINA - BE 1320',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 2.300.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817621/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/VICINO_-_BO_3435_Rp_9.7jt.png',
          'name' => 'VICINO - BO 3435',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 9.700.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817621/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/VICINO_-_BT_3435_12.6jt.png',
          'name' => 'VICINO - BT 3435',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 12.600.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501817621/Content/IMAGE%20COOKING%20-%20MERK%20MODENA/VICINO_-_BV_3435_Rp.13jt.png',
          'name' => 'VICINO - BV 3435',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 13.000.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245306/Wall%20Paper/wallpaper_-_1.jpg',
          'name' => 'Wallpaper 1',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245307/Wall%20Paper/wallpaper_-_2.jpg',
          'name' => 'Wallpaper 2',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245306/Wall%20Paper/wallpaper_-_3.jpg',
          'name' => 'Wallpaper 3',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245305/Wall%20Paper/wallpaper_-_4.jpg',
          'name' => 'Wallpaper 4',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245306/Wall%20Paper/wallpaper_-_5.jpg',
          'name' => 'Wallpaper 5',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245306/Wall%20Paper/wallpaper_-_6.jpg',
          'name' => 'Wallpaper 6',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245307/Wall%20Paper/wallpaper_-_7.jpg',
          'name' => 'Wallpaper 7',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245308/Wall%20Paper/wallpaper_-_8.jpg',
          'name' => 'Wallpaper 8',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245308/Wall%20Paper/wallpaper_-_9.jpg',
          'name' => 'Wallpaper 9',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245308/Wall%20Paper/wallpaper_-_10.jpg',
          'name' => 'Wallpaper 10',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245308/Wall%20Paper/wallpaper_-_11.jpg',
          'name' => 'Wallpaper 11',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245309/Wall%20Paper/wallpaper_-_12.jpg',
          'name' => 'Wallpaper 12',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245309/Wall%20Paper/wallpaper_-_13.jpg',
          'name' => 'Wallpaper 13',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245310/Wall%20Paper/wallpaper_-_14.jpg',
          'name' => 'Wallpaper 14',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245309/Wall%20Paper/wallpaper_-_15.jpg',
          'name' => 'Wallpaper 15',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245310/Wall%20Paper/wallpaper_-_16.jpg',
          'name' => 'Wallpaper 16',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245310/Wall%20Paper/wallpaper_-_17.jpg',
          'name' => 'Wallpaper 17',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245311/Wall%20Paper/wallpaper_-_18.jpg',
          'name' => 'Wallpaper 18',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245310/Wall%20Paper/wallpaper_-_19.jpg',
          'name' => 'Wallpaper 19',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245311/Wall%20Paper/wallpaper_-_20.jpg',
          'name' => 'Wallpaper 20',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245310/Wall%20Paper/wallpaper_-_21.jpg',
          'name' => 'Wallpaper 21',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245311/Wall%20Paper/wallpaper_-_22.jpg',
          'name' => 'Wallpaper 22',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245311/Wall%20Paper/wallpaper_-_23.jpg',
          'name' => 'Wallpaper 23',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245311/Wall%20Paper/wallpaper_-_24.jpg',
          'name' => 'Wallpaper 24',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245306/Wall%20Paper/wallpaper_-_25.jpg',
          'name' => 'Wallpaper 25',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245307/Wall%20Paper/wallpaper_-_26.jpg',
          'name' => 'Wallpaper 26',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245306/Wall%20Paper/wallpaper_-_27.jpg',
          'name' => 'Wallpaper 27',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245307/Wall%20Paper/wallpaper_-_28.jpg',
          'name' => 'Wallpaper 28',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245307/Wall%20Paper/wallpaper_-_29.jpg',
          'name' => 'Wallpaper 29',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245307/Wall%20Paper/wallpaper_-_30.jpg',
          'name' => 'Wallpaper 30',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245308/Wall%20Paper/wallpaper_-_31.jpg',
          'name' => 'Wallpaper 31',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245308/Wall%20Paper/wallpaper_-_32.jpg',
          'name' => 'Wallpaper 32',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245308/Wall%20Paper/wallpaper_-_33.jpg',
          'name' => 'Wallpaper 33',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245309/Wall%20Paper/wallpaper_-_34.jpg',
          'name' => 'Wallpaper 34',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245309/Wall%20Paper/wallpaper_-_35.jpg',
          'name' => 'Wallpaper 35',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502245309/Wall%20Paper/wallpaper_-_36.jpg',
          'name' => 'Wallpaper 36',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();
    }
}
