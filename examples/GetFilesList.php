<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetFilesListRequest(
    "", NULL
);
$wordsApi->getFilesList($request);