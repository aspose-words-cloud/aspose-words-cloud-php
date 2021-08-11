<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$remoteFileName = "Sample.docx";

/**
 */
$mailMergeRequest = new Requests\ExecuteMailMergeRequest(
    $remoteFileName,
    "TestExecuteTemplateData.txt",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    $remoteFileName
);
$wordsApi->executeMailMerge($mailMergeRequest);