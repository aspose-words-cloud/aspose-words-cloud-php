<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetPublicKeyRequest(
);
$wordsApi->getPublicKey($request);