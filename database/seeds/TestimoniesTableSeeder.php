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
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726581/people-3_nwdmax.jpg',
          'subject' => 'Layanan cepat dan sesuai',
          'testimony' => 'Pesanan sketsel saya sudah selesai lebih cepat dari tanggal yang di rencanakan. Produknya rapi dan bagus sesuai dengan desain yang dipesan. Sukses buat Niaga Art!',
          'name' => 'Ibu Mira',
          'occupation' => 'Customer'
        ]);
        $testimony->save();

        $testimony = new \App\Testimony([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726581/people-2_qn1oxw.jpg',
          'subject' => 'Kitchen set membuat segalanya lebih efisien',
          'testimony' => 'Terimakasih sekarang dapur saya jadi rapi, tidak kotor seperti dulu banyak perabotan masak diluar. Sekarang simpan alat-alat masak muat di lemari kitchensetnya.',
          'name' => 'Bapak Asep',
          'occupation' => 'Customer'
        ]);
        $testimony->save();

        $testimony = new \App\Testimony([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726581/people-3_nwdmax.jpg',
          'subject' => 'Harga sesuai dengan kualitas',
          'testimony' => 'Saya pikir harganya terlalu mahal dan budget saya gak cukup, tapi ternyata harganya bisa disesuaikan dan Niaga Art kasih tau saya spesifikasi produknya. Gak nyesel deh pesen disini.',
          'name' => 'Ibu Intan',
          'occupation' => 'Customer'
        ]);
        $testimony->save();

        $testimony = new \App\Testimony([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1502502425/people-1_tsab2o.png',
          'subject' => 'Niaga Art punya layanan terpercaya',
          'testimony' => 'Pernah ketipu sama jasa interior lain bikin kecewa banget, tapi Niaga Art beresin semua masalah saya. Thanks ya',
          'name' => 'Bapak Hendi',
          'occupation' => 'Customer'
        ]);
        $testimony->save();

        $testimony = new \App\Testimony([
          'image' => 'http://res.cloudinary.com/fauzi41studio/image/upload/q_40/v1501726581/people-3_nwdmax.jpg',
          'subject' => 'Harga sesuai dengan kualitas',
          'testimony' => 'Produksi pesanan kamar set anak saya bagus banget bisa cepet,  sorry banget.. saya banyak minta ini itu Niaga Art tetep layani.',
          'name' => 'Ibu Yani',
          'occupation' => 'Customer'
        ]);
        $testimony->save();
    }
}
