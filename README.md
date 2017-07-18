# elasticphp-test

Requirements:
- elastic search 2.4.4
- elastic/elasticsearch-php ~2.0

Running test
- run composer install
- run your elastic search client
- test no. 1 run on browser: mapping-date.php
  checking result via http://localhost:9200/my_index/_mappings/my_tweet
- test no. 2 run on browser: mapping-date.php
  checking result via http://localhost:9200/twitter/_mappings/statuses
- test no. 3 by running search.php
- test no. 4 by running example-resizze.php


