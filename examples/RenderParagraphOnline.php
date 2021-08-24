<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$renderRequest = new RenderParagraphOnlineRequest(
    $requestDocument, "png", 0, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->renderParagraphOnline($renderRequest);