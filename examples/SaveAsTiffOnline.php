<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Common/test_multi_pages.docx";
$requestSaveOptions = new TiffSaveOptionsData(array(
    "save_format" => "tiff",
    "file_name" => "/abc.tiff",
));
$saveRequest = new SaveAsTiffOnlineRequest(
    $requestDocument, $requestSaveOptions, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->saveAsTiffOnline($saveRequest);