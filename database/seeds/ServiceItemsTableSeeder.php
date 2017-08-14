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
          'image' => 'img/service-item/home-living/backdrop/header.jpg',
          'name' => 'Backdrop, Partisi, Buffet',
          'description' => '',
          'detail' => '<p> <strong></strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '1',
          'image' => 'img/service-item/home-living/bedroom-set/header.jpg',
          'name' => 'Bed Room Set',
          'description' => '',
          'detail' => '<p> <strong></strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '1',
          'image' => 'img/service-item/home-living/kitchen-set/header.jpg',
          'name' => 'Kitchen Set - Minibar',
          'description' => '',
          'detail' => '<p> <strong></strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '5',
          'image' => 'img/service-item/flooring/taco-wood-pattern/header.png',
          'name' => 'Taco: Nature Amplified (Wood Patterns)',
          'description' => 'Heavy duty luxury vinyl planks from TACO Flooring, bringing confort eith four excellent benefits: Water-proof,Termite-proof, Noise Reduction and Easy Maintainance.',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Lapisan</p></td><td><p><strong>Wear Layer, UV Protection, PVC Decor Layer, Bottom Layer</strong></p></td></tr><tr><td><p>Thickness</p></td><td><p><strong>3 mm</strong></p></td></tr><tr><td><p>Wearlayer</p></td><td><p><strong>0.2 mm</strong></p></td></tr><tr><td><p>Dimention</p></td><td><p><strong>152.4 mm x 914.4 mm</strong></p></td></tr><tr><td><p>1 Box</p></td><td><p><strong>3.34 m&sup2; (24 Planks)</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '5',
          'image' => 'img/service-item/flooring/taco-stone-pattern/header.png',
          'name' => 'Taco: Nature Amplified (Stone Patterns)',
          'description' => 'Heavy duty luxury vinyl planks from TACO Flooring, bringing confort eith four excellent benefits: Water-proof,Termite-proof, Noise Reduction and Easy Maintainance.',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Lapisan</p></td><td><p><strong>Wear Layer, UV Protection, PVC Decor Layer, Bottom Layer</strong></p></td></tr><tr><td><p>Thickness</p></td><td><p><strong>3 mm</strong></p></td></tr><tr><td><p>Wearlayer</p></td><td><p><strong>0.2 mm</strong></p></td></tr><tr><td><p>Dimention</p></td><td><p><strong>304.8 mm x 609.6 mm</strong></p></td></tr><tr><td><p>1 Box</p></td><td><p><strong>3.34 m&sup2; (18 Planks)</strong></p></td></tr><tr><td><p>Harga</p></td><td><p><strong>Rp 525.000,-/ 3m&sup2;</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '5',
          'image' => 'img/service-item/flooring/jib-vinyl/header.jpg',
          'name' => 'JB-Vinyl: Natural, Elegance, Beauty, Style',
          'description' => 'Can prevent the cold from the floor, easy to clean and durable, motif image dous not fade, can be used in all the rooms (dloor/wall),there are variety of motifs and colors, can adjust the room temperature hot and cold.',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Lapisan</p></td><td><p><strong>Wear Layer, Pattern Layer, Substrate Layer, Backing Layer.</strong></p></td></tr><tr><td><p>Dimention change of heating</p></td><td><p><strong>Unit:mm; Measurement: MD &ndash; 0.18 &amp; CD + 0.10</strong></p></td></tr><tr><td><p>Leri of water absorption</p></td><td><p><strong>Measurement: MD &ndash; 0.10 &amp; CD + 0.07</strong></p></td></tr><tr><td><p>Ratio of swelling</p></td><td><p><strong>Unit: 20&ordm;C; Measurement: 0.47 x 10&ordm;C</strong></p></td></tr><tr><td><p>Indentation</p></td><td><p><strong>Unit: 40&ordm;C; Measurement: 0.12 mm &amp; 0.25 mm</strong></p></td></tr><tr><td><p>Lost of heating</p></td><td><p><strong>Measurement: bellow 0.10</strong></p></td></tr><tr><td><p>Light resistance</p></td><td><p><strong>Measurement: 3-4 Class</strong></p></td></tr><tr><td><p>Ressilience</p></td><td><p><strong>Measurement: Good</strong></p></td></tr><tr><td><p>Critical Radiant Fluse</p></td><td><p><strong>Measurement: 0.45 Watts/cm&sup3;</strong></p></td></tr><tr><td><p>Size</p></td><td><p><strong>186 x 920 x 3 mm</strong></p></td></tr><tr><td><p>Sheet</p></td><td><p><strong>18 Sheet</strong></p></td></tr><tr><td><p>Harga</p></td><td><p><strong>Rp 388.000,-/ 3m&sup2;</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '5',
          'image' => 'img/service-item/flooring/ozora/header.jpg',
          'name' => 'Ozora: Natural Vinyl Floor and Wall ',
          'description' => 'Prevent cold from the loor, durable and easy to clean, fade resistance for motif image,luxury at floor and wall, variety motifs and colors, can adjust the room temperature hot and cold.',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Lapisan</p></td><td><p><strong>Wear Layer, UV Protection, PVC Decor Layer, Bottom Layer</strong></p></td></tr><tr><td><p>Dimention change of heating</p></td><td><p><strong>Unit:mm; Measurement: MD &ndash; 0.18 &amp; CD + 0.10</strong></p></td></tr><tr><td><p>Leri of water absorption</p></td><td><p><strong>Measurement: MD &ndash; 0.10 &amp; CD + 0.07</strong></p></td></tr><tr><td><p>Ratio of swelling</p></td><td><p><strong>Unit: 20&ordm;C; Measurement: 0.47 x 10&ordm;C</strong></p></td></tr><tr><td><p>Indentation</p></td><td><p><strong>Unit: 40&ordm;C; Measurement: 0.12 mm &amp; 0.25 mm</strong></p></td></tr><tr><td><p>Lost of heating</p></td><td><p><strong>Measurement: bellow 0.10</strong></p></td></tr><tr><td><p>Light resistance</p></td><td><p><strong>Measurement: 3-4 Class</strong></p></td></tr><tr><td><p>Ressilience</p></td><td><p><strong>Measurement: Good</strong></p></td></tr><tr><td><p>Critical Radiant Fluse</p></td><td><p><strong>Measurement: 0.45 Watts/cm&sup3;</strong></p></td></tr><tr><td><p>1 Box</p></td><td><p><strong>3.10 m&sup2; (18 Planks)</strong></p></td></tr><tr><td><p>Harga</p></td><td><p><strong>Rp 388.000,-/ 3m&sup2;</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'img/service-item/blind/interior-roller-header.png',
          'name' => 'Interior Blinds',
          'description' => 'Type of windows covering with many different kinds of window blings which use a variety of control systems for indoor space.',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'img/service-item/blind/interior-shadow-header.png',
          'name' => 'Exterior Blinds',
          'description' => 'Ideal for reducing the temperature within your home. Made from unique woven all weather fabric.',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'img/service-item/blind/interior-roman-shades-header.png',
          'name' => 'Insect Screens',
          'description' => 'Performs well in the area of keeping out insects and maximizing private spacecs',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '6',
          'image' => 'img/service-item/blind/interior-slimeline-header.png',
          'name' => 'Partitions',
          'description' => 'High class kind of various products like Lipat Door, Lipat Windows, Shower Screen, and Floding Door',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '8',
          'image' => 'img/service-item/wall-clading/3d-panel-header.jpg',
          'name' => 'Decorative 3D Interior Panels',
          'description' => 'Pulp of sugarcane Bagassse or of other fibrous cellulostic Material;Moulded or pressed articles of sugarcane Bagasse pulp or of other fibrous cellulosic Material other pulp, cellulose wadding and webs of celulose fibres, cut to size or shape; other articles of sugarcane Bagasse ulp, cellulse fibres.',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Size</p></td><td><p><strong>500x500 mm or 625x800mm with &plusmn;0.5 mm. Tolerance sideways per 500 mm and &plusmn;0.7 mm diagonal</strong></p></td></tr><tr><td><p>Weight</p></td><td><p><strong>+275 grams</strong></p></td></tr><tr><td><p>Thickness</p></td><td><p><strong>approx 1.5mm (&plusmn;tolerance of 0.05mm)</strong></p></td></tr><tr><td><p>Height</p></td><td><p><strong>thickness of panel +15mm (total approx15.5mm)</strong></p></td></tr><tr><td><p>Material</p></td><td><p><strong>white bagasse (natural bleanched sugarcene pulp)</strong></p></td></tr><tr><td><p>Packing</p></td><td><p><strong>12 panel covers 3m&sup2; (for 500x500 mm) and 6 panels covers 3m&sup2; (for 625x800mm)</strong></p></td></tr><tr><td><p>Fire Resistance</p></td><td><p><strong>Classic, but we advice to use class a fire proof coating/fire retardant paint like dc333 after installing for best an safest result!</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '4',
          'image' => 'img/service-item/shop-office/header.jpg',
          'name' => 'Shop and Office',
          'description' => '',
          'detail' => '<p> <strong></strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/nc.jpg',
          'name' => 'Chitose: NC',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>395 x 510 x 1010</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>560 ~ 650</strong><br/></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>5</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>2</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>PVC Vinyl</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Hammertone,&nbsp;Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Black</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/na.jpg',
          'name' => 'Chitose: NA',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>395 x 510 x 860</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>400 ~ 490</strong><br/></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>6.5</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>2</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>PVC Vinyl</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Hammertone,&nbsp;Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Black</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/nbk.jpg',
          'name' => 'Chitose: NBK',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>395 x 510 x 860</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>400 ~ 490</strong><br/></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>9.1</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>2</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>PVC Vinyl</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Hammertone,&nbsp;Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Black</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/jasmine-c1111.jpg',
          'name' => 'Jasmine C-1111',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>487 x478 x 747</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>445</strong><br/></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>4.2</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>Fabric,PVC Vinyl,Oscar</strong></p></td></tr><tr><td><p>Back Material</p></td><td><p><strong>Plastic ( White & Grey )</strong></p></td></tr><tr><td><p>Upholstery Color</p></td><td><p><strong>Orange, Yellow, Green, Blue, Red, Black, Light Green</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Chrome Plating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Chrome</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/flora-h.jpg',
          'name' => 'Flora H',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>495 x 415 x 675</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>445</strong><br/></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>6.5</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>2</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>PVC Vinyl</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Hammertone, Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Black</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/flora-san.jpg',
          'name' => 'Flora SAN',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>515 x 515 x 445</strong></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>2.5</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>6</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>PVC Vinyl</strong></p></td></tr><tr><td><p>Upholstery Color</p></td><td><p><strong>Yellow, Red, Green, Blue, Cream</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Chrome Plating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Yellow, Red, Green, Chrome, Blue, Cream</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/jasmine-c2111.jpg',
          'name' => 'Jasmine C-2111',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>448 x 465 x 722</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>420</strong></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>3.7</strong></p></td></tr><tr><td><p>Seat Material</p></td><td><p><strong>Fabric, PVC Vinyl, Oscar</strong></p></td></tr><tr><td><p>Back Material</p></td><td><p><strong>Plastic ( White & Grey )</strong></p></td></tr><tr><td><p>Seat & Back Colours</p></td><td><p><strong>Orange, Yellow, Green, Blue, Red, Black, Light Green,Blue</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Chrome Plating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Chrome</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/hanako-s.jpg',
          'name' => 'Hanako S',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>455 x 555x 890</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>460</strong></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>6.8</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>4</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>Fabric</strong></p></td></tr><tr><td><p>Upholstery Colours</p></td><td><p><strong>Blue, Red, Green, Black</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Silver, Gold, Cream</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/hanako-o.jpg',
          'name' => 'Hanako O',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>455 x 555x 890</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>440</strong></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>6.8</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>4</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>Fabric</strong></p></td></tr><tr><td><p>Upholstery Colours</p></td><td><p><strong>Blue, Red, Green, Black</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Silver, Gold, Cream</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/jiro-s.jpg',
          'name' => 'Jiro S',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>455 x 555x 890</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>460</strong></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>6.5</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>4</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>Fabric</strong></p></td></tr><tr><td><p>Upholstery Colours</p></td><td><p><strong>Blue, Red, Green, Black</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Gold</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/jiro-o.jpg',
          'name' => 'Jiro O',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>455 x 554 890</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>440</strong></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>6.8</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>4</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>Fabric</strong></p></td></tr><tr><td><p>Upholstery Colours</p></td><td><p><strong>Blue, Red, Green, Black</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Silver, Gold, Cream</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/taro-s.jpg',
          'name' => 'Taro S',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>455 x 563 890</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>440</strong></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>6.5</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>4</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>Fabric</strong></p></td></tr><tr><td><p>Upholstery Colours</p></td><td><p><strong>Blue, Red, Green, Black</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Gold</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/taro-o.jpg',
          'name' => 'Taro O',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>455 x 554 890</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>440</strong></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>6.5</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>4</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>Fabric</strong></p></td></tr><tr><td><p>Upholstery Colours</p></td><td><p><strong>Blue, Red, Green, Black</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Gold</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/caesar-n-p.jpg',
          'name' => 'Caesar N / P',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>410 x 505 x 875</strong></p></td></tr><tr><td><p>Seat Height (mm)</p></td><td><p><strong>476</strong></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>5.3</strong></p></td></tr><tr><td><p>Contain per Carton</p></td><td><p><strong>4</strong></p></td></tr><tr><td><p>Upholstery Material</p></td><td><p><strong>Fabric & PVC</strong></p></td></tr><tr><td><p>Upholstery Colours</p></td><td><p><strong>Red, Blue, Grey, Green, Black</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Chrome Plating (N), Powder Coating (P)</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Black, Silver</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => '',
          'name' => 'Prince',
          'description' => '',
          'detail' => '<table align="left" border="0" cellpadding="1" cellspacing="1" style="width:100%"><tbody><tr><td><p>Dimension W x D x H (mm)</p></td><td><p><strong>440 x 573 x 900</strong></p></td></tr><tr><td><p>Weight Per Piece (Kg)</p></td><td><p><strong>4.65</strong></p></td></tr><tr><td><p>Frame Finisihing</p></td><td><p><strong>Chrome Plating, Powder Coating</strong></p></td></tr><tr><td><p>Frame Color</p></td><td><p><strong>Chrome, Gold, Silver</strong></p></td></tr><tr><td><p>Colour Options & Upholstery Material</p></td><td><p><strong>Fabric</strong></p></td></tr></tbody></table>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/sakata-n.jpg',
          'name' => 'Sakata N',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>435 x 512 x 895</strong></p><p>Seat Height (mm) <strong>450</strong></p><p>Weight Per Piece (Kg) <strong>4.8</strong></p><p>Contain per Carton <strong>4</strong></p><p>Upholstery Material <strong>Fabric & PVC</strong></p><p>Upholstery Colours <strong>Red, Brown, Cream, Blue, Grey, L6Green, Lv6 Green , L1 Blue, Lv1 Blue, Black</strong></p><p>Frame Finisihing <strong>Chrome Plating</strong></p><p>Frame Color <strong>Chrome</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/lotus.jpg',
          'name' => 'Lotus',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>500 x 510 x 760</strong></p><p>Seat Height (mm) <strong>451</strong></p><p>Weight Per Piece (Kg) <strong>3.5</strong></p><p>Upholstery Material <strong>Fabric (Seat), Plastic (Back)</strong></p><p>Upholstery Colours <strong>Blue, Grey, Green, Black, Red, Brown, Cream</strong></p><p>Frame Finisihing <strong>Chrome Plating</strong></p><p>Frame Color <strong>Chrome</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/olive-a.jpg',
          'name' => 'Olive A',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>515 x 585 x 795</strong></p><p>Weight Per Piece (Kg) <strong>4.2</strong></p><p>Upholstery Material <strong>Plastic</strong></p><p>Upholstery Colours <strong>White, Beige,  Grey, Dark Grey, Red, Light Blue, Light Green</strong></p><p>Frame Finisihing <strong>Powder Coating</strong></p><p>Frame Color <strong>Silver</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/glory.jpg',
          'name' => 'Glory',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>437 x 436 x 807</strong></p><p>Weight Per Piece (Kg) <strong>3</strong></p><p>Seat & Back material <strong>Plastic</strong></p><p>Seat & Back Colours <strong>Dark Grey, Blue, White, Orange</strong></p><p>Frame Finisihing <strong>Zinc Chrome Plating,& Powder Coating</strong></p><p>Frame Color <strong>Chrome, White & Light Silver</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/sam.jpg',
          'name' => 'SAM',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>453 x 456 x 770</strong></p><p>Seat Height (mm) <strong>448</strong></p><p>Weight Per Piece (Kg) <strong>4.7</strong></p><p>Seat & Back material <strong>Plate</strong></p><p>Seat & Back Colours <strong>Grey, Silver, White, Orange</strong></p><p>Frame Finisihing <strong>Powder Coating</strong></p><p>Frame Color <strong>Grey, Silver, White, Orange</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/chitose/ribbon-p-z.jpg',
          'name' => 'Ribbon P / Z',
          'description' => '',
          'detail' => '<p>Dimension W x D x H (mm) <strong>435 x 435 x 460</strong></p><p>Weight Per Piece (Kg) <strong>1.6</strong></p><p>Seat Colours <strong>Yellow, Grey, Black</strong></p><p>Frame Finisihing <strong>Powder Coating (Ribbon-P), Zinc Chrome Plating (Ribbon-Z)</strong></p><p>Frame Color <strong>Yellow, Chrome</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/berry.jpg',
          'name' => 'BERRY',
          'description' => '',
          'detail' => '<p>Width <strong>31</strong></p><p>Depth <strong>31</strong></p><p>Height <strong>32-40</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/cafto.jpg',
          'name' => 'CAFTO',
          'description' => '',
          'detail' => '<p>Width <strong>38</strong></p><p>Depth <strong>38</strong></p><p>Height <strong>60-82</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/candy-1.jpg',
          'name' => 'CANDY 1',
          'description' => '',
          'detail' => '<p>Width <strong>56</strong></p><p>Depth <strong>53</strong></p><p>Height <strong>87-97</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/candy-2.jpg',
          'name' => 'CANDY 2',
          'description' => '',
          'detail' => '<p>Width <strong>56</strong></p><p>Depth <strong>53</strong></p><p>Height <strong>96-108</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/candy-3.jpg',
          'name' => 'CANDY 3',
          'description' => '',
          'detail' => '<p>Width <strong>67</strong></p><p>Depth <strong>65</strong></p><p>Height <strong>89-101</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/cerry.jpg',
          'name' => 'CERRY',
          'description' => '',
          'detail' => '<p>Width <strong>45</strong></p><p>Depth <strong>43</strong></p><p>Height <strong>67-90</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-67-GR.jpg',
          'name' => 'DO-67 GR',
          'description' => '',
          'detail' => '<p>Width <strong>61</strong></p><p>Depth <strong>38</strong></p><p>Height <strong>61-71</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-67-M.jpg',
          'name' => 'DO-67 M',
          'description' => '',
          'detail' => '<p>Width <strong>43</strong></p><p>Depth <strong>38</strong></p><p>Height <strong>51</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-68-PUM.jpg',
          'name' => 'DO-68 PUM',
          'description' => '',
          'detail' => '<p>Width <strong>37</strong></p><p>Depth <strong>36</strong></p><p>Height <strong>43</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-68-PUGR.jpg',
          'name' => 'DO-68 PUGR',
          'description' => '',
          'detail' => '<p>Width <strong>43</strong></p><p>Depth <strong>36</strong></p><p>Height <strong>54</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-68-PUGBP.jpg',
          'name' => 'DO-68 PUGBP',
          'description' => '',
          'detail' => '<p>Width <strong>36</strong></p><p>Depth <strong>61</strong></p><p>Height <strong>61-71</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-71-GR.jpg',
          'name' => 'DO-71 GR',
          'description' => '',
          'detail' => '<p>Width <strong>43</strong></p><p>Depth <strong>52</strong></p><p>Height <strong>89-98</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-71-G.jpg',
          'name' => 'DO-71 G',
          'description' => '',
          'detail' => '<p>Width <strong>43</strong></p><p>Depth <strong>52</strong></p><p>Height <strong>74-84</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-74-GB.jpg',
          'name' => 'DO-74 GB',
          'description' => '',
          'detail' => '<p>Width <strong>43</strong></p><p>Depth <strong>38</strong></p><p>Height <strong>51</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-74-M.jpg',
          'name' => 'DO-74 M',
          'description' => '',
          'detail' => '<p>Width <strong>43</strong></p><p>Depth <strong>38</strong></p><p>Height <strong>51</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-74-GBR.jpg',
          'name' => 'DO-74 GBR',
          'description' => '',
          'detail' => '<p>Width <strong>61</strong></p><p>Depth <strong>38</strong></p><p>Height <strong>61-71</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-74-GRP.jpg',
          'name' => 'DO-74 GRP',
          'description' => '',
          'detail' => '<p>Width <strong>61</strong></p><p>Depth <strong>36</strong></p><p>Height <strong>61-71</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-76-S.jpg',
          'name' => 'DO-76 S',
          'description' => '',
          'detail' => '<p>Width <strong>39</strong></p><p>Depth <strong>39</strong></p><p>Height <strong>89</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-76.jpg',
          'name' => 'DO-76',
          'description' => '',
          'detail' => '<p>Width <strong>39</strong></p><p>Depth <strong>39</strong></p><p>Height <strong>73</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-77-S-besar.jpg',
          'name' => 'DO-77 S',
          'description' => '',
          'detail' => '<p>Width <strong>39</strong></p><p>Depth <strong>39</strong></p><p>Height <strong>64</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-77.jpg',
          'name' => 'DO-77',
          'description' => '',
          'detail' => '<p>Width <strong>39</strong></p><p>Depth <strong>39</strong></p><p>Height <strong>48</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-78-R-besar.jpg',
          'name' => 'DO-78 R',
          'description' => '',
          'detail' => '<p>Width <strong>39</strong></p><p>Depth <strong>39</strong></p><p>Height <strong>62-74</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-78-P.jpg',
          'name' => 'DO-78 P',
          'description' => '',
          'detail' => '<p>Width <strong>35</strong></p><p>Depth <strong>35</strong></p><p>Height <strong>44</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '9',
          'image' => 'img/service-item/chair/donati/DO-78.jpg',
          'name' => 'DO-78',
          'description' => '',
          'detail' => '<p>Width <strong>35</strong></p><p>Depth <strong>35</strong></p><p>Height <strong>44-56</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '10',
          'image' => 'img/service-item/rak-modelline/cis-header.jpg',
          'name' => 'CIS',
          'description' => '',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '10',
          'image' => 'img/service-item/rak-modelline/basket-sink.png',
          'name' => 'Basket Sink',
          'description' => '',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '10',
          'image' => 'img/service-item/rak-modelline/rak-tempat-sampah.jpg',
          'name' => 'Rak Tempat Sampah',
          'description' => '',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/bolsena-ks-3101.png',
          'name' => 'BOLSENA - KS 3101',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 1.825.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/bracciano-ks-8200.png',
          'name' => 'BRACCIANO - KS 8200',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 7.750.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/bravo-bo-3632.png',
          'name' => 'BRAVO - BO 3632',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 10.250.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/buono-mg-3112.png',
          'name' => 'BUONO - MG 3112',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 3.635.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/buono-mv-3002.png',
          'name' => 'BUONO - MV 3002',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 4.400.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/crista-be-1325.png',
          'name' => 'CRISTA - BE 1325',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 2.500.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/ferrara-cx-6301.png',
          'name' => 'FERRARA - CX 6301',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 3.550.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/forli-cx-9701-l.png',
          'name' => 'FORLI - CX 9701 L',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 3.500.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/maestro-bh-1725-mc.png',
          'name' => 'MAESTRO - BH 1725 MC',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 3.400.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/magne-bi-1321.png',
          'name' => 'MAGNE - BI 1321',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 7.350.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/magne-bi-1721.png',
          'name' => 'MAGNE - BI 1721',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 9.000.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/orta-ks-2100.png',
          'name' => 'ORTA - KS 2100',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 1.175.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/piazza-cx-6150.png',
          'name' => 'PIAZZA - CX 6150',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 3.550.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/plano-bh-3930.png',
          'name' => 'PLANO - BH 3930',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 6.550.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/prima-fc-7643-s.png',
          'name' => 'PRIMA - FC 7643 S',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 10.000.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/prima-fc-7943-s.png',
          'name' => 'PRIMA - FC 7943 S',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 12.500.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/prima-fc-7943-w.png',
          'name' => 'PRIMA - FC 7943 W',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 10.750.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/satina-be-1320.png',
          'name' => 'SATINA - BE 1320',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 2.300.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/vicino-bo-3435.png',
          'name' => 'VICINO - BO 3435',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 9.700.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/vicino-bt-3435.png',
          'name' => 'VICINO - BT 3435',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 12.600.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '11',
          'image' => 'img/service-item/cooking-modena/vicino-bv-3435.png',
          'name' => 'VICINO - BV 3435',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 13.000.000</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-1.jpg',
          'name' => 'Wallpaper 1',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-2.jpg',
          'name' => 'Wallpaper 2',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-3.jpg',
          'name' => 'Wallpaper 3',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-4.jpg',
          'name' => 'Wallpaper 4',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-5.jpg',
          'name' => 'Wallpaper 5',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-6.jpg',
          'name' => 'Wallpaper 6',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-7.jpg',
          'name' => 'Wallpaper 7',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-8.jpg',
          'name' => 'Wallpaper 8',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-9.jpg',
          'name' => 'Wallpaper 9',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-10.jpg',
          'name' => 'Wallpaper 10',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-11.jpg',
          'name' => 'Wallpaper 11',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-12.jpg',
          'name' => 'Wallpaper 12',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-13.jpg',
          'name' => 'Wallpaper 13',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-14.jpg',
          'name' => 'Wallpaper 14',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-15.jpg',
          'name' => 'Wallpaper 15',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-16.jpg',
          'name' => 'Wallpaper 16',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-17.jpg',
          'name' => 'Wallpaper 17',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-18.jpg',
          'name' => 'Wallpaper 18',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-19.jpg',
          'name' => 'Wallpaper 19',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-20.jpg',
          'name' => 'Wallpaper 20',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-21.jpg',
          'name' => 'Wallpaper 21',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-22.jpg',
          'name' => 'Wallpaper 22',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-23.jpg',
          'name' => 'Wallpaper 23',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-24.jpg',
          'name' => 'Wallpaper 24',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-25.jpg',
          'name' => 'Wallpaper 25',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-26.jpg',
          'name' => 'Wallpaper 26',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-27.jpg',
          'name' => 'Wallpaper 27',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-28.jpg',
          'name' => 'Wallpaper 28',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-29.jpg',
          'name' => 'Wallpaper 29',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-30.jpg',
          'name' => 'Wallpaper 30',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-31.jpg',
          'name' => 'Wallpaper 31',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-32.jpg',
          'name' => 'Wallpaper 32',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-33.jpg',
          'name' => 'Wallpaper 33',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-34.jpg',
          'name' => 'Wallpaper 34',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-35.jpg',
          'name' => 'Wallpaper 35',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '7',
          'image' => 'img/service-item/wall-paper/wallpaper-36.jpg',
          'name' => 'Wallpaper 36',
          'description' => '',
          'detail' => '<p>Price <strong>Rp. 275.000/m</strong></p>'
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '12',
          'image' => 'img/service-item/cooking-domo/tndc-3601-l.jpg',
          'name' => 'tnDC 3601 L',
          'description' => '',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '12',
          'image' => 'img/service-item/cooking-domo/tndc-3601-v.jpg',
          'name' => 'tnDC 3601 V',
          'description' => '',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '12',
          'image' => 'img/service-item/cooking-domo/tndc-3902-l.jpg',
          'name' => 'tnDC 3902 L',
          'description' => '',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '12',
          'image' => 'img/service-item/cooking-domo/tndg-9516.jpg',
          'name' => 'tnDG 9516',
          'description' => '',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '12',
          'image' => 'img/service-item/cooking-domo/tndh-3201-s.jpg',
          'name' => 'tnDH 3201 S',
          'description' => '',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '12',
          'image' => 'img/service-item/cooking-domo/tndh-7201-l.jpg',
          'name' => 'tnDH 7201 L',
          'description' => '',
          'detail' => ''
        ]);
        $serviceitem->save();

        $serviceitem = new \App\ServiceItem([
          'service_id' => '12',
          'image' => 'img/service-item/cooking-domo/tndh-9301-l.jpg',
          'name' => 'tnDH 9301 L',
          'description' => '',
          'detail' => ''
        ]);
        $serviceitem->save();
    }
}
