<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestSaveOptions = new \Aspose\Words\Model\TiffSaveOptionsData(array(
    "save_format" => "tiff",
    "file_name" => "/abc.tiff",
));
$saveRequest = new Requests\SaveAsTiffOnlineRequest(
    $documentsDir . "Common/test_multi_pages.docx",
    $requestSaveOptions,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->saveAsTiffOnline($saveRequest);