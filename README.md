## About
In this example, I am demonstrating how to set up and work with **One-to-Many Polymorphic Relationships**. The typical use case illustrated is where comments can be associated with multiple entities, such as articles, episodes and courses.

## How to install?
```bash
git clone https://github.com/royhridoy/relationships-in-laravel.git
cd polymorphic-relationships
composer install
cp .env.example .env
php artisan migrate
php artisan key:generate
php artisan serve
```
