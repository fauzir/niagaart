<?php

use Illuminate\Database\Seeder;

class ProjectItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectitem = new \App\ProjectItem([
          'project_id' => '1',
          'image' => 'https://s-media-cache-ak0.pinimg.com/736x/94/ab/7d/94ab7dcedbca1bbbc19b4b9b2c6a0562--pier--imports-reserved-seating.jpg',
          'name' => 'Small Blue Chair',
          'price' => '150'
        ]);
        $projectitem->save();

        $projectitem = new \App\ProjectItem([
          'project_id' => '1',
          'image' => 'https://secure.img2-fg.wfcdn.com/lf/49/hash/36986/37899777/1/Charlton-Home%C2%AE-Reynesford-Velvet-Side-Chair.jpg',
          'name' => 'Single Chair',
          'price' => '75'
        ]);
        $projectitem->save();

        $projectitem = new \App\ProjectItem([
          'project_id' => '2',
          'image' => 'https://secure.img1-fg.wfcdn.com/im/34938a64/resize-w242%5Ecompr-r85/3655/36553269/default_name.jpg',
          'name' => 'Working Desk',
          'price' => '450'
        ]);
        $projectitem->save();
    }
}
