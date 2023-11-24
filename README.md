# Job Recruitment App

A functional application developed using PHP with Laravel, Alpine.js, and MySql, designed for job recruitment and job offer display.

## Main Page
![Main Page Screenshot](screenshot.png)

## Requirements

- Git
- Code Editor (e.g., PHPStorm or any other)
- MySql (or any compatible database)
- PHP
- PHP Extensions for Laravel

## Installation Guide

### Setting Up

1. **Clone the Repository**: 
   Clone or download the repository to your desired directory.

2. **Terminal Setup**: 
   Ensure the terminal is opened at the root of the chosen directory.

3. **Editor Configuration**: 
   Open the directory with your preferred code editor.

4. **Environment Configuration**: 
   Rename `.env.example` file at the root to `.env`. Then, update the `.env` file with your database credentials:

    DB_HOST=your_mysql_ip_address

    DB_DATABASE=your_databases_name

    DB_USERNAME=your_mysql_username

    DB_PASSWORD=your_mysql_password
   
5. **Install Dependencies**: 
Run `composer install`. If there are any issues, use `composer install --ignore-platform-reqs`.

6. **Generate Application Key**:
php artisan key:generate

7. **Database Migration**: 
Execute `php artisan migrate` to set up the necessary database tables and columns.

8. **Optional Database Seeding**:
Populate the database with sample data using `php artisan db:seed` (not required).

9. **Logo/Photo File Upload Configuration**:
Create a symlink for logo file upload to make them accessible publicly:

10. **Run the Application**:
 ```
 php artisan serv
 ```
 Then, navigate to the address indicated in the terminal (default: `http://127.0.0.1:8000`).

### Accessing the Application

- **Post and View Job Offers**: Register to post job offers. Viewing job offers is public and does not require registration.

### Default Resources

- Favicon: `public/images/icon.png`
- Logo Images: `public/images/logo.png`
- Placeholder Image: `public/images/no_image.svg`

## Conclusion

Enjoy exploring the functionalities of the Job Recruitment App, a specialized platform for job postings and searches.

---

**Disclaimer**: This application is designed for demonstration and educational purposes and is not recommended for production use without further modifications.
