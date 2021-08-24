<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$renderRequest = new RenderPageOnlineRequest(
    $requestDocument, 1, "bmp", NULL, NULL, NULL
);
$wordsApi->renderPageOnline($renderRequest);