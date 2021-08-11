<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestStyleInsert = new \Aspose\Words\Model\StyleInsert(array(
    "style_name" => "My Style",
    "style_type" => "Paragraph",
));
$insertRequest = new Requests\InsertStyleOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestStyleInsert,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertStyleOnline($insertRequest);