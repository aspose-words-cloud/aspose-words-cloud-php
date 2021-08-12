<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
$bookmarkName = "aspose";

/**
 */
$requestBookmarkData = new \Aspose\Words\Model\BookmarkData(array(
    "name" => $bookmarkName,
    "text" => "This will be the text for Aspose",
));
$updateRequest = new Requests\UpdateBookmarkOnlineRequest(
    $documentsDir . "Sample.docx",
    $bookmarkName,
    $requestBookmarkData,
    NULL,
    NULL,
    "Sample.docx",
    NULL,
    NULL
);
$wordsApi->updateBookmarkOnline($updateRequest);