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
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501726582/service-label_nulbsl.jpg',
          'name' => 'Cartoon Kids Bedroom',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501726582/service-label_nulbsl.jpg',
          'name' => 'Vintage Living Room',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501726582/service-label_nulbsl.jpg',
          'name' => 'Happy Family Room',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'status' => 'no'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501726580/opening_pwrzjo.jpg',
          'name' => 'President Suite Hotel Room',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'status' => 'yes'
        ]);
        $project->save();

        $project = new \App\Project([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501726580/opening_pwrzjo.jpg',
          'name' => 'Government Meeting Room',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'status' => 'yes'
        ]);
        $project->save();
    }
}
