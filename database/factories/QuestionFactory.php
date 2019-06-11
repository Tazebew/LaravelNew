<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        $title='title'=>rtrim($faker->sentence(rand(2,4)),"."),
        // 'slug'=>str_slug($title),
        'body'=>$faker->paragraphs(rand(2,5),true),
        'views'=>rand(0,10),
        'answers'=>rand(0,10),
        'votes'=>rand(-2,10),
        'best_answer_id'=>rand(0,3),
    ];
});
