<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestReplaceText = new ReplaceTextParameters(array(
    "old_value" => "aspose",
    "new_value" => "aspose new",
));
$replaceRequest = new ReplaceTextOnlineRequest(
    $requestDocument, $requestReplaceText, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->replaceTextOnline($replaceRequest);