<?php

require '../vendor/autoload.php';


    $client = Elasticsearch\ClientBuilder::create()->build();
    $params = [
        'index' => 'twitter',
        'body' => [
            'settings' => [ 
                'number_of_shards' => 1,
                'number_of_replicas' => 0
            ],
            'mappings' => [
                'statuses' => [
                    'properties' => [
                        'coordinates' => [
                            'type' => 'string',
                            'null_value' => 'NULL',
                        ],
                        'favorited' => [
                            'type' => 'boolean',
                        ],
                        'truncated' => [
                            'type' => 'boolean',
                        ],
                        'created_at' => [
                            'type' => 'date',
                            'format' => 'E MMM d H:m:s Z Y',
                        ],
                        'id_str' => [
                            'type' => 'string',
                        ],
                        'entities' => [
                            'properties' => [
                                'urls' => [
                                    'type' => 'nested',
                                ],
                                'hashtags' => [
                                    'type' => 'nested',
                                    'properties' => [
                                        'text' => [
                                            'type' => 'string',
                                        ],
                                        'indices' => [
                                            'type' => 'integer',
                                        ],
                                    ],
                                ],
                                'user_mentions' => [
                                    'type' => 'nested',
                                ],
                            ],
                        ],
                        'in_reply_to_user_id_str' => [
                            'type' => 'string',
                            'null_value' => 'NULL'
                        ],
                        'contributors' => [
                            'type' => 'string',
                            'null_value' => 'NULL',
                        ],
                        'text' => [
                            'type' => 'string',
                        ],
                        'metadata' => [
                            'properties' => [
                                'iso_language_code' => [
                                    'type' => 'string',
                                ],
                                'result_type' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                        'retweet_count' => [
                            'type' => 'integer',
                        ],
                        'in_reply_to_status_id_str' => [
                            'type' => 'string',
                            'null_value' => 'NULL',
                        ],
                        'id' => [
                            'type' => 'long',
                            'index' => 'analyzed'
                        ],
                        'geo' => [
                            'type' => 'string',
                            'null_value' => 'NULL'
                        ],
                        'retweeted' => [
                            'type' => 'boolean'
                        ],    
                        'in_reply_to_user_id' => [
                            'type' => 'string',
                            'null_value' => 'NULL',
                        ],
                        'place' => [
                            'type' => 'string',
                            'null_value' => 'NULL',
                        ],
                        'user' => [
                            'type' => 'object',
                            'properties' => [
                                'profile_sidebar_fill_color' => [
                                    'type' => 'string',
                                ],
                                'profile_sidebar_border_color' => [
                                    'type' => 'string',
                                ],
                                'profile_background_tile' => [
                                    'type' => 'boolean',
                                ],
                                'name' => [
                                    'type' => 'string',
                                ],
                                'profile_image_url' => [
                                    'type' => 'string',
                                ],
                                'created_at' => [
                                    'type' => 'date',
                                    'format' => 'E MMM d H:m:s Z Y',
                                ],
                                'location' => [
                                    'type' => 'string',
                                ],
                                'follow_request_sent' => [
                                    'type' => 'string',
                                    'null_value' => 'NULL',
                                ],
                                'profile_link_color' => [
                                    'type' => 'string',
                                ],
                                'is_translator' => [
                                    'type' => 'boolean',
                                ],
                                'id_str' => [
                                    'type' => 'string',
                                    'index' => 'analyzed',
                                ],
                                'entities' => [
                                    'properties' => [
                                        'url' => [
                                            'properties' => [
                                                'urls' => [
                                                    'type' => 'nested',
                                                    'properties' => [
                                                        'expanded_url' => [
                                                            'type' => 'string',
                                                            'null_value' => 'NULL'
                                                        ],
                                                        'url' => [
                                                            'type' => 'string'
                                                        ],
                                                        'indices' => [
                                                            'type' => 'integer',
                                                            'index' => 'analyzed'
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'description' => [
                                            'properties' => [
                                                'urls' => [
                                                    'type' => 'nested'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'default_profile' => [
                                    'type' => 'boolean'
                                ],
                                'contributors_enabled' => [
                                    'type' => 'boolean'
                                ],
                                'favourites_count' => [
                                    'type' => 'integer'
                                ],
                                'url' => [
                                    'type' => 'string',
                                    'null_value' => 'NULL'
                                ],
                                'profile_image_url_https' => [
                                    'type' => 'string'
                                ], 
                                'utc_offset' => [
                                    'type' => 'integer'
                                ],
                                'id' => [
                                    'type' => 'integer',
                                    'index' => 'analyzed'
                                ],
                                'profile_use_background_image' => [
                                    'type' => 'boolean'
                                ],
                                'listed_count' => [
                                    'type' => 'integer'
                                ],
                                'profile_text_color' => [
                                    'type' => 'string'
                                ],
                                'lang' => [
                                    'type' => 'string'
                                ],
                                'followers_count' => [
                                    'type' => 'integer'
                                ],
                                'protected' => [
                                    'type' => 'boolean'
                                ],
                                'notifications' => [
                                    'type' => 'string',
                                    'null_value' => 'NULL'
                                ],
                                'profile_background_image_url_https' => [
                                    'type' => 'string'
                                ],
                                'profile_background_color' => [
                                    'type' => 'string'
                                ],
                                'verified' => [
                                    'type' => 'boolean'
                                ],
                                'geo_enabled' => [
                                    'type' => 'boolean'
                                ],
                                'time_zone' => [
                                    'type' => 'string',
                                    'index' => 'analyzed'
                                ],
                                'description' => [
                                    'type' => 'string'
                                ],
                                'default_profile_image' => [
                                    'type' => 'boolean'
                                ],
                                'profile_background_image_url' => [
                                    'type' => 'string'
                                ],
                                'statuses_count' => [
                                    'type' => 'integer'
                                ],
                                'friends_count' => [
                                    'type' => 'integer'
                                ],
                                'following' => [
                                    'type' => 'string',
                                    'null_value' => 'NULL'
                                ],
                                'show_all_inline_media' => [
                                    'type' => 'boolean'
                                ],
                                'screen_name' => [
                                    'type' => 'string',
                                    'index' => 'analyzed'
                                ]
                            ]
                        ],
                        'in_reply_to_screen_name' => [
                            'type' => 'string',
                            'null_value' => 'NULL'
                        ],
                        'source' => [
                            'type' => 'string'
                        ],
                        'in_reply_to_status_id' => [
                            'type' => 'string',
                            'null_value' => 'NULL'
                        ]
                    ]
                ]
            ]
       ]
    ];
    $client->indices()->create($params);
    
    if($client){
        echo json_encode($params);
    }


