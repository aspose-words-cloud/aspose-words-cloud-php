<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$remoteFileName = "Sample.docx";

/**
 */
$requestDocumentListDocumentEntries0 = new \Aspose\Words\Model\DocumentEntry(array(
    "href" => $remoteFileName,
    "import_format_mode" => "KeepSourceFormatting",
));
$requestDocumentListDocumentEntries = [
    $requestDocumentListDocumentEntries0,
];
$requestDocumentList = new \Aspose\Words\Model\DocumentEntryList(array(
    "document_entries" => $requestDocumentListDocumentEntries,
));
$appendRequest = new Requests\AppendDocumentRequest(
    $remoteFileName,
    $requestDocumentList,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->appendDocument($appendRequest);