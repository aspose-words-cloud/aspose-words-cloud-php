def runtests(dockerImageVersion)
{
    dir(dockerImageVersion){
        try {
            stage('checkout'){
                checkout([$class: 'GitSCM', branches: [[name: '*/master']], doGenerateSubmoduleConfigurations: false, extensions: [], submoduleCfg: [], userRemoteConfigs: [[credentialsId: '9d6c4dfa-042c-4ed1-81c7-9175179dddda', url: 'https://github.com/aspose-words-cloud/aspose-words-cloud-php.git/']]])
                withCredentials([usernamePassword(credentialsId: '6839cbe8-39fa-40c0-86ce-90706f0bae5d', passwordVariable: 'AppKey', usernameVariable: 'AppSid')]) {
                    sh 'echo "{\\"AppSid\\": \\"$AppSid\\",\\"AppKey\\": \\"$AppKey\\", \\"BaseUrl\\": \\"https://auckland-words-cloud-staging.dynabic.com\\"}" > Settings\servercreds.json'
                }
            }
            
            docker.image('php:' + dockerImageVersion).inside{
                stage('build'){  
					sh "apt-get install zip unzip"
                    sh "php composer.phar install --no-interaction"
                    sh "php -dmemory_limit=1G ./vendor/bin/phpcs --report-file=testReports/codeStyleErrors ./src"                                       
                }
            
                stage('tests'){   
					try {
						sh "php vendor/bin/phpunit -c phpunit.xml"
					} finally {
						junit 'phpunit.xml'
					}
                }
            
                stage('bdd-tests'){
					try {
						//sh "npm run gulp cucumber"
					} finally {
						//cucumber 'reports/**.json'
					}
                }
            }        
        } finally {                       
            deleteDir()
        }
    }
}
properties([pipelineTriggers([[$class: 'GitHubPushTrigger'], pollSCM('H/15 * * * *')])])
node('billing-qa-ubuntu-16.04.4') {
    
    parallel ( failFast: false,
        PhpLatest: { runtests("latest") },       
    )    
   
}