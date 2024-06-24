



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

   
    To add the new column
        php artisan make:migration add_new_column_to_students_logs_table --table="students_logs_table"

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
    2 => git commit -m 'Initial Uploads'
    3 => git branch -M Back-End
    4 => git push -u origin Back-End

