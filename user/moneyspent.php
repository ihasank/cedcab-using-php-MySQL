<?php include_once ("db.php") ?>

<?php

session_start();

?>

<html>
<head>
<title>RIDES page</title>
        <link rel="stylesheet" href="task5.css"/>
        <link rel="stylesheet" href="bootstrap.css"/>
        <style>.Error {color: #FF0000;font-style:italic;} .alert{background-color:#ffc107;} option{background-color: gold;}</style>
<style>
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
    <center><h1><span class="badge badge-pill badge-success">MONEY SPENT</span></h1></center>
    <?php
        $u=$_SESSION["user_name"];
    ?></h2>


<table id="ridesTable">
    <tr>
        <th>TOTAL FARE</th>
    </tr>

    <?php
    $sql = "SELECT SUM(total_fare) as t FROM tbl_ride where customer_name='$u' ";
    $result = $conn->query($sql);
    ?>

						 
    <tbody>
    <tr>
    <?php while($row = $result->fetch_assoc()) 
    {
    echo "<td><center> Rs " .$row["t"].".00</center></td>";  ?>
    
    <?php
    }?>									
    </tbody>
</table>


        		 
<nav class="navbar fixed-bottom"   style="background-color: #e3f2fd;">
<a class="navbar-brand" href="#"> &copy HK</a>
<ul class="nav justify-content-center">
        <li class="nav-item">
        <a class="nav-link active" href="user.php">Book a cab</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="rides.php">Your Rides</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="ridestatus.php">Ride Status</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="changeinfo.php">Change Info</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
        </li>
    </ul>
    </nav>
</body>
</html>