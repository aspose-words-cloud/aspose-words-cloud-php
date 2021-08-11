<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestDocumentListDocumentEntries0 = new \Aspose\Words\Model\DocumentEntry(array(
    "href" => "Sample.docx",
    "import_format_mode" => "KeepSourceFormatting",
));
$requestDocumentListDocumentEntries = [
    $requestDocumentListDocumentEntries0,
];
$requestDocumentList = new \Aspose\Words\Model\DocumentEntryList(array(
    "document_entries" => $requestDocumentListDocumentEntries,
));
$appendRequest = new Requests\AppendDocumentOnlineRequest(
    $documentsDir . "Sample.docx",
    $requestDocumentList,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->appendDocumentOnline($appendRequest);