<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
            'title'=>'homme',
            'description'=>'produit pour homme'
        ]);
        App\Category::create([
            'title'=>'femme',
            'description'=>'produit pour femme'
        ]);
        
        factory(App\Product::class, 10)->create();
    }
}
