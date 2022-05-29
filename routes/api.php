<?php

use assets\User;

Route::get('stats', function () {
    return [
        'series' => 200,
        'lessons' => 1300,
    ];
});

Route::get('achievements', function () {
    $user = User::whereUsername('alicioalves')->first();

    return $user->achievements;
});