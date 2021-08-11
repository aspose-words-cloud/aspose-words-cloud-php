<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestBorderPropertiesColor = new \Aspose\Words\Model\XmlColor(array(
    "web" => "#AABBCC",
));
$requestBorderProperties = new \Aspose\Words\Model\Border(array(
    "border_type" => "Left",
    "color" => $requestBorderPropertiesColor,
    "distance_from_text" => 6,
    "line_style" => "DashDotStroker",
    "line_width" => 2,
    "shadow" => true,
));
$updateRequest = new Requests\UpdateBorderOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestBorderProperties,
    "left",
    "tables/1/rows/0/cells/0",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateBorderOnline($updateRequest);