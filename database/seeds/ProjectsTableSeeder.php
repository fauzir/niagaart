<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502180792/project-livingroom_mf9bv4.jpg',
          'name' => 'Living Room',
          'description' => '<p>Konsep desain <strong></strong></p>
          <p>Warna <strong>Desain Akar Pohon</strong></p>
          <p>Ukuran <strong>Natural - Hijau, Putih dan Serat Kayu</strong></p>
          <p>Sofa Minimalis + Laci <strong>2.00 meter</strong></p>
          <p>Sofa <strong>2.00 meter</strong></p>
          <p>Back Drop <strong>1.80 meter</strong></p>
          <p>Partisi Akar <strong>3.00 meter</strong></p>
          <p>Rak Gantung TV <strong>2.40 meter</strong></p>
          <p>Ambalan 3pcs <strong>0.20x0.20 meter</strong></p>
          <p>Bahan Baku <strong>Multiplex</strong></p>
          <p>Finishing Dalam <strong>supercone putih</strong></p>
          <p>Finishing Luar <strong>HPL (kode warna: 001aa 008aa & 217aa)</strong></p>
          <p>Aksesoris <strong>Kaca Cermin & Lampu LED</strong></p>',
          'status' => 'yes'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502180792/project-jakarta_ukgydz.jpg',
          'name' => 'Kitchen Set Minimalis Jakarta',
          'description' => '<p><strong>Ukuran</strong></p>
          <p>Kabinet Atas <strong>1.20x0.40x1.00 meter</strong></p>
          <p>Kabinet Kitchen Bawah <strong>(2.40+1.20)x0.60x0.80 meter</strong></p>
          <p>Lemari Kulkas <strong>2.00x2.00x0.60 meter</strong></p>
          <p>Mini Bar <strong>2.00 x 0.80 meter</strong></p>
          <p><strong>Bahan Baku</strong></p>
          <p>Multiplex</p>
          <p>Finishing dalam supercone putih</p>
          <p>Finishing luar HPL (kode warna: 001aa, 217aa)</p>
          <p><strong>Aksesoris</strong></p>
          <p>Kompor+oven</p>
          <p>Filtrex</p>
          <p>Sing/bak cuci piring</p>
          <p>Rak piring</p>
          <p>Lampu LED</p>',
          'status' => 'yes'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072685/Bed_hcl14f.jpg',
          'name' => 'Kids Bed',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072694/Desk_1_rl5x5r.jpg',
          'name' => 'Kids Desk 1',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072689/Desk_2_izpxzy.jpg',
          'name' => 'Kid Desk 2',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072691/Bed_1_zi0g8m.jpg',
          'name' => 'Bed 1',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072679/Bed_2_rytrgx.jpg',
          'name' => 'Bed 2',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072671/Bed_3_ogw4wl.jpg',
          'name' => 'Bed 3',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072675/Bed_4_zdvp2a.jpg',
          'name' => 'Bed 4',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072681/Bed_5_ncnhzw.jpg',
          'name' => 'Bed 5',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072675/Bed_6_bngh0a.jpg',
          'name' => 'Bed 6',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072678/Bed_7_nzhzfg.jpg',
          'name' => 'Bed 7',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072682/TV_1_oowjy7.jpg',
          'name' => 'TV 1',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072680/TV_2_enz2yu.jpg',
          'name' => 'TV 2',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072674/Wardrobe_1_bhqeo5.jpg',
          'name' => 'Wardrobe 1',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072677/Wardrobe_2_xqfxpu.jpg',
          'name' => 'Wardrobe 2',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072689/Cream_Kitchen_Set_ohmb4m.jpg',
          'name' => 'Cream Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072691/Large_Kitchen_Set_qeracp.jpg',
          'name' => 'Large Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072690/Modern_Kitchen_Set_2_gxc6dw.jpg',
          'name' => 'Modern Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072702/Red_Kitchen_Set_u9sars.jpg',
          'name' => 'Red Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072696/Simple_Kitchen_Set_2_sbkz79.jpg',
          'name' => 'Simple Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072694/Small_Kitchen_Set_g7l55x.jpg',
          'name' => 'Small Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072698/Wood_Kitchen_Set_vc3hl2.jpg',
          'name' => 'Wood Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072709/Black_Style_Kitchen_Table_with_Chair_aj4lbv.jpg',
          'name' => 'Black Style Kitchen Table with Chair',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072708/Kitchen_Table_hveb99.jpg',
          'name' => 'Kitchen Table',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072715/Kitchen_Table_with_Red_Chair_h8jdkh.jpg',
          'name' => 'Kitchen Table with Red Chair',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072707/Modern_Kitchen_Set_monlwy.jpg',
          'name' => 'Modern Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072717/Nice_Kitchen_Set_gzjfdk.jpg',
          'name' => 'Nice Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072702/Nice_Small_Kitchen_Set_qqf9os.jpg',
          'name' => 'Nice Small Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072701/Orange_Kitchen_Set_2_biak9u.jpg',
          'name' => 'Orange Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072702/Silver_Kitchen_Set_v1syn9.jpg',
          'name' => 'Silver Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072694/Simple_but_Elegant_Kitchen_Set_aouuda.jpg',
          'name' => 'Simple but Elegant Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072716/Small_Red_Kitchen_Set_vjz1q6.jpg',
          'name' => 'Small Red Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072708/Brown_Cabinet_binueq.jpg',
          'name' => 'Brown Cabinet',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072724/Brown_Stair_sfb3na.jpg',
          'name' => 'Brown Stair',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072711/Corner_Sofa_tr6mv4.jpg',
          'name' => 'Corner Sofa',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072716/Decorative_Stair_emyp0t.jpg',
          'name' => 'Decorative Stair',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072716/Family_Dining_Table_zbefbf.jpg',
          'name' => 'Family Dining Table',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072713/Family_Sofa_nzynzl.jpg',
          'name' => 'Family Sofa',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072724/Great_Kitchen_Set_enrhcj.jpg',
          'name' => 'Great Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072722/Grey_Small_Kitchen_Set_oe3wcr.jpg',
          'name' => 'Grey Small Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072711/Ordinary_Kitchen_Set_wvtdqb.jpg',
          'name' => 'Ordinary Kitchen Set',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072719/Red_Stair_vwykwp.jpg',
          'name' => 'Red Stair',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072718/White_Simple_Shelf_am80gr.jpg',
          'name' => 'White Simple Shelf',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072725/Wood_Shelf_ceevt6.jpg',
          'name' => 'Wood Shelf',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072720/Wood_Style_Dining_Table_jgsyre.jpg',
          'name' => 'Wood Style Dining Table',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1502072718/Working_Desk_utiwnl.jpg',
          'name' => 'Working Desk',
          'description' => '',
          'status' => 'no'
        ]);
        $project->save();
    }
}
