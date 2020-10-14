# zadelis-project

## Deployment

Backend services is deployed to AWS EC2 instance for now. Not ideal for scalability but is cheap and Ok for testing. We'll consider switching to ECS/Fragile later on when ready.

*Deployment Prerequisites* ⚠️
* Make sure you have EC2 instance with ssh encrypted key to connect with SSH
* EC2 should have an assigned security group with exposed outbound connection settings to HTTP:80, TCP:8183 and TCP:9000 and SSH.

*Deployment Steps*(first time deployment)
1. SSH to EC2 using your ecnrypted key
2. Docker CE Install : 
```
sudo amazon-linux-extras install docker
sudo service docker start
sudo usermod -a -G docker ec2-user
sudo chkconfig docker on
sudo yum install -y git
```
3. Reboot to verify it all loads fine on its own :
```
sudo reboot
```
4. ssh again
5. docker-compose install
```
sudo curl -L https://github.com/docker/compose/releases/download/1.22.0/docker-compose-$(uname -s)-$(uname -m) -o /usr/local/bin/docker-compose

sudo chmod +x /usr/local/bin/docker-compose
```
6. verify installation success
```
docker-compose version
```
7. copy and run this project
```
git clone https://github.com/GolovaVasilenko/zadelis-project.git
docker-compose up
```
