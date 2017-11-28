# BeyondClass

## What is BeyondClass?
As we go through life, we notice that we face challenges in certain areas that are not easy to solve on one's own. Best way to solve those problems, is with the help of a fellow peer. At UOIT, we have noticed that peer tutor sessions for most of the challenging upper year courses are not available. So we created “BeyondClass” which will help students sign up with a peer tutor for the course(s) that they are having difficulty with.

## Getting Started

### Prerequisites
* LAMP / WAMP depending on your operating system
* phpMyAdmin (Usually packaged with WAMP)
* Git(Optional)

### Setting Up The Database
* Edit 'main/db.php' file and replace <server>, <username>, <password> and <database> with your credentials
* Open and log into phpMyAdmin (http://localhost/phpmyadmin/)
* Create a database named "beyondclass"
* Open the database and navigate to the "import" tab
* Import the 'struct/beyondclass.sql' file in and press go! 

### Running Tests
To make sure that the database is implemented correctly, run the following 4 pages by either manually setting the path or logging in as admin (Username: 0000, Password: password)
* /views/dbBooking.php
* /views/dbCourses.php
* /views/dbStudent.php
* /views/dbTutor.php
	
*Once you have successfully viewed the four pages, you are ready to explore the website!*

## API
This internal api uses REST method to generate a JSON webpage. It is connected to the database; allowing users to input student number and in return displaying the corresponding name and gpa.

In order to utilize the provided API, pleae use the following format to access the file in the URL bar:

`/localhost/beyondclass/api/internalApi.php/info/<student id>`

## Credits
Amalnnath Parameswaran
Ali Khan
Vrund Shah
Sai Pedamallu

[More Credits](https://github.com/amalnnath/beyondclass/CREDITS)

## Version
**Latest Version: 1.5.3**
View *CHANGELOG* to view version changes

## License
[MIT](https://github.com/amalnnath/beyondclass/LICENSE)