<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "compareTestDoc1.doc";
$requestCompareData = new CompareData(array(
    "author" => "author",
    "comparing_with_document" => "TestCompareDocument2.doc",
    "date_time" => new \DateTime("2015-10-26T00:00:00.0000000Z"),
));
$requestComparingDocument = "compareTestDoc2.doc";
$compareRequest = new CompareDocumentOnlineRequest(
    $requestDocument, $requestCompareData, $requestComparingDocument, NULL, NULL, "/TestCompareDocumentOut.doc"
);
$wordsApi->compareDocumentOnline($compareRequest);