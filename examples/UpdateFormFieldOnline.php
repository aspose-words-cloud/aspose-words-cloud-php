<?php
$clientId = '####-####-####-####-####';
$secret = '##################';
$wordsApi = new WordsApi($clientId, $secret);
$requestDocument = "Sample.docx";
$requestFormField = new FormFieldTextInput(array(
    "name" => "FullName",
    "enabled" => true,
    "calculate_on_exit" => true,
    "status_text" => "",
    "text_input_type" => "Regular",
    "text_input_default" => "No name",
));
$updateRequest = new UpdateFormFieldOnlineRequest(
    $requestDocument, $requestFormField, 0, "sections/0", NULL, NULL, NULL, NULL, NULL
);
$wordsApi->updateFormFieldOnline($updateRequest);