<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestOptions = new \Aspose\Words\Model\OptimizationOptions(array(
    "ms_word_version" => "Word2002",
));
$optimizeRequest = new Requests\OptimizeDocumentOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestOptions,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->optimizeDocumentOnline($optimizeRequest);