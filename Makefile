# กำหนดตัวแปร
DOCKER_COMPOSE = docker-compose
DOCKER_COMPOSE_FILE = docker-compose.yml

# กำหนดเป้าหมาย
.PHONY: up down build exec composer npm

# เป้าหมายเริ่มต้น
up:
    $(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) up -d

# เป้าหมายสำหรับหยุด containers
down:
    $(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) down

# เป้าหมายสำหรับสร้าง images
build:
    $(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) build

# เป้าหมายสำหรับเข้า shell ของ container PHP
exec:
    $(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) exec php bash

# เป้าหมายสำหรับรัน composer install
composer:
    $(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) run --rm composer install

# เป้าหมายสำหรับรัน npm install
npm:
    $(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) run --rm npm install

artisan:
    #docker-compose exec app //ใช้คำสั่งนี้ในการเข้าถึงfolder app ในdocker และทำการติดตัง controller
    #รูปแบบการใช้งาน 
    #docker-compose exec app php artisan make:controller ชื่อของControllerที่จะสร้าง
    #docker-compose exec app php artisan make:controller AdminController

