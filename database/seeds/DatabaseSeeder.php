<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AboutsTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(HomesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ServiceCataloguesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}
