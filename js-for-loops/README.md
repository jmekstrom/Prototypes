# Prototypes

## Javascript - For Loops

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b js-for-loops` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-for-loops` - This will push your files to gitHub on your new branch

### Getting Started

1. Make an index.html inside the `js-for-loops` folder

2. Create a basic HTML DOM structure
	- DOCTYPE tag
	- HTML tag
	- head tag
	- body tag

3. Add `script` tags between your `head` tags

## JS For Loops

### Prototype

#### Build an array and loop through it

1. Create an array that contains at least five values of your choosing
2. Build a `for` loop that will use `console.log` to log out each value in your array to the console
	- *Hint* - `for(var i=0; i < myArray.length; i++){...}`
	- *Hint* - Place the `console.log()` between the `{}` of your `for` loop
	- *Reminder* - To access values in an array: `myArray[0]` **Try** replacing the `0` with `i`
3. Save your work and test your code, notice the output in the console
4. In the `for` loop you just created add an additional `console.log()` to log out the `i` variable
	- *Hint* - `console.log("i is equal to:", i);`
5. Save your work and test your code, notice the output in the console
	- note your new output for `i`

#### More array looping fun!

1. Create the **exact** following array
	- `var numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];`
2. Using a `for` loop, output **all** the numbers in **ascending** order, `1-10`
3. Save your work and test your code
4. Using the same array from above write a different `for` loop that outputs **all** the numbers in **descending** order, `10-1`
5. Save your work and test your code
6. Using the same array again write yet another `for` loop that only outputs **odd** numbers, `1 3 5 7...` 
7. Using your **exact** `for` loop from the previous step (#6), try using the following array
	- `var mixedArray = [4, 56, 11, 13, 97, 22, 7, 36, 19, 5, 8, 10];`
	- Does it still only output *odd* numbers?
	- If not can you fix it?

#### For in loop

1. Given the following object
	- `var seats = {seat1: 'Stu', seat2: 'Peggy', seat3: 'LoneStar', seat4: 'George', seat5: 'Sheldon'}`
	- Use a `for in` loop to loop through each key value pair
	- Create the following output `Stu is in seat1` `Peggy is in seat2` and so on ...

##### Don't forget to test all of your work

## After you have completed all the above

1. add, commit, and push your updated files to your js-for-loops branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-for-loops ` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - js-for-loops`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your js-for-loops branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_js-for-loops.png?raw=true" alt="">