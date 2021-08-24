<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteFolderRequest(
    "", NULL, NULL
);
$wordsApi->deleteFolder($deleteRequest);