# VotingSystem
A simple voting system built with HTML, CSS, and PHP.

This project is a web-based voting system that allows users to vote for different groups. It includes user authentication, voting functionality, and an admin dashboard to manage the voting process.

#Features :

1)User Authentication:Users can register and log in to the system.

2)Session management to keep users logged in.

3)Voting Functionality : Users can view a list of groups and cast their vote for a preferred group.
Each user can vote only once, and their voting status is tracked.

#Technologies Used -
1) HTML : For structuring the web pages.
2) CSS : For styling the web pages and making them responsive.
3) PHP : For server-side scripting and handling the backend logic.
4) MySQL : For database management to store user information, groups, and votes.

#Project Structure

 1)index.php: The main landing page where users can log in or register.
 
 2)dashboard.php: The user dashboard where users can view groups and cast their votes.
 
 3)logout.php: Script to handle user logout.

 4)config.php: Configuration file for database connection.

 5)style3.css: The main stylesheet for the project.


#Database Structure

Users Table:

  1) id: Primary key.
   
  2) name: User’s name.

  3)mobile: User’s mobile number.

  4)password: User’s password (hashed).

  5)status: Voting status (1 for voted, 0 for not voted).

#Groups Table:

1)id: Primary key.

2)name: Group name.

3)votes: Number of votes the group has received.

#Installation:

Clone the repository:
git clone https://github.com/your-username/voting-system.git
cd voting-system

#Set up the database:

Create a MySQL database.
Import the provided SQL file (database.sql) to set up the necessary tables.
Configure the database connection:
Update the config.php file with your database credentials.
Start the server:
Use a local server environment like XAMPP or WAMP to run the project.
Place the project folder in the htdocs directory (for XAMPP) or the www directory (for WAMP).
Start the Apache and MySQL services.
Usage
Access the application:
Open your web browser and navigate to http://localhost/voting-system.
Login/Register:
Users can register a new account or log in with existing credentials.
Vote:
Users can view the list of groups and cast their vote for a preferred group.
Admin Dashboard:
Admins can log in to view and manage the votes.
Contributing
Contributions are welcome! Please follow these steps to contribute:

