<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$bookmarkName = "aspose";

$requestDocument = "Sample.docx";
$requestBookmarkData = new BookmarkData(array(
    "name" => $bookmarkName,
    "text" => "This will be the text for Aspose",
));
$updateRequest = new UpdateBookmarkOnlineRequest(
    $requestDocument, $bookmarkName, $requestBookmarkData, NULL, NULL, "Sample.docx", NULL, NULL
);
$wordsApi->updateBookmarkOnline($updateRequest);