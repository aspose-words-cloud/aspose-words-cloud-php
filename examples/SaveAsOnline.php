<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestSaveOptionsData = new \Aspose\Words\Model\SaveOptionsData(array(
    "save_format" => "pdf",
    "file_name" => "/TestSaveAs.pdf",
));
$saveRequest = new Requests\SaveAsOnlineRequest(
    $documentsDir . "Common/test_multi_pages.docx",
    $requestSaveOptionsData,
    NULL,
    NULL,
    NULL
);
$wordsApi->saveAsOnline($saveRequest);