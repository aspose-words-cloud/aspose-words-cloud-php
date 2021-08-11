<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestRangeText = new \Aspose\Words\Model\ReplaceRange(array(
    "text" => "Replaced header",
));
$replaceRequest = new Requests\ReplaceWithTextOnlineRequest(
    $documentsDir . "DocumentElements/Range/RangeGet.doc",
    "id0.0.0",
    $requestRangeText,
    "id0.0.1",
    NULL,
    NULL,
    NULL
);
$wordsApi->replaceWithTextOnline($replaceRequest);