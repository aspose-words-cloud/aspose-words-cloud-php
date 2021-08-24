<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$moveRequest = new MoveFolderRequest(
    "/TestMoveFolderDest_Sample", "/TestMoveFolderSrc", NULL, NULL
);
$wordsApi->moveFolder($moveRequest);