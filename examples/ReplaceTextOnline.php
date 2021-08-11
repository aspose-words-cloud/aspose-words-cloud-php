<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestReplaceText = new \Aspose\Words\Model\ReplaceTextParameters(array(
    "old_value" => "aspose",
    "new_value" => "aspose new",
));
$replaceRequest = new Requests\ReplaceTextOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestReplaceText,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->replaceTextOnline($replaceRequest);