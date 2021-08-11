<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$request = new Requests\GetFilesListRequest(
    "",
    NULL
);
$wordsApi->getFilesList($request);