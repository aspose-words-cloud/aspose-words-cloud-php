<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestCell = new TableCellInsert(array(
));
$insertRequest = new InsertTableCellOnlineRequest(
    $requestDocument, "sections/0/tables/2/rows/0", $requestCell, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertTableCellOnline($insertRequest);