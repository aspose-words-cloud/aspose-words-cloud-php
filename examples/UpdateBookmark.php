<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$bookmarkName = "aspose";

/**
 */
$requestBookmarkData = new \Aspose\Words\Model\BookmarkData(array(
    "name" => $bookmarkName,
    "text" => "This will be the text for Aspose",
));
$updateRequest = new Requests\UpdateBookmarkRequest(
    "Sample.docx",
    $bookmarkName,
    $requestBookmarkData,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateBookmark($updateRequest);