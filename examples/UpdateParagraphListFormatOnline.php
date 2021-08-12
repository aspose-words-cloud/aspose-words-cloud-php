<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestListFormatDto = new \Aspose\Words\Model\ListFormatUpdate(array(
    "list_id" => 2,
));
$updateRequest = new Requests\UpdateParagraphListFormatOnlineRequest(
    $documentsDir . "Sample.doc",
    $requestListFormatDto,
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateParagraphListFormatOnline($updateRequest);