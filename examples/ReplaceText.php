<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestReplaceText = new ReplaceTextParameters(array(
    "old_value" => "Testing",
    "new_value" => "Aspose testing",
));
$replaceRequest = new ReplaceTextRequest(
    "Sample.docx", $requestReplaceText, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->replaceText($replaceRequest);