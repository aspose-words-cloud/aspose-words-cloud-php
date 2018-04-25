Feature: On fly document conversion
	In order to reuse document content for various purposes (such as read-only PDF distribution)
	A user should be able to convert Word document to different formats

@PutConvert
Scenario Outline: Conversion on fly
	Given I have specified document <DocName> to send it in request body
	And I have specified format <DestFormat> document to be converted
	When I execute conversion (PUT convert)
	Then document is returned as an attachment
	And attachment's format is <DestFormat>

	Examples: 
		| DocName           | DestFormat |
		| TableDocument.doc | pdf        |
		| test_doc.docx     | pdf        |
		| test_doc.docx     | png        |
		| test_doc.docx     | html       |
		| TableDocument.doc | html       |
		| TableDocument.doc | txt        |
		| TableDocument.doc | htmlfixed  |

@PutConvert
Scenario Outline: Conversion with storage
	Given I have specified document <DocName> to send it in request body
	And I have specified format <DestFormat> document to be converted
	And I have specified output path <OutPath>
	And There is no file <OutPath> on storage in output folder
	When I execute conversion (PUT convert)
	Then document <OutPath> is existed on storage in output folder
	
	Examples: 
		| DocName           | DestFormat | OutPath                                         |
		| TableDocument.doc | pdf        | out/putconvert/TableDocumentPdf.pdf             |
		| test_doc.docx     | pdf        | out/putconvert/test_docPdf.pdf                  |
		| test_doc.docx     | png        | out/putconvert/test_docPng.png                  |
		| test_doc.docx     | html       | out/putconvert/test_docHtml.html                |
		| TableDocument.doc | html       | out/putconvert/TableDocumentHtml.html           |
		| TableDocument.doc | txt        | out/putconvert/TableDocumentTxt.txt             |
		| TableDocument.doc | htmlfixed  | out/putconvert/TableDocumentHtmlfixed.htmlfixed |