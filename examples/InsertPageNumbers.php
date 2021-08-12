<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestPageNumber = new \Aspose\Words\Model\PageNumber(array(
    "alignment" => "center",
    "format" => "{PAGE} of {NUMPAGES}",
));
$insertRequest = new Requests\InsertPageNumbersRequest(
    "Sample.docx",
    $requestPageNumber,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertPageNumbers($insertRequest);