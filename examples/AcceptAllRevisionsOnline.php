<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
$fileName  = "test_doc.docx";

/**
 * Calls AcceptAllRevisionsOnline method for document in cloud.
 */
$requestDocument = $documentsDir . $fileName;
$request = new Requests\AcceptAllRevisionsOnlineRequest(
    $requestDocument,
    NULL,
    NULL,
    NULL
);
$acceptAllRevisionsOnlineResult = $wordsApi->acceptAllRevisionsOnline($request);
rename($acceptAllRevisionsOnlineResult->getDocument()->getPathname(), 'test_result.docx');