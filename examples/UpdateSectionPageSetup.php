<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestPageSetup = new PageSetup(array(
    "rtl_gutter" => true,
    "left_margin" => 10.0,
    "orientation" => "Landscape",
    "paper_size" => "A5",
));
$updateRequest = new UpdateSectionPageSetupRequest(
    "Sample.docx", 0, $requestPageSetup, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateSectionPageSetup($updateRequest);