Feature: PutExecuteTemplate execute template without saving
	In order to create personalized documents a user
	should be able to perform mail merge

@PutExecuteTemplate
Scenario Outline: Execute Template
	Given I have specified a template file <TemplateName> in request
	And I have specified a body <Body>
	When I execute template online
	Then document is returned as an attachment

	Examples: 
	| TemplateName                      | Body                             |
	| TestExecuteTemplate.doc           | TestExecuteTemplateData.txt      |
	| TestExecuteTemplateTextFormat.doc | TestDataWithTextInHtmlFormat.xml |


@PutExecuteTemplate
Scenario Outline: Execute Template With Cleanup Options
	Given I have specified a template file <TemplateName> in request
	And I have specified a body <Body>
	And I have specified a cleanup option <Cleanup>
	When I execute template online
	Then document is returned as an attachment
	
	Examples: 
	| TemplateName                        | Body                       | Cleanup         |
	| TestMailMergeWithCleanupOptions.doc | TestCleanupOptionsData.xml | UnusedRegions   |
	| TestMailMergeWithCleanupOptions.doc | TestCleanupOptionsData.xml | UnusedFields    |
	| TestMailMergeWithCleanupOptions.doc | TestCleanupOptionsData.xml | EmptyParagraphs |
