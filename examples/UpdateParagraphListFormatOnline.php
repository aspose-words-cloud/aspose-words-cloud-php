<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$requestListFormatDto = new ListFormatUpdate(array(
    "list_id" => 2,
));
$updateRequest = new UpdateParagraphListFormatOnlineRequest(
    $requestDocument, $requestListFormatDto, 0, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateParagraphListFormatOnline($updateRequest);