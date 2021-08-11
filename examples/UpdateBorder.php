<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestBorderPropertiesColor = new \Aspose\Words\Model\XmlColor(array(
    "web" => "#AABBCC",
));
$requestBorderProperties = new \Aspose\Words\Model\Border(array(
    "border_type" => "Left",
    "color" => $requestBorderPropertiesColor,
    "distance_from_text" => 6.0,
    "line_style" => "DashDotStroker",
    "line_width" => 2.0,
    "shadow" => true,
));
$updateRequest = new Requests\UpdateBorderRequest(
    "Sample.docx",
    "left",
    $requestBorderProperties,
    "tables/1/rows/0/cells/0",
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateBorder($updateRequest);