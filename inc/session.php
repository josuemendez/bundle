<?php
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "fpkvpsnn_tierra", "Tierraoro2020*", "fpkvpsnn_tierraoroDB");

$ttl = (60 * 60 * 24);
session_set_cookie_params($ttl); //para que dure la cookie

session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT username from login where username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
?>
