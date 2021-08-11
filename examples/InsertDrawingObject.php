<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestDrawingObject = new \Aspose\Words\Model\DrawingObjectInsert(array(
    "height" => 0,
    "left" => 0,
    "top" => 0,
    "width" => 0,
    "relative_horizontal_position" => "Margin",
    "relative_vertical_position" => "Margin",
    "wrap_type" => "Inline",
));
$insertRequest = new Requests\InsertDrawingObjectRequest(
    "Sample.docx",
    $requestDrawingObject,
    $documentsDir . "Common/aspose-cloud.png",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertDrawingObject($insertRequest);