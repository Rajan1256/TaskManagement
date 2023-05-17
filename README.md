# TaskManagement

1:- intsall a composer using below command:-
    <br>composer update

2:- generate a env file and key. for that please fire below command:-
    <br>fcp .env.example .env
    <br>php artisan key:generate

3:- create a database into mysql
    go to .env file and add the databse name, username and password.

4:- fire below command to migration and generate a tables.
    <br>php artisan migrate

5:- now to generate a dummy record into project and task tables please fire the below command
    <br>php artisan db:seed    

6:- Please run the below command to run the web application
    <br>php artisan server

    you will get "http://127.0.0.1:8000/" url please hit on browser


Note:-
    <br>http://127.0.0.1:8000/ this url is for user where user can not move the task.
    <br>http://127.0.0.1:8000/admin this url is for admin where admin can move the task.
