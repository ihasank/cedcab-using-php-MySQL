<?php include_once ("db.php") ?>

<?php

session_start();

?>

<html>
<head>

<title>RIDE STATUS </title>
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
    <center><h1><span class="badge badge-pill badge-primary">RIDE STATUS</span></h1></center>
    <?php 
        $u=$_SESSION["user_name"];
    ?>
    <center><p><span class="badge badge-pill badge-SUCCESS">0 - 'RIDE CANCELLED' || 1 - 'RIDE PENDING' || 2 - 'RIDE COMPLETED'</span></p></center>

    <ul class="nav justify-content-center">
        <li class="nav-item">
        <a class="nav-link" href="sortbyfare.php">SORT BY Fare</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="sortbydistance.php">SORT BY Date</a>
    </ul>
    
<table id="ridesTable">
    <tr>
        <th>DATE</th>
        <th>FROM</th>
        <th>TO</th>
        <th>TOTAL DISTANCE</th>
        <th>LUGGAGE</th>
        <th>FARE</th>
        <th>RIDE STATUS</th>
    </tr>

    <?php
    $sql = "SELECT * FROM tbl_ride where customer_name='$u' ";
    $result = $conn->query($sql);
    ?>

						 
    <tbody>
    <tr>
    <?php while($row = $result->fetch_assoc()) 
    {
    echo "<td>".$row["ride_date"]."</td><td>".$row["from1"]."</td><td> ".$row["to1"]."</td><td>".$row["total_distance"]."</td><td>".$row["luggage"]."</td><td> ".$row["total_fare"]."</td><td>" .$row["status"]. "</td></tr>";  ?>
    
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
        <a class="nav-link" href="moneyspent.php">Money Spent</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="changeinfo.php">Change Info</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="changeinfo.php">Log Out</a>
        </li>
    </ul>
    </nav>
</body>
</html>