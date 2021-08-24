<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestOptions = new OptimizationOptions(array(
    "ms_word_version" => "Word2002",
));
$optimizeRequest = new OptimizeDocumentRequest(
    "Sample.docx", $requestOptions, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->optimizeDocument($optimizeRequest);