<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestParagraphFormatDto = new \Aspose\Words\Model\ParagraphFormatUpdate(array(
    "alignment" => "Right",
));
$updateRequest = new Requests\UpdateParagraphFormatRequest(
    "Sample.docx",
    0,
    $requestParagraphFormatDto,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateParagraphFormat($updateRequest);