<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$renderRequest = new RenderTableOnlineRequest(
    $requestDocument, "png", 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->renderTableOnline($renderRequest);