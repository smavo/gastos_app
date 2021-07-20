# Commands Laravel

## php artisan make:controller

## php artisan make:model

## php artisan make:migration

## php artisan migrate

## php artisan tinker

App\ExpenseReport::first()->expenses;

App\ExpenseReport::first();

App\Expense::first()->expenseReport;

## php artisan make:mail SummaryReport

## php artisan make:auth 
composer require laravel/ui "^1.0" --dev
php artisan ui vue --auth

# Limpiar Cache
php artisan cache:clear
php artisan config:clear
php artisan config:cache
