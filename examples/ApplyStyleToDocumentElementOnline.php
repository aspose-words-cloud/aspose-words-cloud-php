<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestStyleApply = new \Aspose\Words\Model\StyleApply(array(
    "style_name" => "Heading 1",
));
$applyStyleRequest = new Requests\ApplyStyleToDocumentElementOnlineRequest(
    $documentsDir . "Sample.docx",
    "paragraphs/1/paragraphFormat",
    $requestStyleApply,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->applyStyleToDocumentElementOnline($applyStyleRequest);