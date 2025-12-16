<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <link rel="stylesheet" href="booking.css">
</head>
<body style = "width: 100%;
height: 100%;
margin: 0;
padding: 0;"">

<!-- Header -->
<header style = "
width: auto;
height: 300px;
background-image: url(bg-header.svg);
padding-top: 1px;">

    <!-- Logo -->
    <div style="
    position:absolute;
    left: 120px;
    top:0px;">
        <img src="rza_pic.svg" 
            alt="logo">
    </div>

<!-- Navbar -->
<nav class="navbar" 
     style="
     margin-top:100px;
     margin-left:600px;
     width: 600px;
     height:80px;
     background-color: white;
     border-radius: 20px;">


    <!-- Nav Links -->
    <ul class="navbar-nav d-flex flex-row mb-3 nav-underline mx-auto">
        <li class="nav-item p-2">
            <a class="nav-link" style="
            font-size:23px;
            color:rgb(0, 0, 0);" href="index.php">Home</a>
        </li>
        <li class="nav-item p-2">
            <a class="nav-link" style="
                font-size:23px;
                color:rgb(0, 0, 0);" href="#">Contact</a>
        </li>
        <li class="nav-item p-2">
            <a class="nav-link" style="
                font-size:23px;
                color:rgb(0, 0, 0);" href="#">About Us</a>
        </li>
        <li class="nav-item p-2">
            <a class="nav-link" style="
                font-size:23px;
                color:rgb(0, 0, 0);" href="#">Ticket Booking</a>
        </li>
    </ul>
</nav>

</header>

<section class = "booking_block">

    <h2>Book Now</h2>
    <br>
    <form action="scripts/booking_script.php" method = "post" class="row g-1 needs-validation login">
        <label for="sFirstname" class = "form-label">First Name</label>
        <input type="text" name="sFirstname" id="sFirstname" class="form-control" value required>

        <label for="sDate" class="form-label">Choose Date</label>
        <input type="date" name="sDate" id="sDate" class="form-control" min="<?php echo date('Y-m-d'); ?>">

        
        <label for="sEmail" class="form-label">Email Address</label>
        <input type="email" name="sEmail" id="sEmail" class = "form-control"  placeholder="name@example.com">

        <div class="input-group mb-3">
            <label for="sTicketType" class="input-group-text">Ticket type</label>
            <select name="sTicketType" id="sTicketType" class="form-select">
                <option selected disabled>Choose...</option>
                <option value="1">Adult (16+) - £15.00</option>
                <option value="2">Child (5+) - £10.00</option>
                <option value="3">Senior (65+) - £12.00</option>
            </select>
        </div>
    
        <button type="submit">Submit Booking</button>

    </form>

</section>