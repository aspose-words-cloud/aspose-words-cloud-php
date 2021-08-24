<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestCustomXmlPart = new CustomXmlPartUpdate(array(
    "data" => "<data>Hello world</data>",
));
$updateRequest = new UpdateCustomXmlPartOnlineRequest(
    $requestDocument, 0, $requestCustomXmlPart, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateCustomXmlPartOnline($updateRequest);