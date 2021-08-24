<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDataSaveOptions = new SaveOptionsData(array(
    "file_name" => "google.doc",
    "save_format" => "doc",
    "dml_effects_rendering_mode" => "1",
    "dml_rendering_mode" => "1",
    "update_sdt_content" => false,
    "zip_output" => false,
));
$requestData = new LoadWebDocumentData(array(
    "loading_document_url" => "http://google.com",
    "save_options" => $requestDataSaveOptions,
));
$loadRequest = new LoadWebDocumentRequest(
    $requestData, NULL
);
$wordsApi->loadWebDocument($loadRequest);