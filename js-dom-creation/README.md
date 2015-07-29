# Prototypes

## Javascript - jQuery - DOM Creation

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b js-dom-creation` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-dom-creation` - This will push your files to gitHub on your new branch

### Getting Started

1. An index.html file is included in this prototype

2. You will be entering your code directly into the index.html file starting on line 44

3. **DO NOT** edit this README

## JS-jQuery DOM Creation

### Prototype

#### Look at the index.html file

- You will notice there are three main sections
	- playground 1
	- playground 2
	- playground 3
- Each section contains a `playground_source` div with other elements nested inside
	- This is what you will be recreating using jQuery
- Each section also contains a `playground_destination`
	- This is what you will be appending all of your created elements to for that playground

#### Building Out Your Playgrounds

- Using jQuery recreate the `playground_source` div with all of it's nested elements
- Append your newly created `playground_source` div to its corresponding playground destination div

#### *Hints*

- Test your code frequently, don't wait till you're done to test your code
- Always have your console open while testing your code
- Save and push to gitHub often
	- Save as often as you can it's simple, quick and will save you a lot of headache
	- Push to gitHub after each playground is successfully created (at least)
	- Remember to push to your `js-dom-creation` branch
- Don't forget to ask for help if you get stuck

## After you have completed all the above

1. add, commit, and push your updated files to your js-dom-creation branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-dom-creation ` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - js-dom-creation`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your js-dom-creation branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_js-dom-creation.png?raw=true" alt="">