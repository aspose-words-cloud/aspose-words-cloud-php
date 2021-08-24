<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestStyleCopy = new StyleCopy(array(
    "style_name" => "Heading 1",
));
$copyRequest = new CopyStyleRequest(
    "Sample.docx", $requestStyleCopy, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->copyStyle($copyRequest);