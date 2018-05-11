Feature: PutExecuteMailMerge
	In order to create personalized documents a user
	should be able to perform mail merge

@PutExecuteMailMerge
Scenario Outline: Execute Mail Merge With Data File
	Given I have specified a template file <TemplateName> in request
	And I have specified a body <Body>
	When I execute mail merge online
	Then document is returned as an attachment

	Examples: 
	| TemplateName            | Body                        |
	| TestExecuteTemplate.doc | TestExecuteTemplateData.txt |
