<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestParagraphFormatDto = new \Aspose\Words\Model\ParagraphFormatUpdate(array(
    "alignment" => "Right",
));
$updateRequest = new Requests\UpdateParagraphFormatOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestParagraphFormatDto,
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateParagraphFormatOnline($updateRequest);