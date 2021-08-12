<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$bookmarkName = "aspose";
$remoteFileName = "Sample.docx";

/**
 */
$requestBookmarkData = new \Aspose\Words\Model\BookmarkData(array(
    "name" => $bookmarkName,
    "text" => "This will be the text for Aspose",
));
$updateRequest = new Requests\UpdateBookmarkRequest(
    $remoteFileName,
    $bookmarkName,
    $requestBookmarkData,
    NULL,
    NULL,
    NULL,
    NULL,
    $remoteFileName,
    NULL,
    NULL
);
$wordsApi->updateBookmark($updateRequest);