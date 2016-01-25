###################
Installation Guide
###################

- Download and install WAMP(Windows) or MAMP(Mac).
- Start the Apache and MySQL server.
- Verify that the server are online by visiting the localhost.
- Download CodeIgniter(3.0.4).
- Extract the downloaded folder and move it into the htdocs directory(if MAMP) or www directory(if WAMP).
- Create a database by visiting phpMyAdmin from the localhost and name it 'trip_db'.
- Import the 'database.sql' file (included in the project) into the newly created database.
- Now open the project in any text editor and open application/config/database.php file and provide user and password for your database.
- Now open the browser and visit http://your_localhost_url:port/new_trip to view the list of supported api calls.
