<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $sizeValue=['46','48','50','52'];
    $statusValue=['published','unpublished'];
    $codeValue=['solde','new'];

    
    return [
        'title' => $faker->sentence(),
        'description' => $faker->paragraph(),
        'price' => $faker->randomFloat(2,0,999.99),
        'size' =>$sizeValue[rand(0,3)],
        'url_image' => $faker->imageUrl(),
        'status' =>$statusValue[rand(0,1)],
        'code' =>$codeValue[rand(0,1)],
        'reference'=> $faker->ean8(),
        'category_id'=> rand(1,2),
    ];
});
