<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$mailMergeRequest = new Requests\ExecuteMailMergeOnlineRequest(
    $documentsDir . "TestExecuteTemplate.doc",
    $documentsDir . "TestExecuteTemplateData.txt",
    NULL,
    NULL,
    NULL
);
$wordsApi->executeMailMergeOnline($mailMergeRequest);