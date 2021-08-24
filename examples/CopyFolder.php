<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$folderToCopy = "/TestCopyFolder";

$copyRequest = new CopyFolderRequest(
    $folderToCopy . "Dest", $folderToCopy . "Src", NULL, NULL
);
$wordsApi->copyFolder($copyRequest);