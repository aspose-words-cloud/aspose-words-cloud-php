<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestPageNumber = new PageNumber(array(
    "alignment" => "center",
    "format" => "{PAGE} of {NUMPAGES}",
));
$insertRequest = new InsertPageNumbersRequest(
    "Sample.docx", $requestPageNumber, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertPageNumbers($insertRequest);