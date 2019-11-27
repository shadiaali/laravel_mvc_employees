# laravel_mvc_employees
An employees website with add, edit and delete employees built with Laravel and blade templating. 

### Features
- Add New Employee
- Edit Employee
- Delete Employee
- Ajax Employee Search 
- Individual Employee Details Pages

## Setup
1. Start ```MAMP/WAMP``` servers
2. In ```phpMyAdmin``` create a new database called ```db_mvc```. 
3. ```cd``` to ```htdocs/laravel_mvc_employees``` 
4. Install the node modules. Run ```npm i``` within the folder directory.
5. Install composer. Run ```composer install``` within the folder directory. 
6. Migrate the database. Run ```php artisan migrate``` within the folder directory.
7. Seed the database with dummy info. Run ```php artisan db:seed``` within the folder directory.
8. Serve the project. Run ```php artisan serve``` within the folder directory. 
9. The project should be served on ```http://127.0.0.1:8000/employees```

