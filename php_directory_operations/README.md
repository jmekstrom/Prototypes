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
	- `git checkout -b php-directory-operations` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin php-directory-operations` - This will push your files to gitHub on your new branch

### Getting Started

1. The following files have been included for you inside the `php-file-upload` folder
	- file_handler.php
	- uploader_ajax.php
	- uploader_form.php

2. **DO NOT** edit this README file

#php directory operations
## Prototype 1
- in index.php
	- make a div to hold all the photos, with an ID of 'image_container'
	- use the glob() PHP function to get a directory listing images
		- Look it up!
		- for glob()'s argument, use * as the wildcard character to select all files
		- make sure it is looking inside the images directory
	- use the values returned by glob() to create images in the 'image_container' div
		- set the src = to the file value returned by glob()
		- one image per value returned

## Prototype 2
- in dir_listing.php
	- use the same glob() code as above, however:
		- make an associative array, output:
			- success: operation is successful or not
			- error: any errors that might have occured
			- files: an array of files from the images directory
		- json_encode the output variable
		- print the encoded variable
- make carousel.php
	- make a function: load_files()
		- make an ajax call to dir_listing.php to get the list of files
		- for each file given from dir_listing.php, use jquery to create an image for each file
			- keep an array of each image made, image_array
			- add a variable to keep track of which image is currently being displayed
	- make a button, previous, that calls the function prev_image()
	- make a button, next, that calls the function next_image()
	- put the previous and next button somewhere where you can click on them, around the image.
	- create the prev_image and next_image functions.  
		- if next_image is clicked, display the next photo in image_array
		- if prev_image is clicked, display the previous photo in image_array

## Prototype 3 (extra credit)
- in carousel.php
	- put all images into a container, "image_container"
		- make that container the size of the images (800x600 in this case)
	- stack the images on top of each other with position, top, and left styles 
	- make a function, initialize()
		- move every image, except the first, to the right side of the container (probably using left: 100%)
	- make a global variable, current_image_index, set it to 0
	- in your prev_image function:
		- animate the current image out of the image_container
		- decrement the current image counter
		- animate the new current image into the image_container
	- in your next_image function:
		- do the same thing as prev_image, but in the opposite direction
	- go back to your prev_image and next_image function, and test if the NEW current_image would be out of bounds and either:
		- prevent the animation from triggering again (cannot go past the bounds)
		- or make the new index "wrap" around.  So -1 becomes image_array.length-1, image_array.length becomes 0

## Prototype 4 (extra credit)
- in carousel.php
	- for each image created, also create a "dot" somewhere on the page to serve as an indicator
	- make a class, "dot", which causes the element to look like a dot that is unselected
	- make a class, "active_dot", which causes the element to look like a selected dot
	- in your next_image / prev_image functions:
		- find the current active_dot, and remove the class
		- find the new current dot, and give it a class of active_dot
		- using the current_image index should enable you to easily find the current dot

## Prototype 5 (extra credit)
- in carousel.php
	- add a click handler onto each dot
	- when the dot is clicked, the prev_image/next_image function should be called
	- modify next_image and prev_image to receive an argument.
		- the argument will specify what the next current_image will be (Rather than simply incrementing / decrementing)
	
## After you have completed all of the above

1. add, commit, and push your updated files to your php-directory-operations branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin php-directory-operations ` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - php-directory-operations`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your php-file-upload branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 
