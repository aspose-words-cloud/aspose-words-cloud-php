<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestWatermarkText = new WatermarkText(array(
    "text" => "This is the text",
    "rotation_angle" => 90,
));
$insertRequest = new InsertWatermarkTextOnlineRequest(
    $requestDocument, $requestWatermarkText, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertWatermarkTextOnline($insertRequest);