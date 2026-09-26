# Laravel-Task-Manager-files
  #Personal Task Manager

A simple Laravel CRUD project for managing personal tasks.

## Project Code
WST21-PM-2026-SF

## Student Name
Isaiah Cedric Delgado

## Course & Year
BS Information Technology /  2nd year 

## Database Used
MySQL

## Features
- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Status
- Task due date
- Simple dashboard counters
- Form validation
- Responsive design

## Technologies
- Laravel
- PHP
- MySQL
- Blade
- HTML/CSS

## How to Run

### 1. Create the Laravel project
If you are starting from an empty folder, create a Laravel project first:

```bash
composer create-project laravel/laravel personal-task-manager
```

Then copy the files from this package into that Laravel project, keeping the same folder structure.

### 2. Create the MySQL database
Open XAMPP and start **Apache** and **MySQL**.

Open phpMyAdmin and create a database named:

```text
personal_task_manager
```

### 3. Configure `.env`

Set these values in your Laravel `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=personal_task_manager
DB_USERNAME=root
DB_PASSWORD=
```

If your MySQL root account has a password, put it in `DB_PASSWORD`.

### 4. Run the migration

```bash
php artisan migrate
```

### 5. Start Laravel

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```

## Laravel Flow

```text
Browser
   ↓
Route
   ↓
TaskController
   ↓
Task Model
   ↓
MySQL Database
   ↓
Blade View
   ↓
Browser
```

## Main Files

- `app/Models/Task.php` - Task model
- `app/Http/Controllers/TaskController.php` - CRUD controller
- `database/migrations/2026_09_26_000000_create_tasks_table.php` - tasks table
- `routes/web.php` - application routes
- `resources/views/layouts/app.blade.php` - main layout
- `resources/views/tasks/index.blade.php` - task list
- `resources/views/tasks/create.blade.php` - add task form
- `resources/views/tasks/edit.blade.php` - edit task form
