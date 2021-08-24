<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestStyleApply = new StyleApply(array(
    "style_name" => "Heading 1",
));
$applyStyleRequest = new ApplyStyleToDocumentElementOnlineRequest(
    $requestDocument, "paragraphs/1/paragraphFormat", $requestStyleApply, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->applyStyleToDocumentElementOnline($applyStyleRequest);