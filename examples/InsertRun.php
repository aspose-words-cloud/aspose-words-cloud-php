<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestRun = new \Aspose\Words\Model\RunInsert(array(
    "text" => "run with text",
));
$insertRequest = new Requests\InsertRunRequest(
    "Sample.docx",
    "paragraphs/1",
    $requestRun,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertRun($insertRequest);