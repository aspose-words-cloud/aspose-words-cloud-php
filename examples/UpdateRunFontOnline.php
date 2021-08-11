<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestFontDto = new \Aspose\Words\Model\Font(array(
    "bold" => true,
));
$updateRequest = new Requests\UpdateRunFontOnlineRequest(
    $documentsDir . "Sample.docx",
    "paragraphs/0",
    $requestFontDto,
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateRunFontOnline($updateRequest);