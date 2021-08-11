<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestTabStopInsertDto = new \Aspose\Words\Model\TabStopInsert(array(
    "alignment" => "Left",
    "leader" => "None",
    "position" => 72,
));
$insertRequest = new Requests\InsertOrUpdateParagraphTabStopOnlineRequest(
    $documentsDir . "/ParagraphTabStops.docx",
    $requestTabStopInsertDto,
    0,
    "",
    NULL,
    NULL,
    NULL
);
$wordsApi->insertOrUpdateParagraphTabStopOnline($insertRequest);