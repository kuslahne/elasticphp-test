# Elasticphp-test

Requirements:
- elastic search 2.4.4
- elastic/elasticsearch-php ~2.0

Running test
- Run composer install
- Start your elasticsearch client and make sure http://localhost:9200/ works
- Sources are on public folder, point this to http://localhost/
- Test no. 1 by running on browser: http://localhost/mapping-date.php
  check result via http://localhost:9200/my_index/_mappings/my_tweet
- Test no. 2 by running on browser: http://localhost/mapping-statuses.php
  check result via http://localhost:9200/twitter/_mappings/statuses
- For test no. 3. Please first add one document to elasticsearch by insert text from 'insert-status.txt', copy and paste to your command line
  terminal. Then point to your browser http://localhost/search.php
- Test no. 4 by running http://localhost/example-resize.php
  result will be generate two new images on public folder, desire by width and height
  


