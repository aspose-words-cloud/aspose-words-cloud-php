<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestPageSetup = new PageSetup(array(
    "rtl_gutter" => true,
    "left_margin" => 10,
    "orientation" => "Landscape",
    "paper_size" => "A5",
));
$updateRequest = new UpdateSectionPageSetupOnlineRequest(
    $requestDocument, 0, $requestPageSetup, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateSectionPageSetupOnline($updateRequest);