<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Portfolio

This was the first portfolio I created, and the interesting aspect of this project is the admin panel developed in Laravel for managing projects with a full CRUD, which feeds data to the website for display.

### Objectives
* The main objective is to use Laravel to create an admin panel for managing projects.

## Installation Instructions
To run this project, you need PHP, MySQL, Apache, or Nginx installed. For more information, refer to [Laravel’s recommendations](https://laravel.com/docs/8.x).

### Steps:
1. Clone the repository: `git clone https://github.com/raortega8906/portafolio.git`
2. `$ cd portafolio`
3. `$ composer install`
4. `$ cp .env.example .env`
5. `$ php artisan key:generate`
6. Create a database in **MySQL** or **SQLite**
7. Add database credentials in the `.env` file
8. `$ php artisan migrate --seed`
9. `$ php artisan serve`
10. Log in with:
    - email: `admin@admin.com`
    - password: `password`
11. The admin panel will be accessible at the route: `/admin`

## License
This project is open source.

## Next Steps
You are now free to start using Portfolio.
