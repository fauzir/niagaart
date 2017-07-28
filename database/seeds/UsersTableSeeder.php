<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([
          'name' => 'Admin',
          'email' => 'admin@admin.com',
          'password' => bcrypt('123456')
        ]);
        $user->save();
    }
}
