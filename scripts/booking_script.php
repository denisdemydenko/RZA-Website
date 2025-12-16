<?php

require 'connect.php';

$name = $_POST ['sFirstname'];
$email = $_POST ['sEmail'];
$ticketType = $_POST ['sTicketType'];
$date = $_POST ['sDate'];

$sql = "INSERT INTO bookings (name,email,ticket_ID,visit_date) VALUES (?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->execute([$name,$email,$ticketType,$date]);

echo "Booking saved";

?>