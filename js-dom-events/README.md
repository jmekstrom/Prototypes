# Prototypes

## Javascript - DOM Events

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b js-dom-events` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-dom-events` - This will push your files to gitHub on your new branch

### Getting Started

1. Make an index.html inside the `js-dom-events` folder

2. Create a basic HTML DOM structure
	- DOCTYPE tag
	- HTML tag
	- head tag
	- body tag

3. **DO NOT** edit this README file

## DOM Events

### Prototype

#### Using the `onclick` Attribute

1. Inside your body tags create a `button` it can say whatever you like
	- Inside your opening `button` tag add an `onclick` attribute
	- Set the value of `onclick` to a `console.log()` add a message to be logged out
	- Example Message: `"My button has been clicked"`
2. Now add a `h1` tag, it can also say whatever you would like
	- Inside your opening `h1` tag add an `onclick` attribute
	- Set the value of `onclick` to a `console.log()` add a message to be logged out
	- Example Message: `"My header has been clicked"`

**Note** - Make sure to create a unique message for each `onclick` event

Open your page in your browser (open your console)

- Try clicking your button. What happens in the console?
- Try clicking your header. What happens in the console?
- Try clicking anywhere on the page. What happens in your console?

#### Using the `onmouseover` Attribute

1. Add an `h2` tag with any text you want
2. In your opening `h2` tag add an `onmouseover` attribute
	- Set the value of `onmouseover` to `console.log()` add a message to be logged out
	- Example message: `"You hovered over your h2 element"`

Save your changes, 
Refresh your page in the browser

Hover over your `h2` element. What happened in the console?

#### Using the `onload` Attribute

1. In your opening `body` tag  add an `onload` attribute
	- Set the value of `onload` to a `console.log()` add a message to be logged out
	- Example Message: `"Body loaded"`

**Reminder** - Use unique and identifiable messages for your `console.log()`s

Save your changes, 
Refresh your page in the browser

Did you see your load message in the console?

#### More `onclick` Fun

1. Create a `p` tag, write a short sentence
2. Choose a word from your sentence and surround it with `<em></em>` tags
	- Example Message: `<p>This is my <em>sentence</em></p>`
3. Inside your opening `em` tag add an `onclick` attribute
4. Set the value of `onclick` to a `console.log()` add a message to be logged out
	- Example Message: `"You have clicked on the word sentence"`
5. Add an `onclick` attribute to your opening `body` tag
	- Set the value of `onclick` to `console.log()` with a message of your choosing
	- Example Message: `"Body has been clicked"`

Save your changes, 
Refresh your page in the browser

-Try clicking on your *emphasized* word. What happens in your console?<br>
-Try clicking anywhere on the page. What happens in your console?  

Notice the differences between where and how `onclick` works verses how `onload` works

## Advanced Topic

<a href="http://javascript.info/tutorial/bubbling-and-capturing" target="_blank">Click Here</a> For some advanced information on event bubbling and capturing

## After you have completed all the above

1. add, commit, and push your updated files to your js-dom-events branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-dom-events` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - js-dom-events`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your js-dom-events branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/PR_js-dom-events.png?raw=true" alt="">