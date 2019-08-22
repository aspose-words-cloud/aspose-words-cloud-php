Feature: PutMailMerge
	In order to create personalized documents a user
	should be able to perform mail merge

@PutMailMergeOnline
Scenario Outline: Execute Mail Merge With Data File
	Given I have specified a template file <TemplateName> in request
	And I have specified a body <Body>
	When I execute mail merge online
	Then document is returned as an attachment

	Examples: 
	| TemplateName            | Body                        |
	| TestExecuteTemplate.doc | TestExecuteTemplateData.txt |
	
@PutMailMergeOnline
Scenario Outline: Execute Template
	Given I have specified a template file <TemplateName> in request
	And I have specified a body <Body>
	When I execute template online
	Then document is returned as an attachment

	Examples: 
	| TemplateName                      | Body                             |
	| TestExecuteTemplate.doc           | TestExecuteTemplateData.txt      |
	| TestExecuteTemplateTextFormat.doc | TestDataWithTextInHtmlFormat.xml |

@PutMailMergeOnline
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
	
@PutMailMerge
Scenario Outline: Execute Template With Custom Output
	Given I have specified a template file name <TemplateName> in storage
	And I have specified a body <Body>
	And I have specified a destFileName <DestinationFileName>
	When I execute template	
    Then document <DestinationFileName> is existed on storage in DocumentActions/MailMerge/ folder	

	Examples: 
	| TemplateName            | Body                        | DestinationFileName  |
	| TestExecuteTemplate.doc | TestExecuteTemplateData.txt | ExecutedTemplate.doc |

@PutMailMerge
Scenario Outline: Execute Template With Regions
	Given I have specified a template file name <TemplateName> in storage
	And I have specified a body <Body>
	And I have specified a destFileName <DestinationFileName>
	And I have specified withRegions <UseRegions>
	When I execute template
	Then document <DestinationFileName> is existed on storage in DocumentActions/MailMerge/ folder	

	Examples: 
	| TemplateName            | Body                        | DestinationFileName  | UseRegions |
	| TestExecuteTemplate.doc | TestExecuteTemplateData.txt | ExecutedTemplate.doc | true       |
	
@PutMailMerge
Scenario Outline: Execute Template With Regions And Not UseWholeParagraphAsRegion
	Given I have specified a template file name <TemplateName> in storage
	And I have specified a body <Body>
	And I have specified a destFileName <DestinationFileName>
	And I have specified withRegions <UseRegions>
	And I have specified useWholeParagraphAsRegion <UseWholeParagraphAsRegion>
	When I execute template
	Then document <DestinationFileName> is existed on storage in DocumentActions/MailMerge/ folder	

	Examples: 
	| TemplateName            | Body                        | DestinationFileName  | UseRegions | UseWholeParagraphAsRegion |
	| TestExecuteTemplate.doc | TestExecuteTemplateData.txt | ExecutedTemplate.doc | true       | false                     |

@PutMailMerge
Scenario Outline: Execute Template With Images
	Given I have specified a template file name <TemplateName> in storage
	And I have specified a body <Body>
    And I have specified a destFileName <DestinationFileName>
	When I execute template
	Then document <DestinationFileName> is existed on storage in DocumentActions/MailMerge/ folder
	And image should be rendered 

	Examples: 
	| TemplateName                      | Body                         | DestinationFileName                 |
	| TestMailMergeWithImages.doc       | TestDataWithRemoteImages.xml | ExecuteTemplateWithImagesResult.doc |