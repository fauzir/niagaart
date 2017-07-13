<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new \App\Contact([
          'address' => 'Jl. Sangkuriang no. 43 Cimahi Utara, West Java, Indonesia',
          'phone' => '(022) 878041654',
          'other_phone' => '087854616546',
          'email' => 'user@example.com',
          'work_hour' => 'Mon - Fri 08:00 - 17:00',
          'side_image' => 'https://d28dwf34zswvrl.cloudfront.net/wp-content/uploads/2017/01/Furniture.jpg'
        ]);
        $contact->save();
    }
}
