<?php
$factory->define(App\Take::class, function (Faker\Generator $faker)){


    return [
        'dog' => $faker->sentence;
    ];

}
        
    
