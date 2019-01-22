# apache-docker
Apache + PHP + MySQL dockerize  

Instructions:

- Download docker
- Download docker-compose
- Clone the repo
- Create a file called docker-compose.yml on project root and fill it with the content on docker-compose.yml.example
- Customize your .yml if necesary 
- On root directory, run `docker-compose up` to test if it works
- Once testing is done, run `docker-compose up -d` to run the environment on background

You can use `docker ps -a` to see all running processes and `docker images` to see a list of downloaded images
