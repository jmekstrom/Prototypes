# Prototypes

## Javascript - jQuery - Deletion

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b js-deletion` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-deletion` - This will push your files to gitHub on your new branch

### Getting Started

1. Make an index.html inside the `js-deletion` folder

2. Create a basic HTML DOM structure
	- DOCTYPE tag
	- HTML tag
	- head tag
	- body tag

3. Add `script` tags between your `head` tags

## JS-jQuery Deletion

### Prototype
Modify your code successively with each step.  Make sure to do a commit after each step, at least.

### 1) create an array named student_array
- it should contain 10 objects with the following definition: {name: &lt;pick a name;&gt;, class:&lt;pick a class;&gt;}
- For example:
	
```JavaScript
	[
		{name: 'John', class:'Physics'},
		{name: 'Jane', class:'Math'},
		{name: 'Joan', class:'English'},
	]
```

### 2) Create a repeat loop that creates a div for each student in a main container, for example:

```HTML
<div id='student_container'>
		<div class='student_row'>
			<span class='student_name'>John</span>
			<span class='student_class'>Physics</span>
		</div>
		<div class='student_row'>
			<span class='student_name'>Jane</span>
			<span class='student_class'>Math</span>
		</div>
</div>
```

### 3) In your repeat loop from #2
- create an attribute for student_row that holds the index for each student
- for example:

```HTML
<div id='student_container'>
		<div class='student_row' data-index='0'>
			<span class='student_name'>John</span>
			<span class='student_class'>Physics</span>
		</div>
		<div class='student_row' data-index='1'>
			<span class='student_name'>Jane</span>
			<span class='student_class'>Math</span>
		</div>
</div>
```

### 4) Add a click handler to #2
- that puts a click handler onto each student_row
   - the click handler should save a variable that contains the data-index
   - Use the keyword *this* to get the attribute
   - `console.log` the the variable, for example:
       - "student 0 was clicked"
       - "student 5 was clicked"

### 5) In the click handler from #2
- Delete the object that corresponds to the index found above
- Console log out the new array

### 6) In the click handler from #2
- using *this* and the jquery function *remove*, delete the corresponding student_row

## After you have completed all the above

1. add, commit, and push your updated files to your js-deletion branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-deletion ` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - js-deletion`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your js-deletion branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_js-deletion.png?raw=true" alt="">