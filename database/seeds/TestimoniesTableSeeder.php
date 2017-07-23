<?php

use Illuminate\Database\Seeder;

class TestimoniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimony = new \App\Testimony([
          'image' => 'uploads/people-1.png',
          'subject' => 'Lorem ipsum dolor sit amet',
          'testimony' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
          'name' => 'People 1',
          'occupation' => 'CEO at Lorem Ipsum'
        ]);
        $testimony->save();

        $testimony = new \App\Testimony([
          'image' => 'uploads/people-2.jpg',
          'subject' => 'Lorem ipsum dolor sit amet',
          'testimony' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
          'name' => 'People 2',
          'occupation' => 'CEO at Dolor'
        ]);
        $testimony->save();

        $testimony = new \App\Testimony([
          'image' => 'uploads/people-3.jpeg',
          'subject' => 'Lorem ipsum dolor sit amet',
          'testimony' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
          'name' => 'People 3',
          'occupation' => 'CEO at Sit Amet'
        ]);
        $testimony->save();
    }
}
