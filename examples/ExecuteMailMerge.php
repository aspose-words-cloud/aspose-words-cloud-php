<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$mailMergeRequest = new Requests\ExecuteMailMergeRequest(
    "Sample.docx",
    "TestExecuteTemplateData.txt",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->executeMailMerge($mailMergeRequest);