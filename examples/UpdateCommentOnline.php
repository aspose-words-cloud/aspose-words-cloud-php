<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestCommentRangeStartNode = new NodeLink(array(
    "node_id" => "0.3.0",
));
$requestCommentRangeStart = new DocumentPosition(array(
    "node" => $requestCommentRangeStartNode,
    "offset" => 0,
));
$requestCommentRangeEndNode = new NodeLink(array(
    "node_id" => "0.3.0",
));
$requestCommentRangeEnd = new DocumentPosition(array(
    "node" => $requestCommentRangeEndNode,
    "offset" => 0,
));
$requestComment = new CommentUpdate(array(
    "range_start" => $requestCommentRangeStart,
    "range_end" => $requestCommentRangeEnd,
    "initial" => "IA",
    "author" => "Imran Anwar",
    "text" => "A new Comment",
));
$updateRequest = new UpdateCommentOnlineRequest(
    $requestDocument, 0, $requestComment, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateCommentOnline($updateRequest);