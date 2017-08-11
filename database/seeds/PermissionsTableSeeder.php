<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new \App\Permission([
          'name' => 'open-pages',
          'label' => 'Open Pages'
        ]);
        $permission->save();

        $permission = new \App\Permission([
          'name' => 'open-services',
          'label' => 'Open Services'
        ]);
        $permission->save();

        $permission = new \App\Permission([
          'name' => 'open-product',
          'label' => 'Open Product'
        ]);
        $permission->save();

        $permission = new \App\Permission([
          'name' => 'open-projects',
          'label' => 'Open Projects'
        ]);
        $permission->save();

        $permission = new \App\Permission([
          'name' => 'open-project-items',
          'label' => 'Open Project Items'
        ]);
        $permission->save();

        $permission = new \App\Permission([
          'name' => 'open-promotions',
          'label' => 'Open Promotions'
        ]);
        $permission->save();

        $permission = new \App\Permission([
          'name' => 'open-social',
          'label' => 'Open Social'
        ]);
        $permission->save();

        $permission = new \App\Permission([
          'name' => 'open-testimony',
          'label' => 'Open Testimony'
        ]);
        $permission->save();

        $permission = new \App\Permission([
          'name' => 'open-blog-post',
          'label' => 'Open Blog Post'
        ]);
        $permission->save();

        $permission = new \App\Permission([
          'name' => 'open-blog-category',
          'label' => 'Open Blog Category'
        ]);
        $permission->save();

        $permission = new \App\Permission([
          'name' => 'open-blog-tag',
          'label' => 'Open Blog Tag'
        ]);
        $permission->save();

        $permission = new \App\Permission([
          'name' => 'open-user',
          'label' => 'Open User'
        ]);
        $permission->save();

        $permission = new \App\Permission([
          'name' => 'open-role',
          'label' => 'Open Role'
        ]);
        $permission->save();

        $permission = new \App\Permission([
          'name' => 'open-permission',
          'label' => 'Open Permission'
        ]);
        $permission->save();
    }
}
