<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$request = new GetStyleFromDocumentElementOnlineRequest(
    $requestDocument, "paragraphs/1/paragraphFormat", NULL, NULL
);
$wordsApi->getStyleFromDocumentElementOnline($request);