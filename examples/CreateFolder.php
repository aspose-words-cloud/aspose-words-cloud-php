<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$createRequest = new Requests\CreateFolderRequest(
    "/TestCreateFolder",
    NULL
);
$wordsApi->createFolder($createRequest);