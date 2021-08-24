<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$requestRun = new RunInsert(array(
    "text" => "run with text",
));
$insertRequest = new InsertRunOnlineRequest(
    $requestDocument, "paragraphs/1", $requestRun, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertRunOnline($insertRequest);