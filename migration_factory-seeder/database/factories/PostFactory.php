<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'title'    => $faker -> text($maxNbChars = 100),
      'text'     => $faker -> text(),
      'category' => $faker -> word(),
      'like'     => $faker -> numberBetween($min = 0, $max = 10000),
      'dislike'  => $faker -> numberBetween($min = 0, $max = 10000)
    ];
});
