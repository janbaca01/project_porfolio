## iss_project

Create .env file from .env.example

*To start docker*
First time you start you need to build the image 

    docker-compose up -d --build


Every next time, when you start

    docker-compose up -d



*To start project*
1. For composer commands 

    docker exec project_portfolio composer || do composer install


2. For Node commands

    docker run --rm -w /home/node/app -v $PWD:/home/node/app node:16 npm install || do npm install

    docker run --rm -w /home/node/app -v $PWD:/home/node/app --user 1000:1000 node:16 npm install ...



3. For Artisan commands

    docker exec project_portfolio php artisan ... || do php artisan migrate



*To stop docker*

    docker-compose down



*Usefull commands*

    docker exec project_portfolio php artisan route:list



*Components*