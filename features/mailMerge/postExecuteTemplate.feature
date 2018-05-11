Feature: PostExecuteTemplate execute template with saving to storage
	In order to create personalized documents a user
	should be able to perform mail merge

@PostExecuteTemplate
Scenario Outline: Execute Template With Custom Output
	Given I have specified a template file name <TemplateName> in storage
	And I have specified a body <Body>
	And I have specified a destFileName <DestinationFileName>
	When I execute template	
    Then document <DestinationFileName> is existed on storage in DocumentActions/MailMerge/ folder	

	Examples: 
	| TemplateName            | Body                        | DestinationFileName  |
	| TestExecuteTemplate.doc | TestExecuteTemplateData.txt | ExecutedTemplate.doc |

@PostExecuteTemplate
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

	
@PostExecuteTemplate
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

@PostExecuteTemplate
Scenario Outline: Execute Template With Images
	Given I have specified a template file name <TemplateName> in storage
	And I have specified a body <Body>
    And I have specified a destFileName <DestinationFileName>
	When I execute template
	Then document <DestinationFileName> is existed on storage in DocumentActions/MailMerge/ folder
	And image should be rendered 

	Examples: 
	| TemplateName                      | Body                         | DestinationFileName                 |
	| TestExecuteTemplateWithImages.doc | TestDataWithRemoteImages.xml | ExecuteTemplateWithImagesResult.doc |