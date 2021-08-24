<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$renderRequest = new RenderParagraphRequest(
    "Sample.docx", "png", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->renderParagraph($renderRequest);