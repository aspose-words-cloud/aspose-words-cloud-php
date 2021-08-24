<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$createRequest = new CreateFolderRequest(
    "/TestCreateFolder", NULL
);
$wordsApi->createFolder($createRequest);