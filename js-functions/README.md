# Prototypes

## Javascript - Functions

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b js-functions` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-functions` - This will push your files to gitHub on your new branch

### Getting Started

1. Make an index.html inside the `js-functions` folder

2. Create a basic HTML DOM structure
	- DOCTYPE tag
	- HTML tag
	- head tag
	- body tag

3. Add `script` tags between your `head` tags

4. **DO NOT** edit this README file

## JS Functions

### Prototype-1 (No Return)

#### Build your first function

1. Between your `script` tags declare a function called `myMessage` that takes no parameters
2. Inside your function add a `console.log()` with a message of your choice
	- Example:

```JavaScript
function myMessage(){
    console.log("This is my first function!");
}
```

#### Use your function

1. Between your `body` tags create a `button`, it can say whatever you would like
2. Add an `onclick` attribute to your opening `button` tag
3. Set the value of `onclick` to your function from above
	- Example: `onclick="myMessage()"`

Open your index.html in a browser (open your console)

Try clicking your button. What do you see in the console?

#### Building a function with parameters 

1. Between your `script` tags declare a function called `add` that takes in two `number` parameters
	- *hint* - `function add(x, y){...}`
2. Inside your function add the two variables together and `console.log()` the result

#### Using your add function

1. Create another `button` between your `body` tags, have it say `ADD`
2. Add an `onclick` attribute to your opening `button` tag
3. Set the value of `onclick` to your `add` function from above
	- Example: `onclick="add(5, 8)"`

Save your work and refresh your page in the browser

Click your `ADD` button. What do you see in the console?

#### One more function

1. Between your `script` tags declare a function called `greeting` that takes two parameters
	- Parameter 1 will be a `string` to hold a name
	- Parameter 2 will be a `number` to hold an age
2. Inside your function declare a variable named `output`
	- set `ouput` equal to the following string using your parameters and concatination
	- `"Hello, [name] you are [number] years old"`
	- The `[]` are just place holders for where you will insert your parameters
3. Still inside your function add a `console.log` to log out your `output` variable

#### Using your message function

1. Create one last `button` between your `body` tags, have it say `Greeting`
2. Add an `onclick` attribute to your opening `button` tag
3. Set the value of `onclick` to your `greeting` function from above
	- Example: `onclick="greeting('John', 48)"`

Save your work and refresh your page in the browser

Click your `Greeting` button. What do you see in the console?

### Prototype-2 (Time To Return)

#### Add 2.0

1. Between your `script` tags declare a function called `add2` that takes in two `number` parameters
2. Have the function **return** the result of adding the two parameters together
	- *HINT*
	```JavaScript
	function add2(x, y){
		var total = x + y;

		return total;
	}
	```
3. Declare a variable (outside of your function) called `add2result`:
	- set `add2result` to the result of calling your `add2` function
	- *HINT*
	```JavaScript
	var add2result = add2(10, 36);
	```
4. Create a `button` between your `body` tags, have it say `ADD #2`
	- give your button an `onclick` attribute
	- set `onclick` equal to: `console.log(add2result)`
	- *HINT* - `onclick="console.log(add2result)"`

Because `add2` `returns` a number you can set it to a variable or even use it in another function call. Your original `add` function doesn't `return` anything so you can't set the result to a variable.

#### function Inception

Here is an example of functions being used as parameters in another function call. This only works because the `add2` function `returns` a number

```JavaScript

var result = add2(add2(5, 10), add2(20, 30));
```

In the example above the inner functions will be called first then there results will be passed into the outside function producing a final result.
- first 5 will be added to 10 equaling 15
- second 20 will be added to 30 equaling 50
- third and finally 15 and 50 will be added together equaling 65 which will then be stored in the variable `result`
Don't worry if this is confusing now, it's just an example to get you thinking

## After you have completed all the above

1. add, commit, and push your updated files to your js-functions branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-functions` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - js-functions`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your js-functions branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_js-functions.png?raw=true" alt="">