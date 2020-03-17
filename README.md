# Aspose.Words Cloud SDK for PHP
This repository contains Aspose.Words Cloud SDK for PHP source code. This SDK allows you to work with Aspose.Words Cloud REST APIs in your PHP applications quickly and easily, with zero initial cost.

[Aspose.Words Cloud](https://products.aspose.cloud/words/family "Aspose.Words Cloud")  
[API Reference](https://apireference.aspose.cloud/words/)  

## Key Features
* Conversion between various document-related formats (20+ formats supported), including PDF<->Word conversion
* Mail merge and reports generation 
* Splitting Word documents
* Accessing Word document metadata and statistics
* Find and replace
* Watermarks and protection
* Full read & write access to Document Object Model, including sections, paragraphs, text, images, tables, headers/footers and many others

## How to use the SDK?
The complete source code is available in this repository folder. You can either directly use it in your project via source code or get [Packagist distribution](https://packagist.org/packages/aspose/aspose-words-cloud) (recommended). For more details, please visit our [documentation website](https://docs.aspose.cloud/display/wordscloud/Available+SDKs).

### Prerequisites

To use Aspose Words Cloud PHP SDK you need to register an account with [Aspose Cloud](https://www.aspose.cloud/) and lookup/create App Key and SID at [Cloud Dashboard](https://dashboard.aspose.cloud/#/apps). There is free quota available. For more details, see [Aspose Cloud Pricing](https://purchase.aspose.cloud/pricing).

### Installation

#### Via Composer:
*aspose-words-cloud* is available on Packagist as the
[`aspose-words-cloud`](https://packagist.org/packages/aspose/aspose-words-cloud) package. Run the following command:
```bash
composer require aspose/aspose-words-cloud
```

To use the SDK, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

### Sample usage

```php
$this->words = new WordsApi($creds["AppSid"], $creds["AppKey"], null);
$upload_request = new Requests\UploadFileRequest($file, 'fileStoredInCloud.doc');
$upload_result = $words->uploadFile($upload_request);
$saveOptions = new SaveOptionsData(array("save_format" => "pdf", "file_name" => 'destination.pdf'));
$request = new Requests\SaveAsRequest('fileStoredInCloud.doc', $saveOptions);
$result = $words->saveAs($request);
```
      
[Tests](tests/Aspose/Words) contain various examples of using the SDK.

## Dependencies
- PHP 7.1 or later
- referenced packages (see [here](composer.json) for more details)

## Comparison with Old generation SDK
New SDK has the following advantages over the [previous version](https://github.com/aspose-words/Aspose.Words-for-Cloud):
+ SDK is fully in sync with the API, all missing methods are added
+ Classes, methods and properties have comments and are IDE-friendly
+ Better security
+ Usage of Request/Response classes to represent long lists of parameters. This allows for cleaner code and easier backwards-compatibility going forward

New SDK is not backwards compatible with previous generation because of the last item. It should be straightforward to convert your code to using Request/Response objects, if you need any help on migration please ask at [Free Support Forums](https://forum.aspose.cloud/c/words).

## Licensing
 
All Aspose.Words Cloud SDKs, helper scripts and templates are licensed under [MIT License](https://github.com/aspose-words-cloud/aspose-words-cloud-php/blob/master/LICENSE). 

## Contact Us
Your feedback is very important to us. Please feel free to contact us using our [Support Forums](https://forum.aspose.cloud/c/words).

## Resources
 
[Website](https://www.aspose.cloud/)  
[Product Home](https://products.aspose.cloud/words/family)  
[API Reference](https://apireference.aspose.cloud/words/)  
[Documentation](https://docs.aspose.cloud/display/wordscloud/Home)  
[Blog](https://blog.aspose.cloud/category/words/)  
 
## Other languages
We generate our SDKs in different languages so you may check if yours is available in our [list](https://github.com/aspose-words-cloud).
 
If you don't find your language in the list, feel free to request it from us, or use raw REST API requests as you can find it [here](https://products.aspose.cloud/words/curl).

