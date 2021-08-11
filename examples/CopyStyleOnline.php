<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestStyleCopy = new \Aspose\Words\Model\StyleCopy(array(
    "style_name" => "Heading 1",
));
$copyRequest = new Requests\CopyStyleOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestStyleCopy,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->copyStyleOnline($copyRequest);