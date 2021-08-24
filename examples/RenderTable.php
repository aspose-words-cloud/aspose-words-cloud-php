<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$renderRequest = new RenderTableRequest(
    "Sample.docx", "png", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->renderTable($renderRequest);