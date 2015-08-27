# Prototypes
## MySQL Basics

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b mysql-basics` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin mysql-basics` - This will push your files to gitHub on your new branch

### Getting Started

1. The following file(s) are included in the `mysql-basics` folder
	- mysql_queries.sql

2. Place all your queries in the mysql_queries.sql file

## MySQL Basics

## Prototype 1
### do all of this in phpmyadmin
#### make sure to check your database's contents between each operation
#### put all answer SQL statements into mysql_queries.sql
- using 'SELECT', find 1 user from your user table by username
	- for example: "SELECT * FROM \`users\` WHERE \`username\`='Juan'"
- using 'UPDATE', change one user's email from your user table.  Update only the user that you had previously selected above
	- for example: "UPDATE \`users\` SET \`email\`='myawesomeemail' WHERE \`username\`='Juan'"
- using 'INSERT', add one new user to your user table
	- for example: "INSERT INTO \`users\` SET \`username\`='Mandy', \`email\`='greatemail@email.com', \`password\`=sha1('thisisagreatpassword')"
- using 'DELETE', delete the user you just create
	- for example: "DELETE FROM \`users\` WHERE \`username\`='Mandy'"

## Prototype 2
- Create a table, todo_items, with the following fields:
	- id: int 11
	- title: varchar 50
	- details: varchar 500
	- timestamp: int 11
	- user_id: int 11
- inside todo_items manually in phpmyadmin
	- create 10 todo items
- inside todo_items
	- select all todo_items made by 1 user of your choice
	- insert a new todo item into the table by that same user
	- delete a todo item by that user
	- update a todo item by that user with data of your choice
- perform a select to get all information from \`users\` by using the user's id

## After you have completed all of the above

1. add, commit, and push your updated files to your mysql-basics branch on gitHub
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin mysql-basics ` - This will push your files to gitHub on your new branch
2. Create a pull request
	- Title your pull request: `Your Name - mysql-basics`
	- Make sure you are creating the pull request as follows:
	- In the image below make sure the numbered arrows match **YOUR** info
		- 1. Should be your branch name - Look down the list to find your branch
		- 2. Should be your Repo name - Look down the list to find your Repo
		- 3. Should be your mysql-basics branch
	- If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
	- This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_mysql-basics.png?raw=true" alt="">