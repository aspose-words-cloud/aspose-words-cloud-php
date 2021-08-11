<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestDocumentParameters = new \Aspose\Words\Model\RangeDocument(array(
    "document_name" => "/NewDoc.docx",
));
$saveRequest = new Requests\SaveAsRangeRequest(
    "Sample.docx",
    "id0.0.0",
    $requestDocumentParameters,
    "id0.0.1",
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->saveAsRange($saveRequest);