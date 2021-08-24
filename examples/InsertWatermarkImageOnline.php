<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestImageFile = "Common/aspose-cloud.png";
$insertRequest = new InsertWatermarkImageOnlineRequest(
    $requestDocument, $requestImageFile, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertWatermarkImageOnline($insertRequest);