<?php

require '../vendor/autoload.php';

$screen_name = 'sean_cummings';

$client = Elasticsearch\ClientBuilder::create()->build();

$params = [
    'index' => 'twitter',
    'type' => 'statuses',
    'body' => [
        'query' => [
            'match' => [
                'user.screen_name' => $screen_name

            ]
        ]
    ]
];
$response = $client->search($params);
$user = $response['hits']['hits'][0]['_source']['user'];
echo $user['favourites_count'];
