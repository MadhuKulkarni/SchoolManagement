# WEBAPI
PHP Restful API Slim Framework CRUD


# Overview
Slim is a PHP micro framework that helps you quickly write simple yet powerful web applications and APIs. (https://www.slimframework.com/)

you can Download SLIM Framework from [Here](https://github.com/slimphp/Slim).


# Prerequisites
*	PHP + Mysql (With Mysqlnd extension)
* WAMP / XAMPP Server (I will be using wamp server) 
* PHP IDE
* Postman to test our API: https://www.getpostman.com/apps

# MYSQL
 use school_mgmt_api database
 
### Create database and tables
```sql
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(35) NOT NULL,
  `author` varchar(35) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
```

# Creating REST API

First you need to create a PHP Project. You have to create it in the root directory of your server like it will be htdocs folder in case of xampp and www in case of wamp.

## Project structure

![capture 1](https://github.com/anicetkeric/BookSlimAPI/blob/master/screen/1.PNG)

* Data: class representative our book table
* libs : All the third party libraries goes here. In our case we place Slim library here
* Manager:  database business logic
* index.php : Takes care of all the API requests
* .htaccess : Rules for url structure and other apache rules 


## Testing Our API

| Description        | Method |Route  | Params
| ------------- |:-------------:| -----|-----|
| Creating a new book    | POST |http://localhost/webapi/api/book |title, author, price |
|Listing all books      | GET      |  http://localhost/webapi/api/books | none
| Listing single book | GET     |   http://localhost/webapi/api/book/{book_id} | none
| Deleting a book |DELETE      |   http://localhost/webapi/api/book/{book_id} | none
| Updating a book | PUT     |   http://localhost/webapi/api/book/{book_id} | id, title, author, price|



* http://localhost/webapi/api/book/1

![capture 5](https://github.com/anicetkeric/BookSlimAPI/blob/master/screen/5.PNG)
