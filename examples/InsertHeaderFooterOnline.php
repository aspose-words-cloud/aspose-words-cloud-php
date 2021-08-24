<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.doc";
$insertRequest = new InsertHeaderFooterOnlineRequest(
    $requestDocument, "", "FooterEven", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertHeaderFooterOnline($insertRequest);