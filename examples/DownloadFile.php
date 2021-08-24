<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$downloadRequest = new DownloadFileRequest(
    "Sample.docx", NULL, NULL
);
$wordsApi->downloadFile($downloadRequest);