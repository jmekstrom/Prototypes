# Prototypes

## PHP - Sessions

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b php-user-auth-basic` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin php-user-auth-basic` - This will push your files to gitHub on your new branch

### Getting Started

1. The following two files have been included your php-user-auth-basic folder
	- login_form.php
	- login_handler.php

2. Add your code to the appropriate files based on the below instructions

3. **DO NOT** edit this README file

## PHP Basic User Authentication
## Prototype 1
- In login_form.php do the following:
	- Create an input for username
	- Create an input for password
	- Create a login button that will be used to submit the form
	- Create a JS click handler for the login button
		- calls a function that performs an ajax call
		- url: login_handler.php
		- data: username, password
		- cache: false
		- method: post
		- dataType: 'text'
		- success: inform user if they successfully logged in or not
			- for now just `console.log` the response from the 'server' 
- In login_handler.php do the following:
	- Create a nested associative array to hold several users: `$user_info`
		- The array should hold all the users for your 'site', add at least **5** users
		- You will use this array to validate a user or reject them if there info doesn't match
		- **EXAMPLE**

	```PHP
	$user_info = [
		['id'=> 0, 'username'=>'dpaschal', 'password' => 'fluffybunnies'],
		['id'=> 0, 'username'=>'rickybobby', 'password' => 'shakeandbake'],
		['id'=> 0, 'username'=>'darkhelmet', 'password' => '12345']
	];
	```
		
	- get the data you received from your login_form.php
		- declare a variable to hold the username
		- declare a variable to hold the password
	- loop through the array till you find a matching username.
	 	- compare the user given data to the values in the `$user_info` array to see if there is a match
	- Once you get the correct record, check the password within that record
	- *NOTE:* any response from login_handler.php will show up in the ajax call's network call in login_form.php
	- If the username and password match:
		- use sessions, save the user's ID into the session variable under "user_id"
			- for example: `$_SESSION['user_id']=5`;
			- print out a success message
	- If the username and password DON'T match:
		- print out an error message

## Prototype 2
- In login_handler.php
	- Make a php array called $output
		- give it an element of "success".  Set it to true if login was successful, false if not
		- If successful, give it an element of "user_id".  Set it to the logging in user
		- Give it an element of 'message'.  Put an appropriate login message depending on login result
	- use json_encode() to encode $output into a string, $output_string
	- print $output_string
	- remember: if any other text is printed out alongside the json, the json conversion in the AJAX call will fail.  The only thing printed can be json
- In login_form.php
	- change dataType to 'json'
	- in the success handler, handle the incoming json data to inform the user of success or failure
	
## Prototype 3

- in phpfiddle
	- use sha1 to encrypt your password
	- `sha1([YOUR PASSWORD])`
	- for example:
		- `$encrypted_pass = sha1('fluffybunnies');`
		- `print($encrypted_pass);`
		- `// outputs 2beb0192eb1ca5a8756bc89a09b93036e1854049`
- in login_handler.php
	- update the password in your $user_info array to use sha1()
	- Validate your user using sha1()
		- update your user variable that holds the user given password to use `sha1()`
	
	```PHP	
		$user_info = [['id'=> 0, 'username'=>'dpaschal', 'password' => '2beb0192eb1ca5a8756bc89a09b93036e1854049']];
	```
	
## After you have completed all the above

1. add, commit, and push your updated files to your php-user-auth-basic branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin php-user-auth-basic` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - php-user-auth-basic`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your php-user-auth-basic branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_php-user-auth-basic.png?raw=true" alt="">
