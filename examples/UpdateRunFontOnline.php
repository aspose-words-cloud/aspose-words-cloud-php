<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestFontDto = new Font(array(
    "bold" => true,
));
$updateRequest = new UpdateRunFontOnlineRequest(
    $requestDocument, "paragraphs/0", $requestFontDto, 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateRunFontOnline($updateRequest);