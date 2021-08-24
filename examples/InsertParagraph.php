<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestParagraph = new ParagraphInsert(array(
    "text" => "This is a new paragraph for your document",
));
$insertRequest = new InsertParagraphRequest(
    "Sample.docx", $requestParagraph, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertParagraph($insertRequest);