<?php include_once ("db.php") ?>

<?php

session_start();

?>

<html>
<head>
<title>RIDES </title>
        <link rel="stylesheet" href="task5.css"/>
        <link rel="stylesheet" href="bootstrap.css"/>
        <style>.Error {color: #FF0000;font-style:italic;} .alert{background-color:#ffc107;} option{background-color: gold;}</style>
<style>
body
{
    background-image:url('pic.jpg');
}
#ridesTable,th,tr,td
{
    border:1px solid black;
    margin:0px auto;
    background-color:#ffc107;
}

</style>
</head>
<body>
    <div class="alert" role="alert">
        <h1 class="text-center">cedCab</h1>
    </div>
    <center><h1><span class="badge badge-pill badge-primary">ADMIN PORTAL</span></h1></center>
    

<ul class="nav justify-content-center">
        <li class="nav-item">
        <a class="nav-link active" href="alldata.php">Rides</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="usersdata.php">Users</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="moneyreceived.php">Money Received</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
        </li>
    </ul>

    <nav class="navbar fixed-bottom"   style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#"> &copy HK</a>
    </nav>
</body>
</html>