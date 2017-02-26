<?php
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
	'oauth_access_token' => "481097429-kdHwjRQyxMlKlSmTwIICZZFm38NDondc37GU6tsT",
	'oauth_access_token_secret' => "bn7w9ndAdDwTMDwUEJgtmChhYL2KrwD9v3Ha47QOpYMfn",
	'consumer_key' => "gxQmzD9Q5CyHNEujMnUZEJkqR",
	'consumer_secret' => "gQD0t3RhMtOwJH4ODbsvUNQxnfmELdpHxSxKkBZMT5mIArXAn2"
);

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
$getfield = '?screen_name=urbz_&count=20';

$twitter = new TwitterAPIExchange($settings);

$response = $twitter->setGetfield($getfield)
			->buildOauth($url, $requestMethod)
			->performRequest();

echo '{"timeline":'.$response.'}';