<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestRangeText = new \Aspose\Words\Model\ReplaceRange(array(
    "text" => "Replaced header",
));
$replaceRequest = new Requests\ReplaceWithTextRequest(
    "Sample.docx",
    "id0.0.0",
    $requestRangeText,
    "id0.0.1",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->replaceWithText($replaceRequest);