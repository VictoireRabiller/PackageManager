<?php
include("vendor/autoload.php");

$client = new GuzzleHttp\Client();

$response = $client->request('GET', 'http://localhost/developpement/M25-packageManager/apimeteo.php', []);

echo("je suis index.php");
echo("<br>");
echo($response->getBody());

use Carbon\Carbon;

printf("Maintenant: %s", Carbon::now()); //printf = ancien echo
$now = Carbon::now();
echo "<br>". $now;                               // 2018-06-24 12:02:02
$today = Carbon::today();
echo "<br>". $today;                             // 2018-06-24 00:00:00
$tomorrow = Carbon::tomorrow('Europe/London');
echo "<br>". $tomorrow;                          // 2018-06-25 00:00:00
$yesterday = Carbon::yesterday();
echo "<br>". $yesterday;                         // 2018-06-23 00:00:00
