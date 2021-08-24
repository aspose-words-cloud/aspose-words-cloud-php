<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$resetRequest = new ResetCacheRequest(
);
$wordsApi->resetCache($resetRequest);