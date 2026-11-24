# Weekly Schedule Manager

A small Laravel application for managing a weekly schedule: weekdays, the rows
within each day, and the options attached to them.

## What it does

- CRUD for weekdays
- CRUD for the rows belonging to a weekday
- CRUD for the options attached to rows
- Eloquent models with migrations

## Stack

Laravel · PHP · MySQL · Blade

## Running locally

```bash
cd Laravel_app
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

## Note

A practice project, written to work through Laravel's routing, Eloquent
relationships and migrations.
