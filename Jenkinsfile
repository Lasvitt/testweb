pipeline {
    agent any
    stages {
        stage('composer') {
            steps {      
                sh 'composer install --prefer-dist --optimize-autoloader'
                sh 'composer require --dev phpmetrics/phpmetrics friendsofphp/php-cs-fixer --no-interaction --prefer-dist --optimize-autoloader'
            }
        }
        stage('build') {
            steps {  
                sh 'id'
                sh 'rm -Rf ./build/'
                sh 'mkdir -p ./build/coverage'
                sh 'mkdir -p ./build/logs'
                sh 'mkdir -p ./build/phpmetrics'
            }
        }
        stage('docker') {
            steps {  
                sh 'docker build .'
            }
        }
    }
}
