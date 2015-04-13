<?php

require('twitteroauth.php'); // path to twitteroauth library

$consumer_key = 'TP3yZbRZQo0JCCHvsb6FTghv3';
$consumer_secret = '34j3V0305XnmxdidzpEBL5S7tneVLXbFjTfzfgar56fz95yjvS';
$access_token = '209954750-76kyzO50TghHt6lZ1tIDDJwMUZkceuTf5xlrjJlC';
$access_token_secret = 'iKlHIBYn2JlDdGztDA57qnpHfveFHSDMZQGJOxag7ut92';

$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token, $access_token_secret);

//Isi screen name dengan screen name twitter anda

$tweets = $twitter->get("https://api.twitter.com/1.1/search/tweets.json?q=%23freebandnames&count=10");

echo "<h1>HASIL</h1><br>";
foreach ($tweets->statuses as $tweet) {

	// TRICK : Melihat isi sebuah tweet
	// var_dump($tweet);

	echo $tweet->text;
	echo "<br>";
}

echo "<br><br><br><h2>JSON</h2><br>";

echo json_encode($tweets);
