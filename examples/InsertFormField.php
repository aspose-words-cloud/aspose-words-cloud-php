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
    "text_input_default" => "123",
    "text_input_format" => "UPPERCASE",
));
$insertRequest = new Requests\InsertFormFieldRequest(
    $remoteFileName,
    $requestFormField,
    NULL,
    NULL,
    NULL,
    NULL,
    NULL,
    $remoteFileName,
    NULL,
    NULL,
    NULL
);
$wordsApi->insertFormField($insertRequest);