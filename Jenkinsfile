pipeline {
    agent any

    environment {
        SSH_KEY = credentials('visaro-jenkins-key')
        EC2_USER = 'ubuntu'
        EC2_SERVER = '13.53.225.93'
        LARAVEL_APP_DIR = 'visaronigeria'
        GITHUB_USERNAME = 'your-github-username'
        GITHUB_PAT_CREDENTIAL_ID = 'your-credential-id-for-pat'
    }

    stages {
        stage('Connect to EC2') {
            steps {
                script {
                    // Print the current working directory for debugging
                    sh 'pwd'
                    
                    // SSH into the EC2 server
                    sh "ssh -o StrictHostKeyChecking=no -i $SSH_KEY $EC2_USER@$EC2_SERVER 'echo Hello, I am connected!'"
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    // Change to the desired directory and execute commands
                    sh """
                        ssh -o StrictHostKeyChecking=no -i $SSH_KEY $EC2_USER@$EC2_SERVER \
                        'cd $LARAVEL_APP_DIR && \
                        eval \"\$(ssh-agent -s)\" && \
                        ssh-add ~/.ssh/visaro-app-server && \
                        git pull origin main && \
                        docker-compose up -d --build'
                    """
                }
            }
        }

        stage('Deploy with GitHub PAT') {
            steps {
                script {
                    // Change to the desired directory and execute commands
                    sh """
                        ssh -o StrictHostKeyChecking=no -i $SSH_KEY $EC2_USER@$EC2_SERVER \
                        'cd $LARAVEL_APP_DIR && \
                        eval \"\$(ssh-agent -s)\" && \
                        ssh-add ~/.ssh/visaro-app-server && \
                        git pull https://$GITHUB_USERNAME:$GITHUB_PAT_CREDENTIAL_ID@github.com/visaronigeria/visaronigeria.git main && \
                        docker-compose up -d --build'
                    """
                }
            }
        }
    }
}
