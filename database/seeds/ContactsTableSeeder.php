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
          'address' => 'Jl. Sangkuriang No. 43 Cimahi Utara, West Java, Indonesia',
          'phone' => '+6222-727-1234',
          'other_phone' => '+6287854616546',
          'email' => 'niagac7@gmail.com',
          'work_hour' => 'Mon - Fri 08:00 - 17:00, Sat - Sun 08:00 - 15:00',
          'side_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/v1501041018/message-chair_pblik7.jpg'
        ]);
        $contact->save();
    }
}
