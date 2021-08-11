<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$insertRequest = new Requests\InsertWatermarkImageOnlineRequest(
    $documentsDir . "Sample.docx",
    $documentsDir . "Common/aspose-cloud.png",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertWatermarkImageOnline($insertRequest);