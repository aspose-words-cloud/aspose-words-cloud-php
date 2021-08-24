<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestTabStopInsertDto = new TabStopInsert(array(
    "alignment" => "Left",
    "leader" => "None",
    "position" => 100.0,
));
$insertRequest = new InsertOrUpdateParagraphTabStopRequest(
    "Sample.docx", 0, $requestTabStopInsertDto, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertOrUpdateParagraphTabStop($insertRequest);