<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$deleteRequest = new DeleteFootnoteRequest(
    "Sample.docx", 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->deleteFootnote($deleteRequest);