<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestSaveOptions = new TiffSaveOptionsData(array(
    "save_format" => "tiff",
    "file_name" => "/abc.tiff",
));
$saveRequest = new SaveAsTiffRequest(
    "Sample.docx", $requestSaveOptions, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->saveAsTiff($saveRequest);