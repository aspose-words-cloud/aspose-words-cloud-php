<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestCustomXmlPart = new CustomXmlPartInsert(array(
    "id" => "hello",
    "data" => "<data>Hello world</data>",
));
$insertRequest = new InsertCustomXmlPartOnlineRequest(
    $requestDocument, $requestCustomXmlPart, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertCustomXmlPartOnline($insertRequest);