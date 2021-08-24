<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$remoteFileName = "Sample.docx";

$requestDocumentListDocumentEntries0 = new DocumentEntry(array(
    "href" => $remoteFileName,
    "import_format_mode" => "KeepSourceFormatting",
));
$requestDocumentListDocumentEntries = [
    $requestDocumentListDocumentEntries0,
];
$requestDocumentList = new DocumentEntryList(array(
    "document_entries" => $requestDocumentListDocumentEntries,
));
$appendRequest = new AppendDocumentRequest(
    $remoteFileName, $requestDocumentList, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->appendDocument($appendRequest);