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
    "text_input_default" => "123",
    "text_input_format" => "UPPERCASE",
));
$insertRequest = new InsertFormFieldOnlineRequest(
    $requestDocument, $requestFormField, "sections/0/paragraphs/0", NULL, NULL, NULL, NULL, NULL, NULL
);
$wordsApi->insertFormFieldOnline($insertRequest);