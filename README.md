# ERP-System

Overview
This ERP system is developed using PHP and MySQL to manage various operations such as storing, updating, deleting, and searching data related to customers, items, and generating reports. The system includes functionalities for handling Customer data, Item details, and generating various reports including Invoice report, Invoice item report, and Item report.

Tasks Covered
Task 1: Customer Management
Store/Register Customer Data

A form is provided to register customer details including:
Title (Mr/Mrs/Miss/Dr)
First Name
Last Name
Contact Number
District
Form validation ensures data integrity.
View/List Customer Data

Provides a view to list all registered customers.
Task 2: Item Management
Store/Register Item Details

A form is available to register item details including:
Item Code
Item Name
Item Category (selectable)
Item Subcategory (selectable)
Quantity
Unit Price
Form validation ensures accurate item data entry.
View/List Item Details

Displays a list of all registered items.
Task 3: Reports
Invoice Report

Allows selection of a date range to search and generate reports.
Includes details such as:
Invoice Number
Date
Customer Name
Customer District
Item Count
Invoice Amount
Invoice Item Report

Enables selecting a date range to search and generate reports.
Includes details such as:
Invoice Number
Invoiced Date
Customer Name
Item Name with Item Code
Item Category
Item Unit Price
Item Report

Generates a report that lists:
Unique Item Names
Item Category
Item Subcategory
Total Quantity of each Item
Setup Instructions
Database Setup

Import the provided SQL file (database.sql) to set up the database schema and initial data.
Web Server Configuration

Place the PHP files in the web server's root directory (e.g., htdocs for XAMPP).
Accessing the System

Open a web browser and navigate to http://localhost/ERP-System/ to access the ERP system.
Technologies Used
PHP
MySQL
HTML
CSS (Bootstrap for styling)
JavaScript (Bootstrap for front-end interactions)
