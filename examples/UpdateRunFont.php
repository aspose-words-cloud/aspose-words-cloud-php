<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestFontDto = new \Aspose\Words\Model\Font(array(
    "bold" => true,
));
$updateRequest = new Requests\UpdateRunFontRequest(
    "Sample.docx",
    "paragraphs/0",
    0,
    $requestFontDto,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateRunFont($updateRequest);