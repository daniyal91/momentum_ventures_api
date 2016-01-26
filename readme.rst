###################
Installation Guide
###################

Server
###################
- Download and install WAMP(Windows) or MAMP(Mac) for PHP version 5.6.10.
- Start the Apache and MySQL server.
- Verify that the servers are online by visiting the localhost which means that when you open WAMP or MAMP the server window should have the 'start server' pressed and both the apache and mysql servers should be ticked.

Source Code
###################
- Download the source code from GitHub.
- Extract the downloaded folder and move it into the MAMP FOLDER inside htdocs directory(if MAMP) or www directory(if WAMP) in a newly created folder and name the folder as 'new_trip'.

Database 
###################
- Create a database by using phpMyAdmin from the localhost and name it 'trip_db'.
- Import the 'database.sql' file (included in the project) into the newly created database.
- Now open the project in any text editor and open application/config/database.php file and provide user and password for your database in this file.

Browse Instructions
###################
- Now open the browser and visit http://your_localhost_url:port/new_trip to view the list of supported api calls.
