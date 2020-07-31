<?php

use Faker\Generator as Faker;

$factory->define(\Modules\Article\Entities\Content::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(3),
        'author'=>'顾首',
        'content'=> $faker->text,
        'thumb'=>$faker->imageUrl(300,300),
        'click'=> mt_rand(1,1111),
        'category_id'=> mt_rand(1,4),
        'iscommend'=>mt_rand(0,1)
    ];
});
