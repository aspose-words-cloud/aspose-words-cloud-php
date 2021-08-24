<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestReportEngineSettingsReportBuildOptions = [
    "AllowMissingMembers",
    "RemoveEmptyParagraphs",
];
$requestReportEngineSettings = new ReportEngineSettings(array(
    "data_source_type" => "Json",
    "report_build_options" => $requestReportEngineSettingsReportBuildOptions,
));
$buildReportRequest = new BuildReportRequest(
    "Sample.docx", "Data.json", $requestReportEngineSettings, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->buildReport($buildReportRequest);