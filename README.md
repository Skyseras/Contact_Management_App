# Contact_Management_App

## Context of the project

You need to create a website where users can create an account and then log in to manage a private list of contacts. The website will use databases to store user login data, as well as to store each user's contacts.

#### Apart from the database functionality, you will need to use features to build the website such as:

the conditionals
functions
object oriented programming
form validation
Use of HTTP
The required pages are:

Home page
Login and registration pages
Profile page
Contact list page and add/edit contact form
Layout and briefing

## The layout is as follows:

### - The home page :

There is a horizontal navigation bar at the top of the page, with the website title on the left and the login button on the right. After a successful login, the login button is replaced with the username, which links to the Profile page, Contacts page, and Logout page.

The content is a message with two call-to-action links: Subscribe and Login.

### - Login Page

Login is based on username and password, so the content is a simple login form, with fields for username and password, and a login button. The last sentence is a "Register" call-to-action link.

After logging in, the user is redirected to the Profile page.

### - Registration page

The content is the registration form, with the following entries:

username

Password

Password verification

The username must be at least three characters long and be alphanumeric only. The password must be at least six characters long and must be verified with a second password during registration. Any form errors should be displayed under the entry where the data originated,

Registered accounts must also retain the registration date. After registering, the user is redirected to the Profile page.

### -Profile page

This page will contain a greeting, profile data and session connection time. While the username and registration date are stored in the database, the session login time can be stored in the current session.

### - Page Contacts

The content is divided into two: the list of contacts and the form for adding/editing contacts.

The contact list lists contact records, with each record having Edit and Delete links. If the list is empty, display the appropriate message instead of making the table empty.

The contact form will have the following field names:

Compulsory name ; at least two characters

Telephone: optional; should only allow +-() 1234567890

Email: required; must be validated

Address: optional; 255 characters maximum

Error messages about invalid data should be placed under the entries where the data originated.

By accessing the Contacts page, the form is ready to be used to create new contacts. As soon as you click on the "Modify" button of a contact, the information relating to the contact is completed in the form; submitting the form updates the existing contact.

When an authenticated user accesses the home page, login page, or registration page, they are redirected to the Profile page.

The default page title is Contact List.

## Technological requirements

UML design (use case, sequence and class diagram)

Bootstrap for the front end

PHP OOP for the backend (consider using regex for form validation).

JavaScript for form validation, modal...

Relational database for database type (MySQL)
