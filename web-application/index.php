<h1>Hello!</h1>
Attempting to connect to database from php...</h4>
<?php
$host = 'database';
$user = 'root';
$pass = 'root';
$db   = 'apache_docker';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected to MySQL successfully!";
}