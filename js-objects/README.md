# Prototypes

## Javascript - Objects

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b js-objects` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-objects` - This will push your files to gitHub on your new branch

### Getting Started

1. An index.html has already been made and included for you inside the `js-objects` folder

2. Add all your JavaScript between the script tags in the head

## JS Objects

### Prototype 1: Student Object
- Create an object `student_object` that holds the name and grade `0-100` of a student
- Fill that object with data for a mock student
	- Example:
	
	```JavaScript
	//One option for creating a student_object
	var student_object = {};
	student_object.name = "John Doe";
	student_object.grade = 87;
	```

### Prototype 2: Collect Student Objects

```JavaScript
/*
 * FUNCTION NAME: add_student
 * PURPOSE: To get a students name and grade from the user and create
 *          a student object from the user input that then gets stored 
 *          in a global array
 * PARAMETERS: None
 * GLOBAL VARIABLES: student_array
 */
```

- Create a function `add_student()` that 
	- prompts for the student's name
	- prompts for the student's grade
	- creates the `student_object` from above, and inserts the new data into the `student_object`
	- Add the object to a global array `student_array`
- Create a button `add student` in your index.html
- Using jQuery call the `add_student` function when your button is clicked

### Prototype 3: 

```JavaScript
/*
 * FUNCTION NAME: list_students
 * PURPOSE: Display all students info from the global student_array in a Bootstrap grid layout
 * PARAMETERS: None
 * GLOBAL VARIABLES: student_array
 */
```

- Make a function `list_students()`
	- Using a Bootstrap grid, list all current students (from the array) into the student display area.
		- The `student-display-area` has already been created for you in the index.html file 
	- List each student with the # of their index in array (0, 1, 2, 3, etc).
		- Example: 15) Daniel Paschal - 75
- Create a button `refresh-student-data`
- Using jQuery call the `list_student()` function when your `refresh-student-data` button is clicked

### Prototype 4:

```JavaScript
/*
 * FUNCTION NAME: delete_student
 * PURPOSE: Delete a single student from the global student_array based on a user given index value
 * PARAMETERS: None
 * GLOBAL VARIABLES: student_array
 */
```

- Make a function `delete_student()`
	- prompt for an ID number
	- delete the student corresponding to the ID returned from the prompt
		- Verify the chosen ID exists in array
		- Remove student object from array
			- *HINT* - `splice()`
		- Indicate which user was removed from the list 
	- Refresh the data by calling the function list_students()
- Create a new button `delete-student` to delete a student
- Using jQuery call the `delete_student()` function when your `delete-student` button is clicked

## After you have completed all of the above

1. add, commit, and push your updated files to your js-objects branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-objects ` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - js-objects`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your js-objects branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_js-objects.png?raw=true" alt="">