<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestParagraph = new \Aspose\Words\Model\ParagraphInsert(array(
    "text" => "This is a new paragraph for your document",
));
$insertRequest = new Requests\InsertParagraphOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestParagraph,
    "sections/0",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertParagraphOnline($insertRequest);