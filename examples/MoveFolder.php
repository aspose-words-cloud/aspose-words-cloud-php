<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$moveRequest = new Requests\MoveFolderRequest(
    "/TestMoveFolderDest_Sample",
    "/TestMoveFolderSrc",
    NULL,
    NULL
);
$wordsApi->moveFolder($moveRequest);