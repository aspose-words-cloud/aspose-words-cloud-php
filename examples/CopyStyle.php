<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestStyleCopy = new \Aspose\Words\Model\StyleCopy(array(
    "style_name" => "Heading 1",
));
$copyRequest = new Requests\CopyStyleRequest(
    "Sample.docx",
    $requestStyleCopy,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->copyStyle($copyRequest);