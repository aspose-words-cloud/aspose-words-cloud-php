parameters {
        string(name: 'branch', defaultValue: 'master', description: 'branch to test')		
		string(name: 'apiUrl', defaultValue: 'https://api-qa.aspose.cloud/', description: 'server url')		
}

def runtests(dockerImageVersion)
{
    dir(dockerImageVersion){
        try {
            stage('checkout'){
				checkout([$class: 'GitSCM', branches: [[name: params.branch]], doGenerateSubmoduleConfigurations: false, extensions: [[$class: 'LocalBranch', localBranch: "**"]], submoduleCfg: [], userRemoteConfigs: [[credentialsId: '361885ba-9425-4230-950e-0af201d90547', url: 'https://git.auckland.dynabic.com/words-cloud/words-cloud-php.git']]])
                withCredentials([usernamePassword(credentialsId: '6839cbe8-39fa-40c0-86ce-90706f0bae5d', passwordVariable: 'AppKey', usernameVariable: 'AppSid')]) {
					sh 'mkdir -p Settings'
                    sh 'echo "{\\"AppSid\\": \\"$AppSid\\",\\"AppKey\\": \\"$AppKey\\", \\"BaseUrl\\": \\"$apiUrl\\"}" > Settings/servercreds.json'
                }
            }
            
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
        } finally {                       
            deleteDir()
        }
    }
}

node('words-linux') {
    runtests("latest")
	runtests("7.1")
}