<?php

  // our json files
  $dataFile = 'data/data.json';
  $serversFile = 'data/servers.json';

  // file contents
  $dataContents = file_get_contents($dataFile);
  $serversContents = file_get_contents($serversFile);

  // get json from files
  $jsonData = json_decode($dataContents === false ? '' : $dataContents, true);
  $jsonServers = json_decode($serversContents === false ? '' : $serversContents, true);

  // set up time stuffs
  $now = time();
  $timezone = new DateTimeZone("America/Mexico_City");
  $timenow = new DateTime("now", $timezone);
  $threePM = (new DateTime("now", $timezone))->setTime(15,0,0);
  $tomorrow = (new DateTime("now", $timezone))->add(new DateInterval('P1D'))->setTime(14,0,0);

  // next checked date
  $next = isset($jsonData['next']) ? $jsonData['next'] : 0;

?>
