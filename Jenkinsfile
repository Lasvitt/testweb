pipeline {
    agent any

    stages {
        stage('Clone Code') {
            steps {
                git url: 'https://github.com/Lasvitt/testweb.git', branch: "main"
            }
        }
        stage('Build') {
            steps {
                sh "docker build -t webtest ."
            }
        }
        stage('Push to Docker hub') {
            steps {
               withCredentials([usernamePassword(credentialsId:"eaebdb27-0b61-40b7-973b-3e2930d6bedf",passwordVariable:"dockerhubpass",usernameVariable:"dockerhubuser" )]){
                    sh "docker tag notes-app ${env.dockerhubuser}/webtest:latest"
                    sh "docker login -u ${env.dockerhubuser} -p ${env.dockerhubpass}" 
                    sh "docker push ${env.dockerhubuser}/webtest:latest"
                }
            }
        }
        stage('Deployement') {
            steps {
                echo 'Deploying container'
            }
        }
    }
}
