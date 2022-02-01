# community

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

# requirment
php >= 8.0.12
laravel 8+

# backend setup

Run following command.

1.composer install
2.Create .env file
2.php artisan key:generate
3.php artisan migrate
4.php artisan db:seed
5.php artisan jwt:secret

# backend env file

Add this 2 constant to env file

API_USER_EMAIL=admin@gmail.com
API_USER_PASSWORD=password
and copy other jwt constant from .env.example file

# Run laravel app 

php artisan serve get local link

Now check in post man using below route

1. For authorization 

 url : {Local link}/api/auth/login  
 mathod: post
 form-data:[email,password]

2. For get

 url : {Local link}/api/getdata?page=3&size=10 or {Local link}/api/getdata?type=all
 mathod: get 
 param:[page,size] or [type] (optional)

3. For insert

 url : {Local link}/api/insertdata
 mathod: post 
 param:[title,content]

4. For update

 url : {Local link}/api/updatedata
 mathod: put
 raw (json):{"title":"foo","content":"bar"}

5. For delete

 url : {Local link}/api/deletedata/{id}
 mathod: delete

# frontend setup

# requirment
vue 3  global in your system

open new termnal and go to frontend folder .

# vue 3

1. npm install
2. create .env file in frontend folder.
3. VUE_APP_BASE_URL= '{laravel Local link}/api'
4. npm run serve
5. login with 
    admin@gmail.com 
    password
 




