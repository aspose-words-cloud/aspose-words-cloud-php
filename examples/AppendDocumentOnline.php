<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestDocumentListDocumentEntries0 = new DocumentEntry(array(
    "href" => "Sample.docx",
    "import_format_mode" => "KeepSourceFormatting",
));
$requestDocumentListDocumentEntries = [
    $requestDocumentListDocumentEntries0,
];
$requestDocumentList = new DocumentEntryList(array(
    "document_entries" => $requestDocumentListDocumentEntries,
));
$appendRequest = new AppendDocumentOnlineRequest(
    $requestDocument, $requestDocumentList, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->appendDocumentOnline($appendRequest);