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
          'address' => 'Sangkuriang Street No. 43, North Cimahi, West Java, Indonesia',
          'phone' => '+62 22 878 00639',
          'other_phone' => '+62 878 2454 2982',
          'email' => 'cs@niagaart.com',
          'work_hour' => 'Mon - Fri 08:00 - 17:00, Sat - Sun 08:00 - 15:00',
          'side_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726579/message-chair_lcxkcr.jpg'
        ]);
        $contact->save();

        $contact = new \App\Contact([
          'address' => 'Jl. Sangkuriang No. 43, Cimahi Utara, Jawa Barat, Indonesia',
          'phone' => '+62 22 878 00639',
          'other_phone' => '+62 878 2454 2982',
          'email' => 'cs@niagaart.com',
          'work_hour' => 'Sen - Jum 08:00 - 17:00, Sab - Min 08:00 - 15:00',
          'side_image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726579/message-chair_lcxkcr.jpg'
        ]);
        $contact->save();
    }
}
