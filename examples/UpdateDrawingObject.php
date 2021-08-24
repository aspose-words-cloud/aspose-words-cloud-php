<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDrawingObject = new DrawingObjectUpdate(array(
    "left" => 0,
));
$requestImageFile = "Common/aspose-cloud.png";
$updateRequest = new UpdateDrawingObjectRequest(
    "Sample.docx", $requestDrawingObject, $requestImageFile, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateDrawingObject($updateRequest);