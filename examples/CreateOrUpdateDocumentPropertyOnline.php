<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestProperty = new DocumentPropertyCreateOrUpdate(array(
    "value" => "Imran Anwar",
));
$createRequest = new CreateOrUpdateDocumentPropertyOnlineRequest(
    $requestDocument, "AsposeAuthor", $requestProperty, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->createOrUpdateDocumentPropertyOnline($createRequest);