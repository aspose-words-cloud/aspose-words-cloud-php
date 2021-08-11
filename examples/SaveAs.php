<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestSaveOptionsData = new \Aspose\Words\Model\SaveOptionsData(array(
    "save_format" => "docx",
    "file_name" => "/TestSaveAsFromPdfToDoc.docx",
));
$saveRequest = new Requests\SaveAsRequest(
    "Sample.docx",
    $requestSaveOptionsData,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->saveAs($saveRequest);