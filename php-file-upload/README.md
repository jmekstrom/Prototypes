# Prototypes

## PHP - File Upload

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b php-file-upload` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin php-file-upload` - This will push your files to gitHub on your new branch

### Getting Started

1. The following files have been included for you inside the `php-file-upload` folder
	- file_handler.php
	- uploader_ajax.php
	- uploader_form.php

2. **DO NOT** edit this README file

## PHP File Upload
## Prototype 1:
- In uploader_form.php
	- add a file upload field, called "upload_file"
	- add an input text field, name it "description"
	- configure the form to send POST data to file_handler.php
	- add the encoding type to the form:
		- enctype='multipart/form-data'
	- add a submit button
		- type submit
- in file_handler.php
	- print out the values inside:
		- $_FILES
			- note how your file is inside "upload_file"
		- $_POST
- upload an image file.  Make sure it isn't over 2 megs in size

## Prototype 2:
- in file_handler.php
	- see if the directory, 'uploads', exists
	- if it exists, use the pathinfo() function on your upload file's name
	- use the 'extension' element of the array returned by pathinfo() to determine if the file extension is valid:
		- only accept .jpg, .gif, .jpeg, and .png files
	- check the file size from $_FILES to determine if the file is too large or not.
		- getimagesize() is helpful, as is the size from the $_FILES superglobal
		- limit it to 2 megabytes
		- you probably want to use the tmp_name element of the $_FILES superglobal to test the file
	- if the file size is correct, and the extension is correct:
		- use move_uploaded_file() to move the file so it is permanent.
			- you need to move it from the tmp_name to the desired file name
			- put the new file into the uploads directory
### MAKE SURE YOU TEST move_uploaded_file to see if it actually worked.  File permissions can be a problem.

## Prototype 3: 
- in uploader_ajax.php
	- add the same form elements as you added to uploader_form.php
		- make the submit button into type button and add a click handler
	- make an ajax call triggered by the click handler
		- processData: false
		- contentType: false
		- data: should use a new FormData object, targetted to the form in question
	
## After you have completed all of the above

1. add, commit, and push your updated files to your php-file-upload branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin php-file-upload ` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - php-file-upload`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your php-file-upload branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_php-file-upload.png?raw=true" alt="">