# ERP-System

Overview
This ERP system is developed using PHP and MySQL to manage various operations such as storing, updating, deleting, and searching data related to customers, items, and generating reports. The system includes functionalities for handling Customer data, Item details, and generating various reports including Invoice report, Invoice item report, and Item report.

Tasks Covered<br><br>
Task 1: Customer Management<br>
Store/Register Customer Data<br>

A form is provided to register customer details including:<br>
<br>
-Title (Mr/Mrs/Miss/Dr)<br>
-First Name<br>
-Last Name<br>
-Contact Number<br>
-District<br>
Form validation ensures data integrity.<br>
View/List Customer Data<br><br>

Provides a view to list all registered customers.<br><br><br>
Task 2: Item Management<br><br>
Store/Register Item Details<br><br>

A form is available to register item details including:<br>
-Item Code<br>
-Item Name<br>
-Item Category (selectable)<br>
-Item Subcategory (selectable)<br>
-Quantity<br>
-Unit Price<br>
Form validation ensures accurate item data entry.<br>
View/List Item Details<br><br>

Displays a list of all registered items.<br><br><br>
Task 3: Reports<br><br>
Invoice Report<br>

Allows selection of a date range to search and generate reports.<br>
Includes details such as:<br>
-Invoice Number<br>
-Date<br>
-Customer Name<br>
-Customer District<br>
-Item Count<br>
-Invoice Amount<br>
-Invoice Item Report<br><br>

Enables selecting a date range to search and generate reports.<br>
Includes details such as:<br>
-Invoice Number<br>
-Invoiced Date<br>
-Customer Name<br>
-Item Name with Item Code<br>
-Item Category<br>
-Item Unit Price<br>
-Item Report<br><br>

Generates a report that lists:<br>
-Unique Item Names<br>
-Item Category<br>
-Item Subcategory<br>
-Total Quantity of each Item<br>
-Setup Instructions<br>
-Database Setup<br><br>

Import the provided SQL file (database.sql) to set up the database schema and initial data.<br>
Web Server Configuration<br><br>

Place the PHP files in the web server's root directory (e.g., htdocs for XAMPP).<br>
Accessing the System<br><br>

Open a web browser and navigate to http://localhost/ERP-System/ to access the ERP system.<br>
Technologies Used<br><br>
-PHP<br>
-MySQL<br>
-HTML<br>
-CSS (Bootstrap for styling)<br>
-JavaScript (Bootstrap for front-end interactions)<br>
