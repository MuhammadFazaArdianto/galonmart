<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            RolesAndPermissionsSeeder::class,
            UserSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ProductDisplaySeeder::class,
            ProductReviewsSeeder::class,
            UserFavouritesSeeder::class,
            MediaSeeder::class,
            SettingsSeeder::class,
            StatusSeeder::class,
            ShippingSeeder::class,
            PaymentSeeder::class,
            OrderSeeder::class,
            OrderProductSeeder::class,
            InvoiceSeeder::class,
            ContactsSeeder::class,
            MessageSeeder::class,
        ]);
    }
}
