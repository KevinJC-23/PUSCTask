��#  Simplified Version of Task Management
 
Introduction
This project involves developing a basic task management web application that allows users to create, update, delete, and view tasks. The application includes user authentication for secure access.

Features
- Add a task
- Edit a task
- Delete a task
- User authentication (login & register)

Techology Stack
- Front-End:
  1. Programming Language: HTML, Css, JavaScript
  2. Icon Library: LineIcons, fontAwesome
- Back-End:
  1. Programming Language: PHP Python
  2. Framework: Laravel, Laravel Breeze
- Database: MySQL

Problems:
1. Integration of the Flask microservice to send email reminders for tasks nearing their due dates is currently not implemented.

Step of installation:
1. Download and install Composer from the following link: https://getcomposer.org/Composer-Setup.exe
2. Download and install Git from the following link: https://git-scm.com/download/win
3. Open Command Prompt and run the following command: winget install 7zip.7zip
4. Create a new Laravel project using Composer: composer create-project --prefer-dist laravel/laravel foldername
5. Update the .env file in your Laravel project folder with your database credentials
6. Create a migration file for the tasks table: php artisan make:migration create_tasks_table & then run the migration
7. Create a controller for handling task operations & update the TaskController with CRUD operations: php artisan make:controller create_tasks_table
8. Create the following view files for task operations:
   a. php artisan make:view task/index
   b. php artisan make:view task/form
   c. php artisan make:view task/delete
9. Download Laravel Breeze for authentication:
   a. composer require laravel/breeze --dev
   b. php artisan breeze:install
   c. npm install && npm run dev
   d. php artisan migrate
10. Start the Laravel development server: php artisan serve
11. Open your browser and navigate to http://localhost:8000/login or if you don't have the account you can navigate to: http://localhost:8000/register
