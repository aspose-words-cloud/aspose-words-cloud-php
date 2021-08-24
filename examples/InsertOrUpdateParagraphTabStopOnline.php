<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestTabStopInsertDto = new TabStopInsert(array(
    "alignment" => "Left",
    "leader" => "None",
    "position" => 72,
));
$insertRequest = new InsertOrUpdateParagraphTabStopOnlineRequest(
    $requestDocument, $requestTabStopInsertDto, 0, NULL, NULL, NULL, NULL
);
$wordsApi->insertOrUpdateParagraphTabStopOnline($insertRequest);