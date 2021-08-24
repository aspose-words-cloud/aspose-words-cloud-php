<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestSaveOptionsData = new SaveOptionsData(array(
    "save_format" => "docx",
    "file_name" => "/TestSaveAsFromPdfToDoc.docx",
));
$saveRequest = new SaveAsRequest(
    "Sample.docx", $requestSaveOptionsData, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->saveAs($saveRequest);