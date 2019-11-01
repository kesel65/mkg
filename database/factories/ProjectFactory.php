<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->words(5),
        'url' => $faker->url,
        'photo_url' => $faker->imageUrl(),
        'short_description' => $faker->words(10),
        'description' => $faker->sentences(5),
        'demo' => false,
        'published_at' => now()
    ];
});
