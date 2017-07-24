<?php 
   //Connecting to Redis server on localhost 
   $redis = new Redis(); 
   $redis->connect('127.0.0.1', 6379); 
   echo "Connection to server sucessfully"; 
   $redis->auth('N#ti0nMulti');
   //check whether server is running or not 
   echo "Server is running: ".$redis->ping(); 
   $arList = $redis->keys("*"); 
   echo "Stored keys in redis:: "; 
   print_r($arList); 
?>
