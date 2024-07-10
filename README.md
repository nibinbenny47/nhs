Neuromodulation form

![image](https://github.com/nibinbenny47/nhs/assets/75657897/8d91634e-acb0-491e-a2c8-4e2aa2bd1630)


Introduction

The project NHS contains a Neuromodulation Form which contains 3 panels

  •	Patient Details
  
  •	BPI
  
  •	Total Score
  
Admin module is used to view,edit and delete the patient response
Register as an admin with email and password and after login , you will be redirected to Admin Page

 • Click on row in the table and can see the Patient response 

 • Click Edit button on Bottom to edit the response

 • Click Delete button on Botton to delete the response


2 Tables are created in Microsoft SQL Server Management Studio

Database name : db_nhs

Tables

•	tbl_neuromodulation

•	tbl_user

8 Stored Procedures used

•	CheckLoginDetails

•	Deleteneuromodulation

•	GetLoginDetails

•	GetNeuromodulationDetails

•	GetPatientResponseById

•	Insertneuromodulation

•	Insertuser

•	Updateneuromodulation

How to set up and Run the Application?

Php Verison 8.2 is used

DBMS

Product : Microsoft SQL Server Developer (64-bit)

version :15.0.2000.5

IIS is used as web server

The root folder of the project is C:\inetpub\wwwroot\nhs


After cloned the project, run the neuromodulation.php file at first

About Files

•	Connection.php – database name,server name,username and password added here

•	assets/style.css – form style added here

•	header.php – navigation bar details added here


Link to open Neuromodulation form:  http://localhost/nhs/neuromodulation.php
![image](https://github.com/nibinbenny47/nhs/assets/75657897/a009a93c-1963-4839-a65c-5db048139d4c)

 

Admin Registration form : http://localhost/nhs/register.php
![image](https://github.com/nibinbenny47/nhs/assets/75657897/ce5e7303-d820-44c1-88fc-c90218593041)


 

Admin Login form : http://localhost/nhs/login.php
![image](https://github.com/nibinbenny47/nhs/assets/75657897/2461cda1-f21e-4514-ba79-369d7060a12e)

 
After login redirect to Admin Page : http://localhost/nhs/admin/index.php
![image](https://github.com/nibinbenny47/nhs/assets/75657897/40914735-a71a-4508-8ae4-7bdbd6451d23)

 

Click on a row or view icon , redirect to patient response page
Eg: Link : http://localhost/nhs/admin/patientresponse.php?id=1
![image](https://github.com/nibinbenny47/nhs/assets/75657897/4b71117c-48aa-49bd-8a1e-50cf4a6b8b81)
![image](https://github.com/nibinbenny47/nhs/assets/75657897/ca26480f-3b7e-43f3-b632-92a30bc76cc5)


 

 

Click on Edit button : http://localhost/nhs/admin/edit.php?id=1
![image](https://github.com/nibinbenny47/nhs/assets/75657897/16ab7ce9-1535-4f41-a14e-b9125b793dff)

 

 


