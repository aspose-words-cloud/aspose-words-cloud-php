<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestCompareData = new \Aspose\Words\Model\CompareData(array(
    "author" => "author",
    "comparing_with_document" => "TestCompareDocument2.doc",
    "date_time" => new \DateTime("2015-10-26T00:00:00.0000000Z"),
));
$compareRequest = new Requests\CompareDocumentOnlineRequest(
    $documentsDir . "compareTestDoc1.doc",
    $requestCompareData,
    $documentsDir . "compareTestDoc2.doc",
    NULL,
    NULL,
    "/TestCompareDocumentOut.doc"
);
$wordsApi->compareDocumentOnline($compareRequest);