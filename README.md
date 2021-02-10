# Travel Blog

This project is created to try and master PHP Laravel framework.

"Travel Blog" is a webpage that has blogposts and comments. Blogposts are related with comments 1:M connection. This blog has two parts: admin and public. If you want to use the administration page you must log in. After that you can create, update or delete blogposts and delete comments. User can only read public pages and create comments. </br>
WYSWYG ("TinyMCE") text editor was used to facilitate administrator text formatting.

# Technologies

- HTML5
- SCSS
- PHP 7.3 Laravel framework
- MySQL

# How to run

1. Install and run xampp/wamp/ampps.

2. Download or clone this repository to your computer (create LaravelBlog folder): `C:/Program Files/Ampps/www/LaravelBlog` .

3. Open the command line inside the project directory. 

4. Depending on where your `Composer` is installed run: </br>
`composer install` or `php composer.phar install`

5. Run the following command in the command line : </br>
`npm install` and `npm run dev`

6. Create SCHEMA `laravelblog` in the MySQL database using `root` user with password `mySQL`.

7.  Run the following command in the command line : </br>
`php artisan migrate` and `php artisan db:seed`

8. Check that the data has been created in the database.

9. Change `.env.example` file name into `.env`. Then change the following lines:

```
    APP_NAME="Travel Blog"

    APP_KEY=base64:Txvd1XsHmIysAHnoODHf/Jreb7KjaGEflZF+qc7qmEY=

    DB_DATABASE=laravelblog
    DB_USERNAME=root
    DB_PASSWORD=mysql
```

10. Go to the browser using this link: </br> 
`http://localhost/` </br> </br>
or if you want to see the administrator part: </br>
`http://localhost/blog-admin` or  `http://localhost/login`</br>
Default credentials:

```
    Username: admin
    Password: admin1234
```