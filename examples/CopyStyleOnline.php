<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestStyleCopy = new StyleCopy(array(
    "style_name" => "Heading 1",
));
$copyRequest = new CopyStyleOnlineRequest(
    $requestDocument, $requestStyleCopy, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->copyStyleOnline($copyRequest);