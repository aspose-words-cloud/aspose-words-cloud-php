<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestDrawingObject = new DrawingObjectUpdate(array(
    "left" => 0,
));
$requestImageFile = "Common/aspose-cloud.png";
$updateRequest = new UpdateDrawingObjectOnlineRequest(
    $requestDocument, $requestDrawingObject, $requestImageFile, 0, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateDrawingObjectOnline($updateRequest);