<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$remoteFileName = "Sample.docx";

/**
 */
$requestPageNumber = new \Aspose\Words\Model\PageNumber(array(
    "alignment" => "center",
    "format" => "{PAGE} of {NUMPAGES}",
));
$insertRequest = new Requests\InsertPageNumbersRequest(
    $remoteFileName,
    $requestPageNumber,
    NULL,
    NULL,
    NULL,
    NULL,
    $remoteFileName,
    NULL,
    NULL
);
$wordsApi->insertPageNumbers($insertRequest);