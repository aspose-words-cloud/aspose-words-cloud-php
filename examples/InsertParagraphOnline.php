<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestParagraph = new ParagraphInsert(array(
    "text" => "This is a new paragraph for your document",
));
$insertRequest = new InsertParagraphOnlineRequest(
    $requestDocument, $requestParagraph, "sections/0", NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertParagraphOnline($insertRequest);