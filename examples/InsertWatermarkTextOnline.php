<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestWatermarkText = new \Aspose\Words\Model\WatermarkText(array(
    "text" => "This is the text",
    "rotation_angle" => 90,
));
$insertRequest = new Requests\InsertWatermarkTextOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestWatermarkText,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertWatermarkTextOnline($insertRequest);