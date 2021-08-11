<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestOptions = new \Aspose\Words\Model\OptimizationOptions(array(
    "ms_word_version" => "Word2002",
));
$optimizeRequest = new Requests\OptimizeDocumentRequest(
    "Sample.docx",
    $requestOptions,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->optimizeDocument($optimizeRequest);