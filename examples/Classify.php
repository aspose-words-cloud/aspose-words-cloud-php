<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$classifyRequest = new Requests\ClassifyRequest(
    "Try text classification",
    "3"
);
$wordsApi->classify($classifyRequest);