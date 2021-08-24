<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestParagraphFormatDto = new ParagraphFormatUpdate(array(
    "alignment" => "Right",
));
$updateRequest = new UpdateParagraphFormatOnlineRequest(
    $requestDocument, $requestParagraphFormatDto, 0, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateParagraphFormatOnline($updateRequest);