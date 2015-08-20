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
	- `git checkout -b php-sessions` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin php-sessions` - This will push your files to gitHub on your new branch

### Getting Started

1. The following two files have been included your php-sessions folder
	- session_reader.php
	- session_setter.php

2. Add your code to the appropriate files based on the below instructions

3. **DO NOT** edit this README file

## PHP Sessions

## Prototype 1:
- In session_setter.php, create a form 
	-with 3 different fields
		- name
		- age
		- occupation
	- In the form action, send the data to session_reader.php
- In session_reader.php, 
	- print out the data coming from the form
	- save the form data to the $_SESSION superglobal
- Go back to your session_setter.php. 
	- in the Value for each input, print the appropriate $_SESSION element to remember the previous value

## Prototype 2:
- in session_reader.php, 
	- perform regex checks on the incoming data
	- if any data has an error, 
		- save it to an array inside $_SESSION called "errors"
	- use the header() PHP function to redirect the page back to session_setter.php
		- `header('location: session_setter.php');`  
		- make sure that you do not print anything before calling header or it won't work
- in session_setter.php
	- underneath each input, print the corresponding error message IF IT IS SET

## After you have completed all the above

1. add, commit, and push your updated files to your php-sessions branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin php-sessions` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - php-sessions`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your php-sessions branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_php-sessions.png?raw=true" alt="">