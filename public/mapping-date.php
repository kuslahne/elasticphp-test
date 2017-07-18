<?php

require '../vendor/autoload.php';

$client = Elasticsearch\ClientBuilder::create()->build();


$params = [
        'index' => 'my_index',
        'body' => [
            'mappings' => [
                'my_tweet' => [
                    '_source' => [
                        'enabled' => true
                    ],
                    'properties' => [
                        'created_at' => [
                            'type' => 'date',
                            'format' => 'E MMM d H:m:s Z Y'
                        ]               
                    ]
                ]
            ]
        ]
    ];


$response = $client->indices()->create($params);

if($client){
    echo json_encode($params);
}


