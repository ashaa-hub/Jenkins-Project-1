pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git(
                    url: 'https://github.com/ashaa-hub/Jenkins-Project-1.git',
                    branch: 'main',
                    credentialsId: 'fd3b619b-765a-4659-83be-a520032a8bb0'
                )
            }
        }

        stage('Run PHP') {
            steps {
                bat 'php index.html'
            }
        }
    }
}
