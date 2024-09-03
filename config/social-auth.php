<?php

return [
'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_SERVICE_CALLBACK'),
    ],
'facebook'=>[
    'client_id'=>env('FACEBOOK_CLIENT_ID'),
    'client_secret'=>env('FACEBOOK_CLIENT_SECRET'),
    'redirect'=>env('FACEBOOK_SERVICE_CALLBACK')
],
];