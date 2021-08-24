<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestTemplate = "Sample.docx";
$requestReportEngineSettings = new ReportEngineSettings(array(
    "data_source_type" => "Json",
    "data_source_name" => "persons",
));
$buildReportRequest = new BuildReportOnlineRequest(
    $requestTemplate, "Data.json", $requestReportEngineSettings, NULL
);
$wordsApi->buildReportOnline($buildReportRequest);