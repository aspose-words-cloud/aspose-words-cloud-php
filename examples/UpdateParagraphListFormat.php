<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestListFormatDto = new \Aspose\Words\Model\ListFormatUpdate(array(
    "list_id" => 2,
));
$updateRequest = new Requests\UpdateParagraphListFormatRequest(
    "Sample.docx",
    0,
    $requestListFormatDto,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateParagraphListFormat($updateRequest);