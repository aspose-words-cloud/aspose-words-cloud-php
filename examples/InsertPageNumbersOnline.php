<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Common/Sample.docx";
$requestPageNumber = new PageNumber(array(
    "alignment" => "center",
    "format" => "{PAGE} of {NUMPAGES}",
));
$insertRequest = new InsertPageNumbersOnlineRequest(
    $requestDocument, $requestPageNumber, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertPageNumbersOnline($insertRequest);