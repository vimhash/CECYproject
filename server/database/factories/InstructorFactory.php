<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\JobBoard\Ability;
use Faker\Generator as Faker;

$factory->define(Instructor::class, function (Faker $faker) {
    return [
      'state_id' => 1,
      'person_type_id' => 21
    ];
});
