# PHP-Reusable-Class

Creating a class that can be re-used in terms of slecting, updating and running other mysql queries with Object Oriented Programming in PHP.

## Note

In the database connection, the host address, host username, host password and database name used are to be changed to your own names respectively.

## Explained

Inside the classes folder, there are four (4) files,
- control.php
- dbh.php
- modal.php
- view.php

And inside the includes folder, there is only one folder, classautoload.php.... 

**The control.php file** is a file that only handles the operations that goes on inside the database, like when inserting or updating a record in the database.

**The dbh.php** handles the database connection.

**The modal.php** handles all the methods and function... In the case of this project, it handles all the queries that will go on in the project, like all the queries that will happen with the database.

**The view.php** file is a file that will be used when trying to echo something from the database on the screen.

Then in the includes foldeer, **the classautoload.php** is a file that will refer to a class inthe classes folder when ever and instance of it is being called in the project.

## Testing


To test the code, all you have to do is create an instance/object of any class created in the classes folder, just like in the index.php file....
