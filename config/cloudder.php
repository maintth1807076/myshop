<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cloudinary API configuration
    |--------------------------------------------------------------------------
    |
    | Before using Cloudinary you need to register and get some detail
    | to fill in below, please visit cloudinary.com.
    |
    */

    'cloudName'  => env('CLOUDINARY_CLOUD_NAME', 'kuramakyubi'),
    'baseUrl'    => env('CLOUDINARY_BASE_URL', 'http://res.cloudinary.com/kuramakyubi'),
    'secureUrl'  => env('CLOUDINARY_SECURE_URL', 'https://res.cloudinary.com/kuramakyubi'),
    'apiBaseUrl' => env('CLOUDINARY_API_BASE_URL', 'https://api.cloudinary.com/v1_1/kuramakyubi'),
    'apiKey'     => env('CLOUDINARY_API_KEY', '469835146884474'),
    'apiSecret'  => env('CLOUDINARY_API_SECRET', 'RWvZ8mplFWQncYjejuyXPaKcEdc'),

    'scaling'    => [
        'format' => 'png',
        'width'  => 150,
        'height' => 150,
        'crop'   => 'fit',
        'effect' => null
    ],

];
