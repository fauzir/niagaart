<?php

use Illuminate\Database\Seeder;

class HomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = new \App\Home([
          'image' => 'https://d28dwf34zswvrl.cloudfront.net/wp-content/uploads/2017/01/Furniture.jpg',
          'welcome_text' => 'Welcome to Niaga Art',
          'company_description' => 'This is the website description'
        ]);
        $home->save();
    }
}
