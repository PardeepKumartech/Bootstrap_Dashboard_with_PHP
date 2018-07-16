<?php
$servername = "localhost";
$username = "cjmjbsbvun";
$password = "Kew92hAwUw";
$dbname = "cjmjbsbvun";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['reg_p'])) {
  // receive all input values from the form
  $pname = mysqli_real_escape_string($conn,$_POST['pname']);
  $price = mysqli_real_escape_string($conn,$_POST['pirce']);
  $pcat = mysqli_real_escape_string($conn,$_POST['pcat']);
  $product_details = mysqli_real_escape_string($conn,$_POST['pdetails']);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO products (product_name,product_price,product_cat,product_details)
VALUES ('$pname', '$price', '$pcat','product_details')";



if ($conn->query($sql) === TRUE) {
    echo "alert('New record created successfully')";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>