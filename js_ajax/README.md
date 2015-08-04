# Prototypes

## Javascript - jQuery - AJAX

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b js-ajax` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-ajax` - This will push your files to gitHub on your new branch

### Getting Started

1. An index.html and main.js files are included in this prototype

2. You will be entering your code directly into the main.js file

3. **DO NOT** edit this README

## JS-jQuery AJAX

### Prototype

### 1) In main.js, in the AJAX success call:
- Note when the console logs happen.  Page load?  After button click?
- Create A **GLOBAL** variable - Name it `global_result`
- On line 12 set your global variable to result

### 2) In your console
- Explore your global result variable by typing `global_result` and pressing enter. 
- Find where the movie images are stored in the object.
	- *HINT* - Start by looking under `feed` then under `entry`
- Use what you learned to create a variable to hold all of the first movie's info
   - Make it one step at a time.
   - Every time you figure out the next step, add it to your variable until you get the next piece you need
- Find the images in the first movie
- Alter your variable to get the 3rd image of the first movie

### 3) In your main.js, in the AJAX success call:
- Make a repeat block to go through each movie
- get the 3rd image from each movie and set it to a variable
- Create an img tag with a src = set to the the variable
- Append the img to #main

### 4) In your main.js, in the AJAX success call:
- Find the movie title and director
- Create appropriate HTML to add the movie title and director to each movie image created in #3

## After you have completed all the above

1. add, commit, and push your updated files to your js-ajax branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-ajax ` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - js-ajax`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your js-ajax branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_js-ajax.png?raw=true" alt="">