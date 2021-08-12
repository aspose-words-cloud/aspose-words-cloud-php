<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestDrawingObject = new \Aspose\Words\Model\DrawingObjectUpdate(array(
    "left" => 0,
));
$updateRequest = new Requests\UpdateDrawingObjectOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestDrawingObject,
    $documentsDir . "Common/aspose-cloud.png",
    0,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateDrawingObjectOnline($updateRequest);