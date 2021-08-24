<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestStyleInsert = new StyleInsert(array(
    "style_name" => "My Style",
    "style_type" => "Paragraph",
));
$insertRequest = new InsertStyleOnlineRequest(
    $requestDocument, $requestStyleInsert, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertStyleOnline($insertRequest);