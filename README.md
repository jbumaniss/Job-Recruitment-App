

# Job Recruitment App

# Used PHP/PHP Extensions For Laravel and etc/Laravel/Alpine.js/MySql 

## Functional application for job recruitment adn job offer display.

---

## Main Page
![Screenshot](screenshot.png)

---


# Requirements:

### Git
### Code Editor PHPSTORM or any other
### Mysql or any other database for information storing
### PHP
### PHP Extensions For Laravel and etc

---

# How To Set up:

## Execute commands specified in terminal successfully:

### 1. Clone or download with Git to your chosen directory

### 2. In your chosen directory open terminal
#### Terminal should be open in chosen directory root!

### 3. Open chosen directory with your chosen editor.

### 4. Rename .env.example file from your chosen directory root to .env in same directory.

### 5. Next fill the renamed .env file from your core directory with your credentials:
#### DB_HOST=your_mysql_ip_address
#### DB_DATABASE=your_databases_name
#### DB_USERNAME=your_mysql_database_username
#### DB_PASSWORD=your_mysql_database_password if is set if not leave empty

### 6. Run composer to install required packages

```
composer install
```

#### if a command failed because of requirements try this command instead

```
composer install --ignore-platform-reqs
```

### 7. Generate app key

```
php artisan key:generate
```

### 8. Migrate database migrations to fill your database with all the necessary tables and columns:

```
php artisan migrate
```

### 9. NOT REQUIRED! Populate database with fake text in jobs table with jobs:

```
php artisan db:seed
```

### 10. File Logo/photo Upload:
#### For logo file upload, which  go to "storage/app/public" you need to
#### create a symlink with the following command to make them publicly accessible:

````
php artisan storage:link
````

### 11. Run the App command:

````
php artisan serv
````

### 12. Open your browser and navigate to http://127.0.0.1:8000:
#### or if in your terminal is written different address navigate to it in your favorite web browser
#### or for shortcut press ctrl and left mouse button in your terminal on your generated address should open browser with served page

![Screenshot](phpartisanserv.png)

### 13. Register in register page to post job offers, to view job offers are public no need for registration.


## Enjoy!


---


###  Default images are located in public/images:
#### icon.png for favicon
#### logo.png for logo images
#### no_image.svg for alternative image if no image exists
