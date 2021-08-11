<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetAvailableFontsRequest(
    NULL
);
$wordsApi->getAvailableFonts($request);