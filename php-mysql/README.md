# Prototypes

## PHP - MySQL

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b php-mysql` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin php-mysql` - This will push your files to gitHub on your new branch

### Getting Started

1. The following files have been included in the `php-mysql` folder
	- index_insert.php
	- index_select.php
	- mysql_connect.php.config

2. **DO NOT** edit this README file

## MySQL

## Prototype 1
- you should never store your database credentials on github, even if it is private
	- the .gitignore file is set to ignore mysql_connect.php
	- so we create a "config" file called mysql_connect.php.config which has the default dummy values
	- copy the mysql_connect.php.config to mysql_connect.php
	- change the values in mysql_connect.php to your database credentials
		- default MAMP mysql username is 'root'
		- default MAMP mysql password is 'root'
		- *NOTE:* If you go to the MAMP start page `http://localhost/MAMP/` it displays the MySQL credentials
		- use the database you created in the `mysql-basics` prototype
		- keep in mind that for production environments, using the root account for an application is not a good idea, but sufficient for now

## Prototype 2
- in index_select.php:
	- require your `mysql_connect.php` file so you have to make a mysql connection available to any code below the require
	- make a variable, `$query`, and put in the "SELECT" query that you made in the mysql-basics Prototype 2
	- using `mysqli_query($conn, $query)`, execute the query.  Make sure to save the return value from `mysqli_query()` into a variable called `$result`
	- check if the query resulted in any data with `mysqli_num_rows()`.  It needs to know which result to check on!
	- if `mysqli_num_rows()` tells you that there were rows found, use `mysqli_fetch_assoc()` to get the data, one row at a time
		- you might get any number of rows, find each of them
	- print out each row returned
	
	**NOTE:** Notice the **i** at the end of `mysql` for the mysql functions ex: mysql**i**_query(), it is very important. If something isn't functioning as planned or you are getting weird errors check to make sure you didn't mistype the function name by leaving the **i** off the end of mysql

## Prototype 3
- in index_insert.php:
	- make another require to `mysql_connect.php`
	- make another `$query` variable, but this time use your "INSERT" query from mysql-basics Prototype 2
	- instead of `mysqli_num_rows()`, use `mysqli_affected_rows()` to detect how many rows are changed by a query
		- `mysqli_affected_rows()` doesn't require the result variable, it always tells you the last update/insert/delete
	- run your `index_insert.php` then run `index_select.php` to see the new data

## Prototype 4
- create a new page, form.php, 
	- with the necessary fields for your todo item table
		- title
		- details
		- timestamp (allow this in any human form)
		- choose an arbitrary field to add in
	- in the form "action", specify your `index_insert.php` file
	- in the form "method", use POST
- in your index_insert.php
	- print out your $_POST variable to ensure you are getting all of your data
	- if you get the data you should have, change your "INSERT" query to take the data from your $_POST variable instead of hard coding
	- assume a user id from your user table
- review your todo item list from index_select.php

## Prototype 5
- copy your login files from the `php_user_auth_basic` prototype
- in your `login_handler.php` file
	- instead of accessing the information from an array
		- generate a "SELECT" query to your users table.
			- make sure to encrypt your password if your user table has encrypted passwords
			- if your select returns a row, you know you have a valid user
			- `mysqli_fetch_assoc()` to retrieve the user data
			- save the user's ID into a `$_SESSION` variable
- create a `logout.php` file
	- use `session_destroy()` to remove the logged in user
- in your index_insert.php file
	- read the current user_id from your `$_SESSION` variable
	- if it isn't set, don't proceed with the mysql statement
		- exit() is a great way to stop php execution prematurely
	- use the user id in your insert statement, rather than the previous hard-coded value

## After you have completed all the above

1. add, commit, and push your updated files to your php-mysql branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin php-mysql` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - php-mysql`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your php-mysql branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_php-mysql.png?raw=true" alt="">