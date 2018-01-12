# Aspose.Words Cloud SDK for PHP
This repository contains Aspose.Words Cloud SDK for PHP source code. This SDK allows you to work with Aspose.Words Cloud REST APIs in your PHP applications quickly and easily, with zero initial cost.

## Key Features
* Conversion between various document-related formats (20+ formats supported), including PDF<->Word conversion
* Mail merge and reports generation 
* Splitting Word documents
* Accessing Word document metadata and statistics
* Find and replace
* Watermarks and protection
* Full read & write access to Document Object Model, including sections, paragraphs, text, images, tables, headers/footers and many others

See [API Reference](https://apireference.aspose.cloud/words/) for full API specification.

## How to use the SDK?
The complete source code is available in this repository folder. You can either directly use it in your project via source code or get [Packagist distribution](https://packagist.org/packages/aspose/words-sdk-php) (recommended). For more details, please visit our [documentation website](https://docs.aspose.cloud/display/wordscloud/Available+SDKs).

[Tests](tests/Aspose/Words) contain various examples of using the SDK.
Before you launch tests you have to download full repository with all SDKs here is a link [SDKs](https://github.com/asposecloud/Aspose.Words-Cloud).
In full repository this project is available as a submodule.
Please put your credentials into [Configuration](src/Aspose/Words/Configuration.php).

## Dependencies
- PHP 5.6 or later
- referenced packages (see [here](composer.json) for more details)

## Comparison with Old generation SDK
New SDK has the following advantages over the [previous version](https://github.com/aspose-words/Aspose.Words-for-Cloud):
+ SDK is fully in sync with the API, all missing methods are added
+ Classes, methods and properties have comments and are IDE-friendly
+ Better security
+ Usage of Request/Response classes to represent long lists of parameters. This allows for cleaner code and easier backwards-compatibility going forward

New SDK is not backwards compatible with previous generation because of the last item. It should be straightforward to convert your code to using Request/Response objects, if you need any help on migration please ask at [Free Support Forums](https://forum.aspose.cloud/c/words).

## Contact Us
Your feedback is very important to us. Please feel free to contact us using our [Support Forums](https://forum.aspose.cloud/c/words).
