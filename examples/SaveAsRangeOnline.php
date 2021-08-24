<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$requestDocumentParameters = new RangeDocument(array(
    "document_name" => "/NewDoc.docx",
));
$saveRequest = new SaveAsRangeOnlineRequest(
    $requestDocument, "id0.0.0", $requestDocumentParameters, "id0.0.1", NULL, NULL
);
$wordsApi->saveAsRangeOnline($saveRequest);