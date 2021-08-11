<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestCommentRangeStartNode = new \Aspose\Words\Model\NodeLink(array(
    "node_id" => "0.3.0",
));
$requestCommentRangeStart = new \Aspose\Words\Model\DocumentPosition(array(
    "node" => $requestCommentRangeStartNode,
    "offset" => 0,
));
$requestCommentRangeEndNode = new \Aspose\Words\Model\NodeLink(array(
    "node_id" => "0.3.0",
));
$requestCommentRangeEnd = new \Aspose\Words\Model\DocumentPosition(array(
    "node" => $requestCommentRangeEndNode,
    "offset" => 0,
));
$requestComment = new \Aspose\Words\Model\CommentUpdate(array(
    "range_start" => $requestCommentRangeStart,
    "range_end" => $requestCommentRangeEnd,
    "initial" => "IA",
    "author" => "Imran Anwar",
    "text" => "A new Comment",
));
$updateRequest = new Requests\UpdateCommentOnlineRequest(
    $documentsDir . "Sample.docx",
    0,
    $requestComment,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->updateCommentOnline($updateRequest);