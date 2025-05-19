# CRUD Siswa

#
# Cara mendeploy Aplikasi

## 1. Buat File .env

File .env adalah file environment sistem mirip seperti file konfig.php
#
isi file .env sebagai berikut

```.env
DB_USER=....  (isi dengan user RDS)
DB_PASS=....  (isi dengan password RDS)
DB_NAME=....  (isi dengan nama database yang akan dibuat di RDS)
DB_HOST=....  (isi dengan Endpoint RDS)
```

contoh:

```.env
DB_USER=admin
DB_PASS=P4ssw0rd123
DB_NAME=psat2425
DB_HOST=rdsku.czt6n8ylfvyb.us-east-1.rds.amazonaws.com
```

# Perintah untuk deploy
```.env
sudo apt update -y

sudo apt install -y apache2 php php-mysql libapache2-mod-php mysql-client

sudo rm -rf /var/www/html/{*,.*}

sudo git clone https://github.com/paknux/crudsiswa.git /var/www/html

sudo chode -R 777 /var/www/html

echo DB_USER=admin > /var/www/html/.env
echo DB_PASS=P4ssw0rd123  >> /var/www/html/.env
echo DB_NAME=crudsiswa  >> /var/www/html/.env
echo DB_HOST=rds11tjkt1.czt6n8ylfvyb.us-east-1.rds.amazonaws.com >> /var/www/html/.env
```

atau bisa dibuat menjadi shell script, misal diberi nama otomatis.sh

### otomatis.sh
```.env
#!/bin/bash
sudo apt update -y
sudo apt install -y apache2 php php-mysql libapache2-mod-php mysql-client
sudo rm -rf /var/www/html/{*,.*}
sudo git clone https://github.com/paknux/crudsiswa.git /var/www/html
sudo chode -R 777 /var/www/html
echo DB_USER=admin > /var/www/html/.env
echo DB_PASS=P4ssw0rd123  >> /var/www/html/.env
echo DB_NAME=crudsiswa  >> /var/www/html/.env
echo DB_HOST=rds11tjkt1.czt6n8ylfvyb.us-east-1.rds.amazonaws.com >> /var/www/html/.env
```

### cara menjalankan otomatis.sh setidaknya ada 2 cara
1. Dieksekusi langsung
```.env
$ bash otomatis.sh
```

2. Dibuat menjadi executable kemudian dieksekusi
```.env
$ chmod +x otomatis.sh
$ ./otomatis.sh
```


## 2. Jalankan 
Jalankan dengan username dan password default berikut ini
#
### username = admin
### password = 123
#

Kemudian inputkanlah data sesuai dengan datamu


#
# Pengumpulan Hasil
Catat Link repositry anda

Screenshoot halaman Data Siswa (dashboard.php) yang sudah ada namamu

Kumpulkan ke Form yang ada di dalam GC 

#

