<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$remoteFileName = "Sample.docx";

/**
 */
$requestWatermarkText = new \Aspose\Words\Model\WatermarkText(array(
    "text" => "This is the text",
    "rotation_angle" => 90.0,
));
$insertRequest = new Requests\InsertWatermarkTextRequest(
    $remoteFileName,
    $requestWatermarkText,
    NULL,
    NULL,
    NULL,
    NULL,
    $remoteFileName,
    NULL,
    NULL
);
$wordsApi->insertWatermarkText($insertRequest);