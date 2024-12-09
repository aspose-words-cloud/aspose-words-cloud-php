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

## Enhancements in Version 24.12

- Added 'RenderChoiceFormFieldBorder' property for PdfSaveOptionsData class.
- Added 'ApplySuperscript' property for ReplaceTextParameters class.


## Enhancements in Version 24.11

- Added GetAllRevisions method to obtain all available revisions in document.
- Added AppendAllEntriesToOneSection parameter to AppendDocument method to append entries to the same section.


## Enhancements in Version 24.9

- Added digital signature methds for DOC, DOCX, XPS, or ODT documents.
- Added ReplaceBackslashWithYenSign property for XpsSaveOptions and HtmlSaveOptions.
- Added DigitalSignature property for XpsSaveOptions.
- Added UseSdtTagAsFormFieldName property for PdfSaveOptions.
- Added MergeWholeDocument parameter to the MailMerge operations to update fields in whole document after executing of a mail merge with regions.


## Enhancements in Version 24.8

- Added the support of OpenType standard. It is usefull for languages required advanced typography.


## Enhancements in Version 24.7

- Added support for azw3 (Amazon Kindle Format) documents.
- Added 'MaxImageResolution' property for SvgSaveOptionsData class.


## Enhancements in Version 24.6

- Added the 'TranslateNodeId' method to transalate a node id to a node path.


## Enhancements in Version 24.5

- Added the support of multistorage operations. Saving a file as a result of an operation can be performed in a specific storage, when, used file path in the next format '@storage:path/to/file.doc'.


## Enhancements in Version 24.4

- Added the 'MergeWithNext' method to merge a section with the next one.
- Added the 'LockAspectRatio' propperty for DrawingObjectInsert and DrawingObjectUpdate methods.


## Enhancements in Version 24.3

- Added support for 'RemoveEmptyCells' option for the 'Cleanup' parameter in the insert 'MailMerge' API method.


## Enhancements in Version 24.1

- Added support for InsertAfterNode in the insert API without NodePath.
- Added support for inserting nodes (runs/rows/cells/bookmarks) without NodePath.
- Added support for transparency in the Watermark API.
- Added support for password and encryptedPassword fields in FileReference.
- Fixed missing href value in document responses.


## Enhancements in Version 23.12

- Properties Name, Text, StartRange, EndRange marked as required for InsertBookmark operation.
- Implemented DeleteOfficeMathObjects operation to delete all office math objects from document.
- Parameter ProtectionRequest was removed from the UnprotectDocument operation. Now removing protection from a document does not require a password.
- Model ProtectionRequest marked as deprecated, please use ProtectionRequestV2 instead for perform ProtectDocument operation. To change the password or protection type of protected document, the old password is no required.
- Added fields Password and EncryptedPassword to FileReference for documents encrypted by password.
- Removed parameter encryptedPassword2 from CompareDocument method. Please use FileReference password instead.


## Enhancements in Version 23.11

- Support of required properties in models.
- Property StyleName marked as required for InsertStyle operation.
- Property StyleName marked as required for CopyStyle operation.
- Property StyleName marked as required for ApplyStyleToDocumentElement operation.
- Properties SdtType and Level marked as required for InsertStructuredDocumentTag operation.
- Property Text marked as required for InsertParagraphoperation.
- Property Value marked as required for CreateOrUpdateDocumentProperty operation.
- Property NewValue marked as required for ReplaceText operation.
- Property Text marked as required for ReplaceWithText operation.


## Enhancements in Version 23.9

- Support for class inheritance in responses from the server.


## Enhancements in Version 23.6

- Fix XMLHttpRequest in web applications.


## Enhancements in Version 23.5

- Added InsertSection method.


## Enhancements in Version 23.4

- Added new type of RangeEndIdentifier for RangeApi: document:end


## Enhancements in Version 23.3

- Fix compatibility between CreateDocument API and Dropbox storage.
- Fix compatibility for property PageCount for FixedPageSaveOptionsData.


## Enhancements in Version 23.2

- Added operations to manipulate with Structure Document Tags (SDT) in documents.


## Enhancements in Version 23.1

- Various changes related to stability and performance


## Enhancements in Version 22.12

- Various changes related to stability and performance


## Enhancements in Version 22.11

- Added 'EmbedAttachments' property for PdfSaveOptionsData class.


## Enhancements in Version 22.10

