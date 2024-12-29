# Laravel Project Setup Guide

This guide will walk you through the process of setting up a Laravel project from scratch. Let's get started!

---

## What You'll Need

Before you begin, make sure you have the following installed on your system:
- [XAMPP](https://www.apachefriends.org/download.html) (or another PHP server)
- PHP (8.2 or higher is recommended)
- Composer (for managing PHP dependencies)
- laravel install 10.0    (Filament works with laravel 10.0, but may not support laravel 11.0 yet)
- Node.js and npm (for JavaScript dependencies)

---

## Setting Things Up

### 1. Clone the Project
Grab the project files from the repository:
```bash
git clone <https://github.com/shapeshkanth/TaskFlow.git>
cd <TaskFlow>
```

### 2. Create a `.env` File
The `.env` file is where all your app settings go.
- Copy the example file:
  ```bash
  cp .env.example .env
  ```
- Open `.env` and update the database settings to use MySQL:
  ```plaintext
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=task
  DB_USERNAME=root
  DB_PASSWORD=
  ```

### 3. Enable PHP Extensions
To make sure everything works, you need to enable some PHP extensions.
- Find your `php.ini` file by running:
  ```bash
  php --ini
  ```
- Open the file and look for these lines:
  ```plaintext
  ;extension=intl
  ;extension=zip
  ```
- Remove the `;` at the beginning of each line to enable them:
  ```plaintext
  extension=intl
  extension=zip
  ```
- Restart your Apache server via the XAMPP control panel.

### 4. Install Dependencies
Next, install all the libraries and tools the project needs:
- For PHP dependencies:
  ```bash
  composer install
  ```
- For JavaScript dependencies:
  ```bash
  npm install
  ```

### 5. Generate the App Key
- This key secures your app, so it’s a must-do step:
```bash
php artisan key:generate
```

### 6. Install Livewire
- Livewire allows for reactive components in Laravel.

```bash
composer require livewire/livewire
```
### 7. Install Filament (Admin Panel)

- Filament provides an admin panel for managing tasks.

```bash
composer require filament/filament
```
### 8. Publish the Filament assets:

bash
Copy code
php artisan filament:install
### 9. Install Laravel Breeze (Authentication Scaffolding)

- Laravel Breeze will provide the basic authentication views and controllers.

```bash

composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
```
- After installation, migrate the database to create necessary tables for authentication:

```bash
php artisan migrate
```
### 6. Create a Database
- Open the XAMPP control panel and start **MySQL** and **Apache**.
- Go to [phpMyAdmin](http://localhost/phpmyadmin).
- Create a new database called `Laravel`.

### 7. Migrate the Database
Set up your database tables by running:
```bash
php artisan migrate
```
- If you want a fresh start, use:
  ```bash
  php artisan migrate:fresh
  ```

### 8. Run the App
Finally, start the development server:
```bash
php artisan serve
```
- Open your browser and go to:
  ```
  http://127.0.0.1:8000
  ```

---

## Helpful Tips

- **File Permissions**: If you hit permission issues, run:
  ```bash
  chmod -R 775 storage bootstrap/cache
  ```
- **Check Installed PHP Extensions**: Run this to see what's enabled:
  ```bash
  php -m
  ```
- **Clear Composer Cache**: If Composer acts up, try:
  ```bash
  composer clear-cache
  ```

---

## You're All Set!
If you run into any issues, don't worry—Laravel's documentation is a great resource, and there’s always the community to help. Happy coding!

