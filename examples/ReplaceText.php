<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$remoteFileName = "Sample.docx";

/**
 */
$requestReplaceText = new \Aspose\Words\Model\ReplaceTextParameters(array(
    "old_value" => "Testing",
    "new_value" => "Aspose testing",
));
$replaceRequest = new Requests\ReplaceTextRequest(
    $remoteFileName,
    $requestReplaceText,
    NULL,
    NULL,
    NULL,
    NULL,
    $remoteFileName,
    NULL,
    NULL
);
$wordsApi->replaceText($replaceRequest);