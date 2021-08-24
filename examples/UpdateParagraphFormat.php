<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestParagraphFormatDto = new ParagraphFormatUpdate(array(
    "alignment" => "Right",
));
$updateRequest = new UpdateParagraphFormatRequest(
    "Sample.docx", 0, $requestParagraphFormatDto, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateParagraphFormat($updateRequest);