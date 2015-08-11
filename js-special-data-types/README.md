# Prototypes

## Javascript - Special Data Types 

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b js-special-data-types` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-special-data-types` - This will push your files to gitHub on your new branch

### Getting Started

1. Make an index.html inside the `js-special-data-types` folder

2. Create a basic HTML DOM structure
	- DOCTYPE tag
	- HTML tag
	- head tag
	- body tag

3. Add `script` tags between your `head` tags

4. **DO NOT** edit this README file

### Prototype

#### Create three variables

Inside your script tags create the following variables

1. Declare a variable `x`, set the value to null
2. Declare a variable `y`, don't set the value to anything
	- Example: `var y;`
3. Declare a variable `z`, set the value to any string


#### Create some output

Using ONLY the three variables we created above and equal signs create the following output to the console using `console.log`

1. Output 1: `true`
2. Output 2: `false`

Declare three more variables named as follows:
- output1
- output2
- output3

Using `typeof` set your output variables to the following strings:<br>
**NOTE** - Don't just type the strings out, use `typeof`

1. output1 = `x is an object`
2. Output2 = `y is undefined`
3. Output3 = `z is a string`

Using three separate `console.log` logout the three output variables

#### Additional exercises

After you have successfully created the above outputs, try the following lines in your console on your page:

1. Type: `x` hit enter
2. Type: `y` hit enter
3. Type: `z` hit enter
4. Type: `x == y` hit enter
5. Type: `x === y` hit enter
6. Type: `x == z` hit enter
7. Type: `y == z` hit enter
8. Type: `y == w` hit enter

Notice the difference between `undefined` and it throwing an `uncaught reference error` when trying to use a variable that hasn't been declared at all.

## After you have completed all the above

1. add, commit, and push your updated files to your js-special-data-types branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-special-data-types` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - js-special-data-types`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your js-special-data-types branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_js-special-data-types.png?raw=true" alt="">