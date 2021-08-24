<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$moveRequest = new MoveFileRequest(
    "/TestMoveFileDest_Sample.docx", "Sample.docx", NULL, NULL, NULL
);
$wordsApi->moveFile($moveRequest);