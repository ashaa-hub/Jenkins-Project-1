pipeline {
    agent any

    stages {
        stage('Checkout Code') {
            steps {
                git branch: 'main', url: 'https://github.com/ashaa-hub/REPO.git'
            }
        }

        stage('Run PHP') {
            steps {
                powershell 'php index.php'
            }
        }
    }
}
