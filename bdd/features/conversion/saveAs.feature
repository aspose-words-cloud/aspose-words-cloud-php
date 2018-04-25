Feature: Stored document conversion with save result to storage
	In order to reuse document content for various purposes (such as read-only PDF distribution)
	A user should be able to convert Word document to different formats

@saveAs
Scenario Outline: Convert document form storage and save to storage
	Given I have uploaded document with name <DocName> and subfolder is <SubFolder> to storage
	And I have specified save format <DestFormat> document to be converted
	And I have specified document <DocName> with folder <SubFolder> in URL
	And I have specified destFileName <OutPath>
	When I execute conversion from storage (POST SaveAs)
	Then document <OutPath> is existed on storage in <SubFolder> folder	
	
	Examples: 
	| DocName                  | DestFormat | OutPath                                     | SubFolder 						    |
	| TableDocument.doc        | pdf        | out/saveas/TableDocumentPdf.pdf             | DocumentActions/ConvertDocument/    |
	| test_doc.docx            | pdf        | out/saveas/test_docPdf.pdf                  | DocumentActions/ConvertDocument/    |
	| test_doc.docx            | png        | out/saveas/test_docPng.pdf                  | DocumentActions/ConvertDocument/	|
	| test_doc.docx            | html       | out/saveas/test_docHtml.html                | DocumentActions/ConvertDocument/	|
	| TableDocument.doc        | html       | out/saveas/TableDocumentHtml.html           | DocumentActions/ConvertDocument/	|
	| TableDocument.doc        | txt        | out/saveas/TableDocumentTxt.txt             | DocumentActions/ConvertDocument/	|
	| TableDocument.doc        | htmlfixed  | out/saveas/TableDocumentHtmlfixed.htmlfixed | DocumentActions/ConvertDocument/	|
	| TestEncodingDocument.txt | doc        | out/saveas/TableDocumentDoc.doc             | DocumentActions/ConvertDocument/	|


@saveAs
Scenario Outline: Convert document with specified encoding form storage and save to storage
	Given I have uploaded document with name <DocName> and subfolder is <SubFolder> to storage
	And I have specified save format <DestFormat> document to be converted
	And I have specified document <DocName> with folder <SubFolder> in URL
	And I have specified destFileName <OutPath>
	And I have specified encoding <LoadEncoding>
	When I execute conversion from storage (POST SaveAs)
	Then document <OutPath> is existed on storage in <SubFolder> folder	
	And symbols are encoded properly
	
	Examples: 
	| DocName                  | DestFormat | OutPath                         | LoadEncoding | SubFolder 						|
	| TestEncodingDocument.txt | doc        | out/saveas/TableDocumentDoc.doc | utf-16       | DocumentActions/ConvertDocument/	|

@saveAs
Scenario Outline: Convert pdf document to word and save to storage
	Given I have uploaded document with name <DocName> and subfolder is <SubFolder> to storage
	And I have specified save format <DestFormat> document to be converted
	And I have specified document <DocName> with folder <SubFolder> in URL
	And I have specified destFileName <OutPath>
	When I execute conversion from storage (POST SaveAs)
	Then document <OutPath> is existed on storage in <SubFolder> folder

	Examples: 
	| DocName                  | DestFormat | OutPath                                  | SubFolder 				    		|
	| awesome_table_in_pdf.pdf | docx       | out/saveas/awesome_table_in_pdfDocx.docx | DocumentActions/ConvertDocument/	|
	| Delivery.pdf             | docx       | out/saveas/DeliveryDocx.docx             | DocumentActions/ConvertDocument/	|
	| 45.pdf                   | docx       | out/saveas/45Docx.docx                   | DocumentActions/ConvertDocument/	|