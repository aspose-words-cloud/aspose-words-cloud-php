<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestOptions = new OptimizationOptions(array(
    "ms_word_version" => "Word2002",
));
$optimizeRequest = new OptimizeDocumentOnlineRequest(
    $requestDocument, $requestOptions, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->optimizeDocumentOnline($optimizeRequest);