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
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1502502425/people-1_tsab2o.png',
          'subject' => 'Lorem ipsum dolor sit amet',
          'testimony' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
          'name' => 'John Doe',
          'occupation' => 'CEO at Lorem Ipsum'
        ]);
        $testimony->save();

        $testimony = new \App\Testimony([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726581/people-2_qn1oxw.jpg',
          'subject' => 'Lorem ipsum dolor sit amet',
          'testimony' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
          'name' => 'Ronald Olson',
          'occupation' => 'CEO at Dolor'
        ]);
        $testimony->save();

        $testimony = new \App\Testimony([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726581/people-3_nwdmax.jpg',
          'subject' => 'Lorem ipsum dolor sit amet',
          'testimony' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
          'name' => 'Amy Anderson',
          'occupation' => 'CEO at Sit Amet'
        ]);
        $testimony->save();
    }
}
