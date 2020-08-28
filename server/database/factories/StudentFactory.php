<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cecy\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'state_id' => 1
    ];
});
