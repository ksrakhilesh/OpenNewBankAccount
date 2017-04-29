# OpenNewBankAccount
The main objective is To Create a web application used to open a new bank account at Radom bank. 

ABSTRACT

Added  bank account opening form  for 'x' bank.The data entered by the user will be presented to the manager of the bank to decide whether to allow this new applicant to have a bank account or not. Selected data will be shown to the manager from the entered data to make the decision, the rational for the selection of data has also been provided in the report. This report explains the structure of the various tables with the help of an entity relationship diagram and the Schema for the database. The database used in the application has three different tables named as Main_Details, address and Additional_Details. The division has been done to make the tables less clustered and to keep various types of data separately.

PROBLEM STATEMENT 


To make the form user-friendly, interactive and easier to fill, it needs to be filled in step-wise manner and at each step it should be screened for the errors filled by the user before going to the next step. The form was divided into different sections which helps user to fill the data easily, quickly and reduces the error chances. So, it reduces the time required by the user to fill the form. Javascript was used to validate the form.
The user should be asked to first register on the bank’s portal so that a unique user id can be assigned to the user which will be useful to store his/her data on the server. This data can be extracted easily by using the user id from the database and can be presented to the user if he/she wants to see it just after filling the form or in near future. User_id is used as the primary key which can help the applicant or the manager to access the particular form data. Here, this application generates an account number for a particular account using user_id and provides it to the user and also stores in the database.



First table is the table that stores the Main details of the account such as the user_id (which is the primary key for the table), the number of individuals in the account, Account _type (i.e.current or savings), customer_type, full_name of the applicant, father_name, DOB for age derivation, marital_status(whether the applicant is single or married), occupation_type, nature_business, company_type, id and active which tell us the status of the application whether it is accepted or rejected. 
The second table stores the address details of the applicants with the following attributes: address line 1, address line 2,city, state, zip, country and user_id which is the primary key. 
The third table is the table of additional details. This table is connected to other tables using the primary key which is user_id. The user id is in auto increment mode whenever a new user fills the form. the details such as ATM name (name to be displayed on ATM) ,email, phone, adhar_no. , PAN no., name of nominee, nominee_account, nominee_display and user_id which is the primary key in this table also.    


New Home Page with Manager Login Enabled  



Manager Login 
From here manager can login and can accept or reject the  account after viewing the relevant details provided to the manager.



Rational for selection of this subset of information: 
These are the selected details which will affect the manager’s decision for rejection or acceptance of the application eg. What is the marital status of the applicant, the married person would be less likely to default.  And the occupation of the applicant would also be important in deciding the final status of the application. 
