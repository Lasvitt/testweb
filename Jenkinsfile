pipeline {
    agent any
        stages {
        stage('test') {
            steps {      
                sh "ls -la"
            }
        }
        stage('deploy') {
            steps {  
                sh "docker build ."
                sh "id"
                sh "whoami"
                sh "echo deploy"
            }
        }
    }
}
