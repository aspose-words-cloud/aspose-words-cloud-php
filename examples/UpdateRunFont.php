<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$remoteFileName = "Sample.docx";

/**
 */
$requestFontDto = new \Aspose\Words\Model\Font(array(
    "bold" => true,
));
$updateRequest = new Requests\UpdateRunFontRequest(
    $remoteFileName,
    "paragraphs/0",
    0,
    $requestFontDto,
    NULL,
    NULL,
    NULL,
    NULL,
    $remoteFileName,
    NULL,
    NULL
);
$wordsApi->updateRunFont($updateRequest);