# NYIKA CLINIC MANAGEMENT SYSTEM

Being the only Health Care Centre located in Bikita Rural Area, it serves more than 500 patients everyday and currently has 125 workers with the inclusion of the 9 doctors. The Clinic’s basic aim is to provide the best medical services to the people. Due to financial constraints and access to new technology, everyday information in the clinic is recorded manually into traditional flat files and this has led to a series of undesirable problems in the running of the clinic for example, misplacement of files which contain crucial patient details.

 Nyika Clinic’s Management Board has decided to try and eradicate these problems and use a database to store all their records which will fall in line with its vision and main objectives. 
 
 The clinic administrators can add data to the database, view tables, edit the data, and delete the data as well. 

## Link to Azure Hosting

http://nyikaclinic.uksouth.cloudapp.azure.com/index.html

## Link to Demo Video 
https://www.youtube.com/watch?v=jzpYzAegBLM&feature=youtu.be 


## Usage


### How to Build the Application
I built the application using bootstrap as my design template. I used CSS for styling, Javascript and PHP for validation, and PHP to code the server side of the application. The index page is an html since it is just a landing page. I also used javascript for frontend validation and php for  backend validation. To build the application, I first created a database on phpmyadmin. Then I created the tables on php my admin. I used php to link my database with the drugs, patients, and employees files in the code. 

The code is organized accordingly into folders. Then I lastly built the landing page with html. The login on the landing page under pages then links the clinic admin to the admin dashboard. The landing page is for visitors of the clinic who want to know more about what we do. Then the admin dashboard is for the clinic admin to monitor data in the clinic. 

### How to use and run the application

After clicking on the website link, the user is taken to the index.html page. This is the landing site of the person who first clicks on the nyikaclinic link. If the person is just a visitor, they can only browse through our website without login in. If the person is a registered user, they click on pages, then click on login. That login button should take you to the login page. Then from the login page you can login to the system if you are a registered user and you login with the correct username and password. Since this is a clinic management system where the system was recommended by the BOD to computerise the system, the system is mainly made for the admin. 

After login you are taken to the admin dashboard. In the admin dashboard, there are icons on the left. you can click on those icons to view the patients table indicating all the patients that have visited the hospital. The drugs table showing all the drugs in the hospital. There is no need to increment the number of drugs available since drugs do not come in ones and when a whole package comes, the user just edits and adds that number to the existing numbers.

The same goes for the employees as well where the user can add, delete, update or view an employee. That is how the clinic managment system designed for the admin works.


## How to run the tests
To run the tests, navigate to the tests folder and run the CrudTest.php file. There are 7 tests in the file 


