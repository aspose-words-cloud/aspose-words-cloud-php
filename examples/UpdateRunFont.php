<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestFontDto = new Font(array(
    "bold" => true,
));
$updateRequest = new UpdateRunFontRequest(
    "Sample.docx", "paragraphs/0", 0, $requestFontDto, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateRunFont($updateRequest);