CRUD Operations with PHP and PDO
This PHP class, named Crud, provides a simple and reusable implementation for basic CRUD (Create, Read, Update, Delete) operations on a MySQL database using the PDO (PHP Data Objects) extension. This class assumes that you have a MySQL database connection set up using the Connexion class (not provided here).

Usage
1. Include Database Connection File
Before using the Crud class, ensure that you have a database connection established. Include the appropriate file (conex.php) or modify the require statement accordingly to include your database connection logic.

php
Copy code
require "./database/conex.php";
2. Instantiate the Crud Class
Create an instance of the Crud class, which automatically establishes a PDO connection using the Connexion::getPdo() method.

php
Copy code
$crud = new Crud();
3. Insert Record
To insert a record into a table, provide the table name and an associative array of data where keys represent column names and values represent the data to be inserted.

php
Copy code
$data = ['column1' => 'value1', 'column2' => 'value2'];
$result = $crud->insertRecord('your_table_name', $data);
4. Update Record
To update a record in a table, provide the table name, an associative array of data to be updated, and the ID of the record to be updated.

php
Copy code
$data = ['column1' => 'new_value1', 'column2' => 'new_value2'];
$result = $crud->updateRecord('your_table_name', $data, $record_id);
5. Delete Record
To delete a record from a table, provide the table name and the ID of the record to be deleted.

php
Copy code
$result = $crud->deleteRecord('your_table_name', $record_id);
6. Select Records
To retrieve records from a table, provide the table name, optional columns (default is "*"), and an optional WHERE clause.

php
Copy code
$records = $crud->selectRecords('your_table_name', 'column1, column2', 'column1 = value');
7. Close Connection
Optionally, you can close the database connection when you're done with the CRUD operations.

php
Copy code
$crud->closeConnection();
Error Handling
The class includes basic error handling for prepared statements. If an error occurs, the script will terminate and display an error message along with the specific error information.