<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestTemplate = "TestExecuteTemplate.doc";
$requestData = "TestExecuteTemplateData.txt";
$mailMergeRequest = new ExecuteMailMergeOnlineRequest(
    $requestTemplate, $requestData, NULL, NULL, NULL
);
$wordsApi->executeMailMergeOnline($mailMergeRequest);