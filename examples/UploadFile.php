<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestFileContent = "Sample.docx";
$uploadRequest = new UploadFileRequest(
    $requestFileContent, "Sample.docx", NULL
);
$wordsApi->uploadFile($uploadRequest);