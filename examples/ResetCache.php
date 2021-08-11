<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$resetRequest = new Requests\ResetCacheRequest(
);
$wordsApi->resetCache($resetRequest);