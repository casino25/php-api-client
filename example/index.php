<?php
use casino25\api\client\Client;

require __DIR__.'/vendor/autoload.php';

$client = new Client(array(
        // Replace this with the URL you get with the documentation.
        'url' => 'https://api.example.com/v1/',

        // This is the file path for the Operator API v1 key.
        'sslKeyPath' => __DIR__.'/ssl/apikey.pem',

        // Sometimes it's useful to enable debug mode.
        // 'debug' => true,
));

var_export($client->listGames());
