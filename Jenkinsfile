properties([
	gitLabConnection('gitlab'),
	[$class: 'ParametersDefinitionProperty', 
		parameterDefinitions: [
			[$class: 'StringParameterDefinition', name: 'branch', defaultValue: 'master', description: 'the branch to build'],
			[$class: 'StringParameterDefinition', name: 'apiUrl', defaultValue: 'https://api-qa.aspose.cloud', description: 'api url'],			
            [$class: 'BooleanParameterDefinition', name: 'ignoreCiSkip', defaultValue: false, description: 'ignore CI Skip'],
            [$class: 'StringParameterDefinition', name: 'credentialsId', defaultValue: '6839cbe8-39fa-40c0-86ce-90706f0bae5d', description: 'credentials id'],
		]
	]
])

def runtests(dockerImageVersion)
{
    def needToBuild = false

    dir(dockerImageVersion){
        try {
            stage('checkout'){
				checkout([$class: 'GitSCM', branches: [[name: params.branch]], doGenerateSubmoduleConfigurations: false, extensions: [[$class: 'LocalBranch', localBranch: "**"]], submoduleCfg: [], userRemoteConfigs: [[credentialsId: '361885ba-9425-4230-950e-0af201d90547', url: 'https://git.auckland.dynabic.com/words-cloud/words-cloud-php.git']]])
                
                sh 'git show -s HEAD > gitMessage'
                def commitMessage = readFile('gitMessage').trim()
                echo commitMessage
                needToBuild = params.ignoreCiSkip || !commitMessage.contains('[ci skip]')                   
                sh 'git clean -fdx'
                
                if (needToBuild) {
                    withCredentials([usernamePassword(credentialsId: params.credentialsId, passwordVariable: 'ClientSecret', usernameVariable: 'ClientId')]) {
                        sh 'mkdir -p Settings'
                        sh 'echo "{\\"ClientId\\": \\"$ClientId\\",\\"ClientSecret\\": \\"$ClientSecret\\", \\"BaseUrl\\": \\"$apiUrl\\"}" > Settings/servercreds.json'
                    }
                }
            }
            
            if (needToBuild) {
                def testImage = docker.build("asposewordsphp:${dockerImageVersion}", "./docker/${dockerImageVersion}")
                
                testImage.inside {
                    stage('build'){
                        sh "php composer.phar install --no-interaction"
                        sh "mkdir testReports"
                        try {
                            sh "php -dmemory_limit=1G ./vendor/bin/phpcs --report=checkstyle --report-file=testReports/codeStyleErrors ./src ./features/bootstrap || exit 0"
                        } finally {
                        }					
                    }
                
                    stage('tests'){   
                        try {
                            sh "php composer.phar install --no-interaction"
                            sh "php composer.phar dump-autoload -o"
                            sh "php vendor/bin/phpunit -c phpunit.xml"
                        } finally {
                            junit 'testReports/logfile.xml'
                        }
                    }
                
                    stage('bdd-tests'){
                        try {
                            sh "vendor/bin/behat --config=behat.yml --format=junit --out=testReports/bdd || exit 0"
                        } finally {
                            junit 'testReports/bdd/*.xml'
                        }
                    }
                }        
            }
        } finally {                       
            deleteDir()
        }
    }
}

node('words-linux') {
    runtests("latest")
	runtests("7.1")
}