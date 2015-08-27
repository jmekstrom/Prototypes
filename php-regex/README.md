# Prototypes

## PHP - Regex

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b php-regex` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin php-regex` - This will push your files to gitHub on your new branch

### Getting Started

1. The following two files have been included
	- receiver.php
	- sender.php

2. Add your code to the appropriate files based on the below instructions

3. **DO NOT** edit this README file

## PHP Regex

## Prototype 1:
- In receiver.php
	- write a PHP statement to print out the $_POST data coming from sender.php

## Prototype 2:
- In receiver.php
	- write a PHP statement to loop through the $_POST data coming from sender.php
		- For a for loop, count([variable]) will tell you the length of an array
		- if you use a foreach loop, information can be found here:
			- http://php.net/manual/en/control-structures.foreach.php
	- on a separate line (in the browser output), print out each element key/value in $_POST
		- For example: 
		```PHP
		first_name : John
		age: 32
		phone: 555-555-5555
		```
## Prototype 3:
- In receiver.php, in the loop
	- create a switch statement based on the key of the $_POST array
	- make a different case for each validation
		- For example:
		```PHP
		case first_name:
			print("checking first_name : $_POST[first_name]);
			//note that I didn't use quotes on the array key when used inside double quotes
			break;
		```
	- inside your case statements, use `preg_match()` to determine if the value matches an appropriate RegEx
		- for example:
		```PHP
		if(preg_match( '/^[a-zA-Z0-9{2,}$/' , $_POST['first_name']) != 1)
		{
			//the text didn't match the given criteria, print an error message, add to an error array, or whatever you deem appropriate
		}
		```
	- match the following conditions:
		- first_name: at least 2 characters of any time
		- age: no more than 3 numbers
		- phone: standard US phone number with these variations:
		Examples:
			- (###) ###-####
			- ### ### ####
			- ###-###-####
			- 1### ### ####
		- username: 
			- must start with a letter
			- must have at least 6 characters total
			- only characters and numbers (no special characters)
		- bonus (extra challenge!):
			- find if the value from the textarea has 3 consecutive numbers anywhere within its contents

## After you have completed all the above

1. add, commit, and push your updated files to your php-regex branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin php-regex` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - php-regex`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your php-regex branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_php-regex.png?raw=true" alt="">