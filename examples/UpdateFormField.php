<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$remoteFileName = "Sample.docx";

/**
 */
$requestFormField = new \Aspose\Words\Model\FormFieldTextInput(array(
    "name" => "FullName",
    "enabled" => true,
    "calculate_on_exit" => true,
    "status_text" => "",
    "text_input_type" => "Regular",
    "text_input_default" => "No name",
));
$updateRequest = new Requests\UpdateFormFieldRequest(
    $remoteFileName,
    0,
    $requestFormField,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    $remoteFileName,
    NULL,
    NULL
);
$wordsApi->updateFormField($updateRequest);