#Prototype

## PHP - Includes

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. Type the following command:
	- `git checkout master` - This will switch you to your master branch
3. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.
4. Still in your console type the following: 
	- `git checkout -b php-includes` press enter
	- This will create a new branch for this prototype

**NOTE:**
- When you commit and push your files to gitHub you need to push them to your new branch
- To do this do the following:
	- `git add . ` - To add the files
	- `git commit -m "Your message here"` - This commits the files and adds a message
	- `git push origin php-includes` - This will push your files to gitHub on your new branch

### Getting Started

1. There are no files included in this prototype

2. **DO NOT** edit this README file

## Prototype 1
- Create index.php
  - include the following code in it
  - 
  ``` 
  <?php
    $a=1; $b=5;
    include('includes/data.php');
    $result = $a * $b;
    print("<br>Result is $result");
  ?>
  ```
- Create a folder called includes
- In the includes folder, create a file called 'data.php'
  - In the data.php file, include the following code:
  ```
  <?php 
  $a = 3;
  $b = 2; 
  ?>
  ```
- Run the file and note the print result

## Prototype 2
- Add the following code to the bottom of 'index.php'
```
<?php
    $c=2;
    include('includes/data2.php');
    include_once('includes/data2.php');
    include('includes/data2.php');
    $result2=$c;
    print("<br>Result 2 = $result2");
?>
```
- Create the file 'data2.php' with the following content:
```
<?php 
$c = $c * 2; 
?>
```
- Run index.php and note the value of result2
    
## Prototype 3
- Start a new file, index_main.php
- In this file include the following code
```
<main id="main_content">
    Main Content
</main>
<div>I'm not in the main content or the footer</div>
<footer>
    <nav id="site_map">
        <ul>
            <li>Location</li>
            <li>Contact Us</li>
            <li>Hours</li>
        </ul>
    </nav>
</footer>
```
- Add filler text into the main content, as well as a link to an image
- Run the file to ensure it looks correct
- Create a file, main.php
  - Take everything in between the "main" tags and move it into main.php
- Create a file, footer.php
  - Take everything in between the "footer" tags and move it into footer.php
- Run the file again, ensuring that the main content has only the div tag's contents are visible
- use include to include the main.php and footer.php into its appropriate place

## After you have completed all the above

1. add, commit, and push your updated files to your php-includes branch on gitHub
  - `git add . ` - To add the files
  - `git commit -m "Your message here"` - This commits the files and adds a message
  - `git push origin php-includes` - This will push your files to gitHub on your new branch
2. Create a pull request
  - Title your pull request: `Your Name - php-includes`
  - Make sure you are creating the pull request as follows:
  - In the image below make sure the numbered arrows match **YOUR** info
    - 1. Should be your branch name - Look down the list to find your branch
    - 2. Should be your Repo name - Look down the list to find your Repo
    - 3. Should be your php-includes branch
  - If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
  - This is important if you want feedback and credit for the prototypes 

<img src="https://github.com/Learning-Fuze/prototypes/blob/assets/assets/pr_php-includes.png?raw=true" alt="">