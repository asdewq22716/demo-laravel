# เลือกภาพพื้นฐานที่มี PHP 8.2 และ Apache
FROM php:8.2-apache

# Add laravel user
RUN useradd -ms /bin/bash laravel
# ตั้งค่า timezone เป็น UTC
RUN echo "date.timezone = UTC" > /usr/local/etc/php/conf.d/timezone.ini

# เพิ่ม extension ที่จำเป็น (ตัวอย่างเช่น mysqli, pdo, pdo_mysql)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# อัปเดตและติดตั้งเครื่องมือที่จำเป็น
RUN apt-get update && \
    apt-get install -y \
    libzip-dev \
    zip

# ติดตั้งส่วนขยาย zip
RUN docker-php-ext-install zip

# ลบไฟล์ index.html เดิมของ Apache ที่มีอยู่
RUN rm -rf /var/www/html/index.html

# สำเนาไฟล์ของโปรเจ็กต์ PHP ไปยังโฟลเดอร์ที่ถูกต้องใน container
COPY ./src /var/www/html

# กำหนดสิทธิ์ให้กับโฟลเดอร์ที่ถูกสำเนาเพื่อให้ Apache สามารถเข้าถึงไฟล์ได้
RUN chown -R www-data:www-data /var/www/html

# เปิดการใช้งาน rewrite module ของ Apache
RUN a2enmod rewrite
