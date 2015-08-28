Place your queries below
//Prototype 1
SELECT Users WHERE username = 'jmekstrom'
UPDATE `Users` SET `email`='jmekstrom@gmail.com' WHERE username = 'jmekstrom'
INSERT INTO Users SET `username` = 'Mandy', `email` = 'greatemail@email.com', `password` = sha1('thisisagreatpassword')
DELETE FROM `Users` WHERE `username` = 'Mandy'


//Prototype 2
SELECT * FROM `todo_items` WHERE user_id = '1'
INSERT INTO `todo_items`(`id`, `title`, `details`, `timestamp`, `user_id`) VALUES ('11','adding an item','no details','1440800561','1')
DELETE FROM `todo_items` WHERE `id` = '11'
UPDATE `todo_items` SET `timestamp`='1440800666' WHERE user_id='1'
SELECT * FROM `Users` WHERE username = 'jmekstrom'