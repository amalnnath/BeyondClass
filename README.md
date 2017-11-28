# BeyondClass

##What is BeyondClass
As we go through life, we notice that we face challenges in certain areas that are not easy to solve on one's own. Best way to solve those problems, is with the help of a fellow peer. At UOIT, we have noticed that peer tutor sessions for most of the challenging upper year courses are not available. So we created “BeyondClass” which will help students sign up with a peer tutor for the course(s) that they are having difficulty with.

## Getting Started

### Prerequisites
* LAMP / WAMP depending on your operating system
* phpMyAdmin (Usually packaged with WAMP)

### Setting Up The Database
* Open and log into phpMyAdmin (http://localhost/phpmyadmin/)
* Create a database named "beyondclass"
* Open the database and navigate to the "import" tab
* Import the beyondclass.sql file in and press go! 

## Running Tests
* To make sure that the database is implemented correctly, run the following 4 pages by either manually setting the path or logging in as admin (Username: 0000, Password: password)
	* /view/dbBooking.php
	* /view/dbCourses.php
	* /view/dbStudent.php
	* /view/dbTutor.php
	
* Once you have successfully viewed the four pages, you are ready to explore the website!

## Version
* Latest version is 1.5.1
* View CHANGELOG.md to view version changes