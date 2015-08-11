# JavaScript - Object Oriented Programming (OOP)

## Javascript - OOP

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b js-oop` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-oop` - This will push your files to gitHub on your new branch

### Getting Started

1. Make an index.html inside the `js-oop` folder

2. Create a basic HTML DOM structure
	- DOCTYPE tag
	- HTML tag
	- head tag
	- body tag

3. **DO NOT** edit this README file

## Object Oriented Programming (OOP)

### Prototype 1
- Create a student object constructor function called student_object
	- **student_object**
		- *purpose*: 
			- populate the object with passed in parameters
		- *properties*: 
			- first name (string)(passed as parameter) : the student's first name
			- last name (string)(passed as parameter) : the student's last name
			- age (number)(passed as parameter) : the student's age
			- grade (number)(passed as parameter) : the student's numeric grade
- Add the following methods to your student_object:
	- **fullName** (method): Returns the students full name
		- *parameters*: 
			- none
		- *returns*:  
			- **RETURN** the student's full name as a string, for example "John Doe"
	- **removeSelf** (method):
		- *purpose*: 
			- deletes the object
		- *parameters*: 
			- none
		- *returns*: 
			- none
- Test your student object by making 3 different students and storing them in variables
	- instantiate 3 students, storing them into an array 
	- Use a loop to call your "fullName" method on each object to make sure it is working  

### Prototype 2

- Create a course object **constructor** called course_object with the following info:
	- **course_object**
		- *properties*:
			- students_array (array): an array of student_object 
			- teacher (string): the course's teacher's name
			- course_name (string): the course's name
- Add the following methods to your course_object:
	- **set_teacher** (method)
		- *parameters*:
			- teacher (string): The name of the teacher for this course
		- *purpose*:
			- The function should set the teacher variable in the object to a given teachers name
		- *returns*:
			- Nothing returned
	- **set_course_name**
		- *parameters*:
			- course_name (string): The name of the course
		- *purpose*:
			- The function should set the name of the course based on given input
		- *returns*:
			- Nothing returned
	- **course_info**
		- *parameters*:
			- None
		- *purpose*:
			- The function should return a string that gives info about the course, including:
				- Course name
				- Teacher's name
				- Total students in course
		- *returns*:
			- Course name, teacher's name, total students as a string
	- **add_student** (method)
		- *parameters*:
			- student (object): the student to add to the course
		- *purpose*:
		 	- The function should place the student into the students_array
		- *returns*: 
			- The number of students in the course
	- **remove_student** (method)
		- *purpose*: 
			- delete a student from the course's students_array
		- *parameters*: 
			- index (number) : the index of the student
			- OR (you may choose either)
			- student (object) : a direct reference to the student
		- The function should verify that the student is an enrolled student 
		- *returns*: object with the following data:
			- success (boolean): whether the student was deleted or not
			- "That student is not enrolled in this class"
			- "student removed from class"
	- **find_student_by_name** (method)
		- *purpose*: 
			- find a student by name
		- *parameters*:
			- fname(string): Student's first name
			- lname(string): Student's second name
		- *returns*:
			- object: a reference to the student
	- **dismiss_all_students** (method)
		- *purpose*: 
			- removes all students from the course
		- *parameters*:
			- none
		- *returns*:
			- boolean: success or failure of delete operation
	- **list_all_students** (method)
		- *purpose*:
			- return the student array
		- *parameters*: 
			- none
		- *returns*: 
			- array of students

### Prototype 3

- test your objects
	- using prompt and a for loop, add 3 students to one course, "geometry", under "Professor Collins"
	- using prompt and another for loop, add 2 students to another course, "algebra", under "Professor Kimura"
	- find one student from one of the courses, your choice, where the name is valid
	- find one student from one of the courses, your choice, whose name is invalid
	- list all students from geometry (in the console)
	- remove all students from geometry
	- add a student to "geometry", removing them from "algebra"
	- list all students in geometry and in algebra (in the console)

## After you have completed all the above

1. add, commit, and push your updated files to your js-oop branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin js-oop` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - js-oop`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your js-oop branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/PR_js-oop.png?raw=true" alt="">