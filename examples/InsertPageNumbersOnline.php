<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestPageNumber = new \Aspose\Words\Model\PageNumber(array(
    "alignment" => "center",
    "format" => "{PAGE} of {NUMPAGES}",
));
$insertRequest = new Requests\InsertPageNumbersOnlineRequest(
    $documentsDir . "Common/Sample.docx",
    $requestPageNumber,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertPageNumbersOnline($insertRequest);