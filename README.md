# Simplified Version of Task Management
 
## Introduction
This project involves developing a basic task management web application that allows users to create, update, delete, and view tasks. The application includes user authentication for secure access.

## Features
- Add a task
- Edit a task
- Delete a task
- User authentication (login & register)

## Techology Stack
- Front-End:
  - Programming Language: HTML, Css, JavaScript
  - Icon Library: LineIcons, fontAwesome
- Back-End:
  - Programming Language: PHP Python
  - Framework: Laravel, Laravel Breeze
- Database: MySQL

## Problems:
- Integration of the Flask microservice to send email reminders for tasks nearing their due dates is currently not implemented.

## Step of installation:
- Download and install Composer from the following link: https://getcomposer.org/Composer-Setup.exe
- Download and install Git from the following link: https://git-scm.com/download/win
- Open Command Prompt and run the following command: winget install 7zip.7zip
- Create a new Laravel project using Composer: composer create-project --prefer-dist laravel/laravel foldername
- Update the .env file in your Laravel project folder with your database credentials
- Create a migration file for the tasks table: php artisan make:migration create_tasks_table & then run the migration
- Create a controller for handling task operations & update the TaskController with CRUD operations: php artisan make:controller create_tasks_table
- Create the following view files for task operations:
  - php artisan make:view task/index
  - php artisan make:view task/form
  - php artisan make:view task/delete
- Download Laravel Breeze for authentication:
  - composer require laravel/breeze --dev
  - php artisan breeze:install
  - npm install && npm run dev
  - php artisan migrate
- Start the Laravel development server: php artisan serve
- Open your browser and navigate to http://localhost:8000/login or if you don't have the account you can navigate to: http://localhost:8000/register
