<?php

use App\Article;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

/** @var Factory $factory */
$factory->define(Article::class, function (Faker $faker) {
    $title = $faker->sentence;

    return [
        'title' => $title,
        'content' => $faker->paragraphs(3, true),
        'slug' => Str::slug($title),
        'user_id' => factory(User::class)->create()->id,
    ];
});
