<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$renderRequest = new RenderDrawingObjectOnlineRequest(
    $requestDocument, "png", 0, "sections/0", NULL, NULL, NULL, NULL
);
$wordsApi->renderDrawingObjectOnline($renderRequest);