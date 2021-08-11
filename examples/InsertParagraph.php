<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestParagraph = new \Aspose\Words\Model\ParagraphInsert(array(
    "text" => "This is a new paragraph for your document",
));
$insertRequest = new Requests\InsertParagraphRequest(
    "Sample.docx",
    $requestParagraph,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertParagraph($insertRequest);