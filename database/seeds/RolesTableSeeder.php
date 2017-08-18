<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\Role([
          'name' => 'admin',
          'label' => 'Admin'
        ]);
        $role->save();

        $role = new \App\Role([
          'name' => 'blog-writer',
          'label' => 'Blog Writer'
        ]);
        $role->save();
    }
}
