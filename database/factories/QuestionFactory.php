<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Question;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Question::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        //
        'title' => $faker->sentence,
        'slug' => Str::slug($title),
        'body' => $faker->text,
        'category_id' => function () {
            return \App\Category::all()->random();
        },
        'user_id' => function () {
            return \App\User::all()->random();
        }
    ];
});
