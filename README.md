## How to use

1- start by installing required dependencies with composer

```
composer install
```

2- Create a new database and update you `.env` file with the required information

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={{DatabaseName}}
DB_USERNAME=root
DB_PASSWORD=
```

3- Run the migrations and seed the dummy data if you want

```
php artisan migrate && php artisan db:seed -class=PostSeeder
```

4- Serve using artisan

```
php artisan serve
```

5- Now you can test your application using Postman or your browser

---

### Caution

The CSRF token validation for `posts` route has been turned off for easier testing via Postman. If you're planning to use this as a boilerplate for your project please make sure to navigate to `app/Http/Middleware/VerifyCsrfToken.php` and remove this line

```
protected $except = [
    'posts/*'    // This line
];
```
