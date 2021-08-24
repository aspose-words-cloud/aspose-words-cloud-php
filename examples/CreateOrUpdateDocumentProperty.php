<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestProperty = new DocumentPropertyCreateOrUpdate(array(
    "value" => "Imran Anwar",
));
$createRequest = new CreateOrUpdateDocumentPropertyRequest(
    "Sample.docx", "AsposeAuthor", $requestProperty, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->createOrUpdateDocumentProperty($createRequest);