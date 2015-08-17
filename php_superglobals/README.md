## Prototype 1
- Create index.php
  - use print_r to print the GET superglobal array
  - use var_dump to print the POST superglobal array
- Using postman
  - make POST / GET requests to your index.php file.  
  - Note the response
 
## Prototype 2  
- Create "form.html"
  - Create a form
    - input, name of "name", id of "my_name"
    - select, name of "gender", with options of "male", "female", and "other"
    - 3 inputs with identical values of
      - placeholder of 'favorite fruit'
      - name of 'fav_fruit[]' (yes, including the brackets)
    - a submit button
    - For the form action, put your index.php file
    - For the method, choose GET or POST and note the differences in the output
    
## Prototype 3
- Create "ajax.html"
  - Create a new form
    - with a checkbox.  value 'howdy'
    - with a textarea
    - a regular button that triggers an ajax call
  - Create an ajax call
    - for url, choose the index.php from above
    - for method, choose GET or POST at your discretion
    - for data, add the values of the form fields above
    - for dataType, choose text
    - console.log the response from index.php

  ## After you have completed all the above

1. add, commit, and push your updated files to your php-superglobals branch on gitHub
  - `git add . ` - To add the files
  - `git commit -m "Your message here"` - This commits the files and adds a message
  - `git push origin php-superglobal` - This will push your files to gitHub on your new branch
2. Create a pull request
  - Title your pull request: `Your Name - php-superglobals`
  - Make sure you are creating the pull request as follows:
  - In the image below make sure the numbered arrows match **YOUR** info
    - 1. Should be your branch name - Look down the list to find your branch
    - 2. Should be your Repo name - Look down the list to find your Repo
    - 3. Should be your php-superglobals branch
  - If you are unsure on any of this or are unable to find your branch or repo, ask for help, don't just guess
  - This is important if you want feedback and credit for the prototypes 

