<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocumentParameters = new RangeDocument(array(
    "document_name" => "/NewDoc.docx",
));
$saveRequest = new SaveAsRangeRequest(
    "Sample.docx", "id0.0.0", $requestDocumentParameters, "id0.0.1", NULL, NULL, NULL, NULL
);
$wordsApi->saveAsRange($saveRequest);