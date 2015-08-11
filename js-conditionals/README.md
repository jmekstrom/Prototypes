# Prototypes

## Javascript - Comparisons and Conditionals

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b js-conditionals` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-conditionals` - This will push your files to gitHub on your new branch

### Getting Started

1. Make an index.html inside the `js-conditionals` folder

2. Create a basic HTML DOM structure
	- DOCTYPE tag
	- HTML tag
	- head tag
	- body tag

3. Add `script` tags between your `head` tags

4. **DO NOT** edit this README file

## Comparisons

### Prototype

#### Create some variables

Between your script tags create the following variables

1. Declare a variable named `mySmallNumber` Set its value to `5`
2. Declare a variable named `myString` Set its value to `"5"`
3. Declare a variable named `myBigNumber` Set its value to `255`

#### Create output

Create four output variables named:
	- `output1`
	- `output2`
	- `output3`
	- `output4`

Set the outputs as shown below
<br>
**Note** - Use actual comparisons to generate the true/false part of the output 
		 - You will need to use concatenation to achieve the proper output
		 - Example: `var output1 = "my string " + (x == z))`

1. output1 = `"mySmallNumber == myString is true"`
2. output2 = `"mySmallNumber === myString is false"`
3. output3 = `"mySmallNumber < myBigNumber is true"`
4. output4 = `"mySmallNumber > myBigNumber is false"`

Using four separate `console.log` log out your four output variables

#### Small challenge (optional)

Using the two variables `mySmallNumber and myString` from above, create a single variable named `challenge` to hold the following

Concatenate the two variables together
then Use ` === ` to compare another concatenation of the two variables and set the result to your challenge variable

Use a `console.log` to log out your `challenge` variable

What is the result?

Add a comment in your code with your answer if you dare!

## Conditionals

#### Create some more variables

1. Declare a variable named `myTruth` Set its value to `true`
2. Declare a variable named `myLie` Set its value to `false`

#### Create some conditionals

1. Using the `myTruth` variable write a single if statement that outputs: `"I'm true!"`
2. Using the `myLie` variable create an if/else statement
	- if true output `"I'm true!"`
	- else output `"I'm false!"`
3. Using both variables write an if/else statement
	- Example: if(myTruth == myLie)...
	- if true output `"I'm true!"`
	- else output `"I'm false!"`
4. Using the `myLie` variable create just an if statement that evaluates to `true`
	- **DO NOT** use an else condition
	- Have the output be `"I'm a true lie!"`

#### Create a Switch Statement

1. Declare a new variable called `myNumber` Set its value equal to a number between 1-100
2. Write a switch statement based on myNumber that has three `case` statements plus a `default`
3. Make it so one of your `case` statements will be true
4. Create a unique `console.log()` for each `case` statement

## After you have completed all the above

1. add, commit, and push your updated files to your js-conditionals branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-conditionals` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - js-conditionals`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your js-conditionals branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_js-conditionals.png?raw=true" alt="">