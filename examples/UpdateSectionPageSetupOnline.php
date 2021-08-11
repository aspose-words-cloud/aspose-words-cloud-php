<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestPageSetup = new \Aspose\Words\Model\PageSetup(array(
    "rtl_gutter" => true,
    "left_margin" => 10,
    "orientation" => "Landscape",
    "paper_size" => "A5",
));
$updateRequest = new Requests\UpdateSectionPageSetupOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    $requestPageSetup,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateSectionPageSetupOnline($updateRequest);