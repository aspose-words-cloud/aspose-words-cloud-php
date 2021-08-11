<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$deleteRequest = new Requests\DeleteFolderRequest(
    "",
    NULL,
    NULL
);
$wordsApi->deleteFolder($deleteRequest);