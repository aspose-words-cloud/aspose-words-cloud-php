<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestCompareData = new CompareData(array(
    "author" => "author",
    "comparing_with_document" => "TestCompareDocument2.doc",
    "date_time" => new \DateTime("2015-10-26T00:00:00.0000000Z"),
));
$compareRequest = new CompareDocumentRequest(
    "TestCompareDocument1.doc", $requestCompareData, NULL, NULL, NULL, NULL, "/TestCompareDocumentOut.doc"
);
$wordsApi->compareDocument($compareRequest);