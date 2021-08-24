<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$renderRequest = new RenderMathObjectOnlineRequest(
    $requestDocument, "png", 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->renderMathObjectOnline($renderRequest);