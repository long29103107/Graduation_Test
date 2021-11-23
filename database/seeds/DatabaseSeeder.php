<?php

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
        $this->call(RoleAndPermissionSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(ShipSeeder::class);
        $this->call(ProductDetailSeeder::class);
        $this->call(OpinionSeeder::class);
        $this->call(WishlistSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(DiscountSeeder::class);
        $this->call(OrderSeeder::class); 
        $this->call(OrderDetailSeeder::class); 
        $this->call(CommentSeeder::class);
        $this->call(ImageProductSeeder::class); 
        $this->call(SlideSeeder::class);     
        $this->call(PostCategorySeeder::class);     
        $this->call(PostSeeder::class);     
    }
}
