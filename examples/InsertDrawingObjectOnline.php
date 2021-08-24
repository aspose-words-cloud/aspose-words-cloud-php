<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
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
$insertRequest = new InsertDrawingObjectOnlineRequest(
    $requestDocument, $requestDrawingObject, $requestImageFile, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertDrawingObjectOnline($insertRequest);