- Added 'CacheHeaderFooterShapes' property for PdfSaveOptionsData class.
- FileReference structure has been added that allows to determine how the document will be accessed: from the remote storage, or loaded directly in the request.
- The 'AppendDocument' and 'AppendDocumentOnline' methods takes a 'FileReference' instead of an 'href' property.
- Added property 'StartingNumber' for 'PageNumbers' class.
- Added property 'GlobalCultureName' for 'FieldOptions' class.


## Enhancements in Version 22.9

- CompressDocument method now can handle images.
- Added support to convert password protected document using ConvertDocument API.


## Enhancements in Version 22.8

- Added optional loadEncoding and password parameters for ConvertDocument API method.


## Enhancements in Version 22.7

- Expand 'AppendDocument' API method to support 'ImageEntryList' for directly appending images to documents and another images.
- Added 'CompressDocument' API method to support compression and resizing images inside the document for reduce the size of the document.


## Enhancements in Version 22.6

- Added 'DeleteBookmark' and 'DeleteBookmarkOnline' API methods for delete bookmarks by name from the document.
- Added 'DeleteBookmarks' and 'DeleteBookmarksOnline' API methods for delete all bookmarks from the document.
- Added 'InsertBookmark' and 'InsertBookmarkOnline' API methods for create new bookmarks in the document.
- Support all save formats for 'CreateDocument' operation.


## Enhancements in Version 22.5

- Internal API fixes and improvments.


## Enhancements in Version 22.4

- Added ExportShapesAsSvg to HtmlSaveOption.
- Added new endpoint '~/styles/copy_from'.


## Enhancements in Version 22.3

- Online methods returns the dictionary of files with included original filename as key instead of single file content in responses.
- Parameters contained sensitive data should be passed in encrypted form. Names of the parameters have 'encrypted' prefix.
- Added Encrypt method to encrypt data on the API public key. Use it to prepare values for parameters required encrypted data.
- Changed type of enumerations for members of SaveOptionsData and other inherited classes from string to enum.


## Enhancements in Version 22.2

- Made 'SaveOprionsData.SaveFormat' property readonly with default value.
- Added subclasses for all formats of SaveOprionsData with specified SaveFormat.
- 'SaveOptionsData', 'FixedPageSaveOptionsData', 'ImageSaveOptionsData', 'OoxmlSaveOptionsData', 'TxtSaveOptionsBaseData' classes now is abstract.


## Enhancements in Version 22.1

- Added 'FieldOptions.FieldUpdateCultureName' to set Culture for fields
- Added 'DocumentEntry.Password' to set an encrypted password for appending document
- Added 'encryptedPassword2' query parameter to CompareDocuments to set an encrypted password for the second comparing document


## Enhancements in Version 21.12

- Added FieldOptions parameter to mail merge operations
- Added timeout parameter to api configuration
- Added dependsOn and resultOf features for batch requests
- Added query parameter 'displayIntermediateResults' for batch requests. If 'false', the last response in batch will be returned only. Default is 'true'
- Support encryption of 'CommonRequest.Password'. Automatic encryption of all passwords sent to the API server as request parameters.

## Enhancements in Version 21.11



## Enhancements in Version 21.10

- Removed 'GraphicsQualityOptions' image save option as it no longer supported.
- Added query parameter 'displayIntermediateResults' for batch requests. If 'false', the last response in batch will be returned only. Default is 'true'
- Added 'JsonDataLoadOptions' and 'XmlDataLoadOptions' to 'ReportEngineSettings'


## Enhancements in Version 21.8

- Added new api methods to get, insert, update or delete custom xml parts from documents.
- Added parameter 'ResultDocumentFormat' to Compare API
- Added 'ExportLanguageToSpanTag' pdf save option
- Added 'FlatOpcXmlMappingOnly' save option


## Enhancements in Version 21.7

- ImlRenderingMode option introduced witch is used to determine how ink (InkML) objects are rendered
- MaxCharactersPerLine option introduced which is used to specify the maximum number of characters per one line
- Added new API method to get a RSA public key to encrypt document passwords
- Added encryptedPassword common query option to pass an encrypted document password


## Enhancements in Version 21.6

- Implemented beta version of CompareDocumentOnline feature with both document sending in request
- CompareDocument method now can handle PDF files
- AcceptAllRevisionsBeforeComparison option introduced which is used to specify if accept all revisions before comparison


## Enhancements in Version 21.5

- Update dependencies in sdk


## Enhancements in Version 21.4

- Removed obsolete pdf save option 'EscapeUri'
- SaveOptions now contains CustomTimeZoneInfo to set custom timezone when SdtType.Date structured document tag updated from custom XML
- Url of child requests in batch can be full now (earlier it can be only relative)
- Added 'RquestId' header to all responses


## Enhancements in Version 21.3

