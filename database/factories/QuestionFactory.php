<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        $title='title'=>rtrim($faker->sentence(rand(5,10)),"."),
        // 'slug'=>str_slug($title),
        'body'=>$faker->paragraphs(rand(3,7),true),
        'views'=>rand(0,10),
        'answers'=>rand(0,10),
        'votes'=>rand(-2,10),
    ];
});
