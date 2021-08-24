<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestStyleInsert = new StyleInsert(array(
    "style_name" => "My Style",
    "style_type" => "Paragraph",
));
$insertRequest = new InsertStyleRequest(
    "Sample.docx", $requestStyleInsert, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertStyle($insertRequest);