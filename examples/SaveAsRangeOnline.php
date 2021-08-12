<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestDocumentParameters = new \Aspose\Words\Model\RangeDocument(array(
    "document_name" => "/NewDoc.docx",
));
$saveRequest = new Requests\SaveAsRangeOnlineRequest(
    $documentsDir . "Sample.doc",
    "id0.0.0",
    $requestDocumentParameters,
    "id0.0.1",
    NULL,
    NULL
);
$wordsApi->saveAsRangeOnline($saveRequest);