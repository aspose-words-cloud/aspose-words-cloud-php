<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$request = new GetStyleFromDocumentElementRequest(
    "Sample.docx", "paragraphs/1/paragraphFormat", NULL, NULL, NULL, NULL
);
$wordsApi->getStyleFromDocumentElement($request);