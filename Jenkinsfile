pipeline {
    agent any   // runs on master node

    stages {

        stage('Checkout Code') {
            steps {
                git branch: 'main',
                    url: 'https://github.com/mrudul08cloud/docker-compose.git'
            }
        }

        stage('Stop Old Containers') {
            steps {
                sh 'docker compose down || docker-compose down || true'
            }
        }

        stage('Build Images') {
            steps {
                sh 'docker compose build || docker-compose build'
            }
        }

        stage('Start Containers') {
            steps {
                sh 'docker compose up -d || docker-compose up -d'
            }
        }

        stage('Verify Containers') {
            steps {
                sh '''
                echo "Running containers:"
                docker ps

                docker ps -q | grep . || exit 1

                echo "Containers are running successfully"
                '''
            }
        }
    }
}
