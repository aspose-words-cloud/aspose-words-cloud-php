<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
/**
 */
$requestReportEngineSettingsReportBuildOptions = [
    "AllowMissingMembers",
    "RemoveEmptyParagraphs",
];
$requestReportEngineSettings = new \Aspose\Words\Model\ReportEngineSettings(array(
    "data_source_type" => "Json",
    "report_build_options" => $requestReportEngineSettingsReportBuildOptions,
));
$buildReportRequest = new Requests\BuildReportRequest(
    "Sample.docx",
    "Data.json",
    $requestReportEngineSettings,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL
);
$wordsApi->buildReport($buildReportRequest);