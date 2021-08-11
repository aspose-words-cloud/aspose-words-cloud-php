<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$documentsDir = '...';
/**
 */
$requestReportEngineSettings = new \Aspose\Words\Model\ReportEngineSettings(array(
    "data_source_type" => "Json",
    "data_source_name" => "persons",
));
$buildReportRequest = new Requests\BuildReportOnlineRequest(
    $documentsDir . "Sample.docx",
    "Data.json",
    $requestReportEngineSettings,
    NULL
);
$wordsApi->buildReportOnline($buildReportRequest);