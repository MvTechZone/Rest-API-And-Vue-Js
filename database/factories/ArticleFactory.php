<?php

use App\Article;
use Faker\Generator as Faker;
use Webpatser\Uuid\Uuid;

$factory->define(Article::class, function (Faker $faker) {
	return [
		'id' => Uuid::generate()->string,
		'title' => $faker->realText(50),
		'body' => $faker->realText(300),
	];
});
