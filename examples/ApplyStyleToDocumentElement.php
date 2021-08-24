<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestStyleApply = new StyleApply(array(
    "style_name" => "Heading 1",
));
$applyStyleRequest = new ApplyStyleToDocumentElementRequest(
    "Sample.docx", "paragraphs/1/paragraphFormat", $requestStyleApply, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->applyStyleToDocumentElement($applyStyleRequest);