<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestCommentRangeStartNode = new NodeLink(array(
    "node_id" => "0.3.0.3",
));
$requestCommentRangeStart = new DocumentPosition(array(
    "node" => $requestCommentRangeStartNode,
    "offset" => 0,
));
$requestCommentRangeEndNode = new NodeLink(array(
    "node_id" => "0.3.0.3",
));
$requestCommentRangeEnd = new DocumentPosition(array(
    "node" => $requestCommentRangeEndNode,
    "offset" => 0,
));
$requestComment = new CommentInsert(array(
    "range_start" => $requestCommentRangeStart,
    "range_end" => $requestCommentRangeEnd,
    "initial" => "IA",
    "author" => "Imran Anwar",
    "text" => "A new Comment",
));
$insertRequest = new InsertCommentRequest(
    "Sample.docx", $requestComment, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertComment($insertRequest);