<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$remoteFileName = "Sample.docx";
$bookmarkName = "aspose";

/**
 */
$testBookmarkData = new \Aspose\Words\Model\BookmarkData(array(
    "name" => $bookmarkName,
    "text" => "New Bookmark Text",
));
$updateBookmark = new Requests\UpdateBookmarkRequest(
    $remoteFileName,
    $bookmarkName,
    $testBookmarkData,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateBookmark($updateBookmark);