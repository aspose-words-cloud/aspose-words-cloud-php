<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestWatermarkText = new WatermarkText(array(
    "text" => "This is the text",
    "rotation_angle" => 90.0,
));
$insertRequest = new InsertWatermarkTextRequest(
    "Sample.docx", $requestWatermarkText, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertWatermarkText($insertRequest);