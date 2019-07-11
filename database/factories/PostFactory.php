<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => '投稿のタイトル',
        'body' => "本文です。\nテキストテキストテキストテキストテキストテキストテキストテキスト。\nテキストテキストテキストテキストテキストテキストテキスト。\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。",
        'shoes_id' =>random_int(1, 44),
        'user_id' =>random_int(1, 50)
    ];
});
