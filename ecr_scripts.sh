
# This script is a collecion of commands used to provision ecr \
# and ecs resources in AWS.

DEFAULT_REGION="eu-west-1"
AWS_PROFILE="sandbox"


# ECR parameters
ECR_REPO_NAME="personal/owby_32"

# ECR create repository
aws ecr create-repository \
    --repository-name $ECR_REPO_NAME \
    --region $DEFAULT_REGION \
    --profile $AWS_PROFILE

# get repository URI
ECR_REPO_URI=$(aws ecr describe-repositories \
                    --profile $AWS_PROFILE \
                    --region $DEFAULT_REGION \
                    --repository-names $ECR_REPO_NAME \
                    --query "repositories[0].repositoryUri" \
                    --output text)

# dockerize and push image to ECR
aws ecr get-login-password --profile $AWS_PROFILE --region $DEFAULT_REGION | docker login --username AWS --password-stdin $ECR_REPO_URI
docker build -t $ECR_REPO_NAME .

docker tag $ECR_REPO_NAME:latest $ECR_REPO_URI/$ECR_REPO_NAME:latest
docker push $ECR_REPO_URI/$ECR_REPO_NAME:latest