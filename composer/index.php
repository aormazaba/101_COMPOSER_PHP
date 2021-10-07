<?php

require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;

//Utilitzar el carbon
use Carbon\Carbon;

printf("Now: %s", Carbon::now());