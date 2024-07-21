



## CLIENT NAME: 
    ATUHAISE ESTHER

## PROJECT TYPE: 
    Student Level
    Real Time Internship Reporting App

## DATE: 
    06/06/2024   

## DEVELOPER:		
    MogaHenze

## CONTACTS
    +256 701 243 139
    +256 771 977 854


## COPYRIGHT BY:		
    mogahenze.com


## Frame Works Used
    -   Laravel 10
    -   Bootstrap 5
    -   Jquery
    -   HTML5
    -   Javascript
    -   MySql
    -   Laravel Breeze
    -   Localization
        
## Database Set Up 
    Rename .env.example to .env
    Provide Your DataBase Connections 
    create database called mbh from phpMyaAdmin and import mbh.sql

## Important routes
    Migrate db tables: /migrate
    Clear route cache: /cache-clear
    Clear config cache:/config-cache
    Clear application cache:/clear-cache
    Clear view cache: /view-clear
    Clear route cache: /route-cache
    Clear config cache:/config-cache

## Project MVC's 

    Students
        php artisan make:controller StudentsController --resource
        php artisan make:model StudentsModel
        php artisan make:migration create_students_table --create=students_table


    Students Logs
        php artisan make:controller StudentsLogsController --resource
        php artisan make:model StudentsLogsModel
        php artisan make:migration create_students_logs_table --create=students_logs_table

    Courses Logs
        php artisan make:controller CourseController --resource
        php artisan make:model CourseModel
        php artisan make:migration create_course_logs_table --create=course_logs_table

   
    To add the new column
        php artisan make:migration add_new_column_to_students_table --table="students_table"

         public function up()
            {
                Schema::table('instructors_table', function($table) {
                    $table->text('description');
                });
            }
        public function down()
            {
                Schema::table('tasks', function($table) {
                    $table->dropColumn('description');
                });
            }

    
    php artisan make:controller BaseApiController
    php artisan make:controller InsertDataController



## Installation
    Clone the repo locally:
        git clone repo name
    rename .env.example  to .env
    set up database connection in .env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=DATABASE NAME
        DB_USERNAME='USER'
        DB_PASSWORD='PASSWORD'

## install api
    php artisan install:api

## Git Hub Pushing
    1 => git add .
    2 => git commit -m 'Removed Add New On Supervisor Side'
    3 => git branch -M Back-End
    4 => git push -u origin Back-End




by IT & Cybersecurity ExpertMarshall Gunnell 28 May 2024


History of Mobile Applications
Mobile applications date back to the early 1990s, with the introduction of basic mobile games like “Snake” on Nokia phones. However, the real evolution of mobile apps began with the launch of the iPhone in 2007 and the subsequent opening of the App Store in 2008.

This allowed third-party developers to create and distribute apps, leading to an explosion in the variety and number of available applications.

The Android operating system, developed by Google, followed suit with its own app marketplace, Google Play Store.

Over the years, mobile apps have evolved from simple utilities and games to complex programs that can perform tasks from social networking to banking, health monitoring, and beyond.