- Added 'UpdateCreatedTimeProperty' save option
- Added Tables into HeaderFooter so it's possible to address paragraphs inside table which is located in headerfooter (sections/0/headersfooters/1/tables/0/rows/0/cells/0/paragraphs/0)


## Enhancements in Version 21.2

- Added delete all comments method


## Enhancements in Version 21.1

- Added online version for all API methods


## Enhancements in Version 20.11

- In configuration json file appSid / appKey has been replaced to clientId / clientSecret.
- In Words API initialization methods clientId parameter precedes clientSecret parameter.


## Enhancements in Version 20.10

- Internal API changes.


## Enhancements in Version 20.9

- Added Batch API feature


## Enhancements in Version 20.8

- Added new api method (PUT '/words/{name}/compatibility/optimize') which is allows to optimize the document contents as well as default Aspose.Words behavior to a particular versions of MS Word
- Added 'ApplyBaseDocumentHeadersAndFootersToAppendingDocuments' option to 'DocumentEntryList' for AppendDocument API
- WithoutNodePath methods have been removed, pass null values instead


## Enhancements in Version 20.7

- Added 'Markdown' save format
- Added endpoint to update paragraph format without node path (PUT '/words/{name}/paragraphs/{index}/format')


## Enhancements in Version 20.6

- Added new methods:
  - DeleteAllParagraphTabStopsWithoutNodePath
  - DeleteParagraphTabStopWithoutNodePath
  - GetParagraphTabStopsWithoutNodePath
  - InsertOrUpdateParagraphTabStopWithoutNodePath
  - InsertParagraphWithoutNodePath
  - UpdateParagraphFormatWithoutNodePath
  - UpdateParagraphListFormatWithoutNodePath
  - DeleteParagraphListFormatWithoutNodePath
- DrawingObject related methods have been changed body content. Special request classes are introduced instead of strings.
- InsertOrUpdateParagraphTabStop, DeleteParagraphTabStop methods have been changed parameter order
- OoxmlSaveOptionsData.CompressionLevel property has been added


## Enhancements in Version 20.5

- Added methods to work with Word document lists
  - GetLists
  - GetList
  - InsertList
  - UpdateList
  - UpdateListLevel
- Added methods to work with styles
  - GetStyles
  - UpdateStyle
  - InsertStyle
  - CopyStyle
  - GetStyleFromDocumentElement
  - ApplyStyleToDocumentElement
- Added methods to work with paragraph list format
  - GetParagraphListFormat
  - GetParagraphListFormatWithoutNodePath
  - UpdateParagraphListFormat
  - DeleteParagraphListFormat
- Added methods to work with paragraph tab stops
  - GetParagraphTabStops
  - InsertOrUpdateParagraphTabStop
  - DeleteAllParagraphTabStops
  - DeleteParagraphTabStop
- Added methods to build reports
  - BuildReport
  - BuildReportOnline
- Added Shading property to ParagraphFormat


## How to use the SDK?
The complete source code is available in this repository folder. You can either directly use it in your project via source code or get [Packagist distribution](https://packagist.org/packages/aspose-cloud/aspose-words-cloud) (recommended). For more details, please visit our [documentation website](https://docs.aspose.cloud/display/wordscloud/Available+SDKs).

### Prerequisites

To use Aspose Words Cloud PHP SDK you need to register an account with [Aspose Cloud](https://www.aspose.cloud/) and lookup/create App Key and SID at [Cloud Dashboard](https://dashboard.aspose.cloud/#/apps). There is free quota available. For more details, see [Aspose Cloud Pricing](https://purchase.aspose.cloud/pricing).

### Installation

#### Via Composer:
*aspose-words-cloud* is available on Packagist as the
[`aspose-words-cloud`](https://packagist.org/packages/aspose-cloud/aspose-words-cloud) package. Run the following command:
```bash
composer require aspose-cloud/aspose-words-cloud
```

To use the SDK, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

### Sample usage

```php
        // Start README example

        $api = new WordsApi($clientId, $clientSecret);
        // the step is optional, the default value is https://api.aspose.cloud
        $api->getConfig()->setHost($baseUrl);

        // upload file to cloud
        $upload_request = new Requests\UploadFileRequest($localFilePath, 'fileStoredInCloud.doc');
        $upload_result = $api->uploadFile($upload_request);

        // save as pdf file
        $saveOptions = new PdfSaveOptionsData(array("file_name" => 'destination.pdf'));
        $request = new Requests\SaveAsRequest('fileStoredInCloud.doc', $saveOptions);
        $result = $api->saveAs($request);

        // End README example
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
