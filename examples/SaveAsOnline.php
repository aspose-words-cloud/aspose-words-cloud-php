<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Common/test_multi_pages.docx";
$requestSaveOptionsData = new SaveOptionsData(array(
    "save_format" => "pdf",
    "file_name" => "/TestSaveAs.pdf",
));
$saveRequest = new SaveAsOnlineRequest(
    $requestDocument, $requestSaveOptionsData, NULL, NULL, NULL
);
$wordsApi->saveAsOnline($saveRequest);