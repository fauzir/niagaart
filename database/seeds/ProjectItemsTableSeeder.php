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
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501726582/service-label_nulbsl.jpg',
          'name' => 'Small Chair',
          'price' => '25'
        ]);
        $projectitem->save();

        $projectitem = new \App\ProjectItem([
          'project_id' => '1',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501726582/service-label_nulbsl.jpg',
          'name' => 'Superhero Table',
          'price' => '125'
        ]);
        $projectitem->save();

        $projectitem = new \App\ProjectItem([
          'project_id' => '2',
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501726582/service-label_nulbsl.jpg',
          'name' => 'Working Desk',
          'price' => '450'
        ]);
        $projectitem->save();
    }
}
