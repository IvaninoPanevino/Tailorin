<?php
$servername = "localhost";
$firstname = "name";
$lastname = "surname";
$username = "username";
$password = "password";

// Connessione
$conn = new mysqli($servername, $firstname, $lastname, $username, $password);
// Verifica connessione
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  
// Creazione database
$sql = "CREATE DATABASE myData";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// Creazione tabella
$sql = "CREATE TABLE MyUsers (
id INT() UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR() NOT NULL,
lastname VARCHAR() NOT NULL,
email VARCHAR(),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

// Inserimento utente
$sql = "INSERT INTO MyUsers (firstname, lastname, email)
VALUES ()";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cancellazione utente
$sql = "DELETE FROM MyUsers WHERE id=?";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

// Modifica utente
$sql = "UPDATE MyUsers SET lastname='' WHERE id=";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


$conn->close();
?>