## SIAP DESA

#### Setup

* Clone Repo dulu coy
* Download dependency
``` bash
php composer.phar update
```

* Tambahin database (masih table user dari sono wokwok)
```

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

php artisan migrate:install
php artisan migrate
```
* Kalau ga bisa pakai artisan, import file *db_desa.sql* dari database **db_desa**
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
