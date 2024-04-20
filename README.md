# Laravel-Docker
Laravel in Dcoker Compose

คำสั่ง ต่างๆ 
docker ps //ดู container ที่ทำงานอยู่
docker ps -a //ดู container ทั้งหมดที่มีอยู่ในระบบ

# Setup
run docker 

docker-compose up -d //เพื่อลง images ตามไฟล์ docker-compose

docker-compose build //เป็นการ run container เพื่อใช้งาน 


Copy File Env  
`
cp .env-example .env
`  
`
cp src/.env-example .env
`

Setup env  
`
vim .env
`  
`
vim src/.env
`  

# Run Docker  
`
docker-compose up -d
`


# Dependencies Install
`
docker-compose run composer install
`  
`
docker-compose run npm install
`  

# Setup Laravel
Generate Key  
`
docker-compose run artisan key:generate
`

# Phpmyadmin 
http://localhost:81
