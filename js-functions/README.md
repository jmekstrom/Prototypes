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

### Prototype

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
2. In your function use a `console.log()` to create the following message:
	- `"Hello, [name] you are [number] years old"`
	- The `[]` are just place holders for where you will insert your parameters

#### Using your message function

1. Create one last `button` between your `body` tags, have it say `Greeting`
2. Add an `onclick` attribute to your opening `button` tag
3. Set the value of `onclick` to your `greeting` function from above
	- Example: `onclick="greeting('John', 48)"`

Save your work and refresh your page in the browser

Click your `Greeting` button. What do you see in the console?

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