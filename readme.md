## SIAP DESA

[![Build Status](http://107.170.249.8/buildStatus/icon?job=SIAP Desa)](http://107.170.249.8/job/SIAP%20Desa/)

#### Setup

* Clone Repo dulu coy
``` bash
git clone https://github.com/wahyuoi/Siap-Desa.git
```

* Download dependency
``` bash
php composer.phar update
```
* Buat database **db_desa** di phpmyadmin (atau sejenis)
* Buat atau edit file **.env**, isi dengan

    ```
APP_ENV=local
APP_DEBUG=true
APP_KEY=QAzvMBzqXO4VT9dki2vNAbGsR5JmkWdw
DB_HOST=localhost
DB_DATABASE=db_desa
DB_USERNAME=USER_DATABASE
DB_PASSWORD=PASSWORD_DATABASE
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync
```
* Tambahin table ke database
```
php artisan migrate:install
php artisan migrate
php artisan db:seed
```
* Kalau ga bisa pakai artisan, import file *db_desa.sql* dari database **db_desa**

* Composer autoload
```
php composer.phar dumpautoload
```

* Set permission untuk vendor/ dan storage/ jadi 777, agar tidak kena WSOD 
```
chmod 777 -R storage/
chmod 777 -R vendor/
```

* Live website ada di http://dev.vesperia.id/siap-desa/
* Jenkins CI ada di http://107.170.249.8/job/SIAP%20Desa/