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
        $this->call(BlogCategoriesTableSeeder::class);
        $this->call(BlogTagsTableSeeder::class);
        // $this->call(BlogsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ProjectItemsTableSeeder::class);
        $this->call(PromotionsTableSeeder::class);
        $this->call(TestimoniesTableSeeder::class);
    }
}
