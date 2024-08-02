<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$fileName = "test_doc.docx";

/**
 * Calls AcceptAllRevisionsOnline method for document in cloud.
 */
$requestDocument = $fileName;
$request = new AcceptAllRevisionsOnlineRequest(
    $requestDocument, NULL, NULL, NULL, NULL, NULL
);
$acceptAllRevisionsOnlineResult = $wordsApi->acceptAllRevisionsOnline($request);
$doc = $acceptAllRevisionsOnlineResult->getDocument();
rename(reset($doc)->getPathname(), 'test_result.docx');