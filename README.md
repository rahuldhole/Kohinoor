<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



# Kohinoor
 A Laravel Project of Reservation, Booking and Invoice Management

1. Download install XAMPP with latest PHP version above 7.4
2. Download and install Composer
   Open Command Prompt
3. Download and install latest Node.js
   
4. Run following commands
   npm install -g npm@latest
   composer global require laravel/installer

   composer create-project laravel/laravel Kohinoor
   cd Kohinoor
   composer require laravel/jetstream
   php artisan jetstream:install livewire OR php artisan jetstream:install inertia
Goto config/jetstream.php
  uncomment feature  Features::profilePhotos(), 
   php artisan storage:link
   @if (Auth::check())
   Hi
   @else
   Bye
   @endif


Process:
Added Navigation Link for Booking Book
$php artisan make:controller BookController --resource
add route resource Book controller
Add AdminLTE template https://www.youtube.com/watch?v=r3OnX700Pi8&ab_channel=EstebanDelgadoInc

Create a new Database Table for CRUD
$php artisan make:migration billing_details_table
$php artisan make:migration consoles_table
$php artisan make:migration games_table
$php artisan make:migration create_reservation_table

if wanna Rollback last five table migration $php artisan migrate:rollback --step=5
check status of tables rollbacked/migrated
$php artisan migrate:status


add columns
$php artisan migrate --path=/database/migrations/2020_04_10_130703_create_reservation_table.php


$php artisan make:controller AdminLog --resource
created login and session in it

call STATIC FUNCTIONS of controller from view
@php
echo App\Http\Controllers\AdminLogController::viewcalling();
@endphp


$php artisan make:controller AdminController --resource
$php artisan make:controller UserController --resource
$php artisan make:controller ReservationController --resource

use Illuminate\Support\Facades\DB; in controller for Query Builder

$someVariable = Input::get("some_variable");

$results = DB::select( DB::raw("SELECT * FROM some_table WHERE some_col = '$someVariable'") );
DB::statement( 'ALTER TABLE HS_Request AUTO_INCREMENT=9999' );

current logged in user info  
$user = auth()->user(); var_dump($user->name);



















add db connection and base url in .env file in root folder
   php artisan migrate
   php artisan vendor:publish --tag=jetstream-views
   npm install
   npm run dev
   php artisan serve

   


Configuring project downloaded from GitHub
$ composer update
$ php artisan migrate
$ php artisan storage:link

1. Create copy of .env.example with name .env
 This is your environment file which is required by laravel project
2. Open .env file and update this file with your MySQL Connection credentilas
3. After that run following command

php artisan key:generate
php artisan config:cache
composer dump-autoload

4. After that run your migration commands

php artisan migrate

5. Now Run your project with following command

php artisan serve --host 0.0.0.0 --port 8000











Tutorial: https://www.youtube.com/watch?v=dYCek6yOBwo&list=PLWCLxMult9xeJEntBQFZfOxUzDvkuq6uM&index=3&ab_channel=ProgrammingwithVishal
Auth Project: https://laravelarticle.com/laravel-8-authentication-tutorial
Some Useful Commands:
php artisan make:controller User
npm cache clean --force
npm install
npm run dev
php artisan make:auth


Got landing page from Itch.io





When Online Upload: Don't forgot to change APP URL in config/app.php and in env


Solved Issues:
Jetstream Profile photo is 404 not found
Goto config/filesystem.php and take a zugzwang path
'root' => storage_path('/../public/storage'),
