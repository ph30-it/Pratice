<?php

use Faker\Generator as Faker;
use App\Breed;

$factory->define(App\Cat::class, function (Faker $faker) {
    $breedIds= Breed::pluck('id'); // lấy list tất cả id bảng breeds
    // dd($breedIds);
    return [
        'name' => 'Cat'.rand(1,100),
        'breed_id' => $faker->randomElement($breedIds),
        'age' => rand(1,10)
    ];
});
