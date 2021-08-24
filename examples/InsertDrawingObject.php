<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDrawingObject = new DrawingObjectInsert(array(
    "height" => 0,
    "left" => 0,
    "top" => 0,
    "width" => 0,
    "relative_horizontal_position" => "Margin",
    "relative_vertical_position" => "Margin",
    "wrap_type" => "Inline",
));
$requestImageFile = "Common/aspose-cloud.png";
$insertRequest = new InsertDrawingObjectRequest(
    "Sample.docx", $requestDrawingObject, $requestImageFile, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertDrawingObject($insertRequest);