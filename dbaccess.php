<?php
$host = "localhost";
$userdb = "root";
$passworddb = "";
$db = "ajax";

$con = mysqli_connect($host, $userdb, $passworddb, $db) or die("unable to connect");


// // ADD
// if(isset($_POST['add'])){
//     $fname = ($_POST['fname']);
//     $lname = ($_POST['lname']);
//     $address = ($_POST['address']);
//     $contact = ($_POST['contact']);

//     $sql = "INSERT INTO customer ( first_name, last_name, cust_address, contact ) VALUES('$fname','$lname', '$address', '$contact')";
//     $result = mysqli_query($con,$sql);
//     echo '<script> alert("Customer Successfully Added.")</script>'; 
// }

// // Edit
// if(isset($_POST['update'])){
//     $id = ($_POST['id']);
//     $fname = ($_POST['fname']);
//     $lname = ($_POST['lname']);
//     $address = ($_POST['address']);
//     $contact = ($_POST['contact']);

//     $sql = "UPDATE customer SET first_name = '$fname', last_name ='$lname', cust_address ='$address', contact ='$contact' WHERE id = '$id'";
//     $result = mysqli_query($con,$sql);
// }


// // Delete
// if (isset($_GET['delete'])) {
//     $id = $_GET['delete'];
//     $con->query("DELETE FROM customer WHERE id = '$id'");
// }


?>