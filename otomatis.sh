#!/bin/bash
sudo apt update -y
sudo apt install -y apache2 php php-mysql libapache2-mod-php mysql-client
sudo rm -rf /var/www/html/{*,.*}
sudo git clone https://github.com/paknux/crudsiswa.git /var/www/html
sudo chmod -R 777 /var/www/html
echo DB_USER=admin > /var/www/html/.env
echo DB_PASS=P4ssw0rd123  >> /var/www/html/.env
echo DB_NAME=crudsiswa  >> /var/www/html/.env
echo DB_HOST=rds11tjkt1.czt6n8ylfvyb.us-east-1.rds.amazonaws.com >> /var/www/html/.env