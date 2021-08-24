<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestFormField = new FormFieldTextInput(array(
    "name" => "FullName",
    "enabled" => true,
    "calculate_on_exit" => true,
    "status_text" => "",
    "text_input_type" => "Regular",
    "text_input_default" => "No name",
));
$updateRequest = new UpdateFormFieldRequest(
    "Sample.docx", 0, $requestFormField, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateFormField($updateRequest);