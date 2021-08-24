<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestListFormatDto = new ListFormatUpdate(array(
    "list_id" => 2,
));
$updateRequest = new UpdateParagraphListFormatRequest(
    "Sample.docx", 0, $requestListFormatDto, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateParagraphListFormat($updateRequest);