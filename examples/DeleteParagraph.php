<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteParagraphRequest(
    "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteParagraph($deleteRequest);