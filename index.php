<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
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
            color:rgb(0, 0, 0);" href="#">Home</a>
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
                color:rgb(0, 0, 0);" href="booking.php">Ticket Booking</a>
        </li>
    </ul>
</nav>

</header>

<!-- container-fluid removes spaces on the sides -->
<!-- col-1,2,3 changes width of the column -->
    <section class="container-fluid" style="
    background-color: #4e8757ff;
    min-height:90%;
    padding-bottom: 80px;">
        <section class="row align-items-start">

            <!-- 1ST BLOCK -->
            <section class="col-4">
                <div style="
                    width: 500px; 
                    background-color: #45683eff;
                    padding: 20px; 
                    margin-left:30px;
                    margin-top: 13%; 
                    text-align: center; 
                    border-radius: 5px;">
                    <img src="panda.jpg" alt="panda" style="
                    width: 100%;
                    display: block;
                    border-radius: 5px;">
                    
                    <p style="margin-top: 15px;
                    font-size: 20px;
                    color: white;
                    font-family:Montserrat,sans-serif">

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </p>

                    <button type="button" class="btn" style = "
                    font-weight: bold;
                    font-size: 20px;
                    color: white;
                    background-color: rgb(54, 82, 49);
                    margin-right:300px;
                    font-family: Montserrat,sans-serif;
                    width: 320px;">

                        Learn more about event

                    </button>
                </section>


                <!-- 2ND BLOCK -->
                <section class="col-4">
                <div style="
                    width: 500px; 
                    background-color: #45683eff;
                    padding: 17px; 
                    margin-left:30px;
                    margin-top: 13%; 
                    text-align: center; 
                    border-radius: 5px;">

                    <img src="red-pandabest.jpeg" alt="panda" style="
                    width: 460px;
                    height: 460px;
                    display: block;
                    border-radius: 5px;">
                    
                    <p style="margin-top: 15px;
                    font-size: 20px;
                    color: white;
                    font-family:Montserrat,sans-serif">

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </p>

                    <button type="button" class="btn" style = "
                    font-weight: bold;
                    font-size: 24px;
                    color: rgb(54, 82, 49);
                    background-color: rgb(216, 196, 13);
                    margin-right:300px;
                    font-family: Montserrat,sans-serif;
                    width: 320px;" onclick="location.href='booking.php'">

                        Book Tickets Now!

                    </button>
            
                </section>
           
           
           
           <!-- 3RD BLOCK -->
           
            <section class="col-4">

                                <div style="
                    width: 500px; 
                    background-color: #45683eff;
                    padding: 20px; 
                    margin-left:30px;
                    margin-top: 13%; 
                    text-align: center; 
                    border-radius: 5px;">

                    <img src="meerkat.jpeg" alt="panda" style="
                    width: 100%;
                    height: 460px;
                    display: block;
                    border-radius: 5px;">
                    
                    <p style="margin-top: 15px;
                    font-size: 20px;
                    color: white;
                    font-family:Montserrat,sans-serif">

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </p>

                    <button type="button" class="btn" style = "
                    font-weight: bold;
                    font-size: 20px;
                    color: white;
                    background-color: rgb(54, 82, 49);
                    margin-right:300px;
                    font-family: Montserrat,sans-serif;
                    width: 320px;">

                        Learn more about event

                    </button>
            </section>

            <style>
                .btn {
                    transition: background-color 0.2s ease, transform 0.2s ease;
                }

                .btn:hover {
                    transform: translateY(-2px);
                }

            </style>

            
        </section>
    </section>

    <footer class = "text-center p-3" style = "
    color: rgba(255, 255, 255, 0.322);
    background-color:rgb(47, 82, 52);
    height: 60px; font-size:20px">

        © 2025 Riget Zoo Adventures
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>