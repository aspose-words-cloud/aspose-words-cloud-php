<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestRun = new RunInsert(array(
    "text" => "run with text",
));
$insertRequest = new InsertRunRequest(
    "Sample.docx", "paragraphs/1", $requestRun, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertRun($insertRequest);