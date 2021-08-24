<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetAvailableFontsRequest(
    NULL
);
$wordsApi->getAvailableFonts($request);