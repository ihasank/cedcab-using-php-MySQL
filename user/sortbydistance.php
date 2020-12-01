<?php include_once ("db.php") ?>

<?php

session_start();

?>

<html>
<head>
<title>RIDES BY DATE</title>
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
    <center><h1><span class="badge badge-pill badge-primary">YOUR RIDES</span></h1></center>
    <?php
        $u=$_SESSION["user_name"];
    ?>
    <ul class="nav justify-content-center">
        <li class="nav-item">
        <a class="nav-link" href="sortbyfare.php">SORT BY Fare</a>
    </ul>
    
    <center><span class="badge badge-pill badge-info">SORTED BY DATE</span></center>
<table id="ridesTable">
    <tr>
        <th>DATE</th>
        <th>FROM</th>
        <th>TO</th>
        <th>TOTAL DISTANCE</th>
        <th>LUGGAGE</th>
        <th>FARE</th>
    </tr>

    <?php
    $sql = "SELECT * FROM tbl_ride where customer_name='$u' ORDER BY ride_date ";
    $result = $conn->query($sql);
    ?>

						 
    <tbody>
    <tr>
    <?php while($row = $result->fetch_assoc()) 
    {
    echo "<td>".$row["ride_date"]."</td><td>".$row["from1"]."</td><td> ".$row["to1"]."</td><td>".$row["total_distance"]."</td><td>".$row["luggage"]."</td><td> ".$row["total_fare"]."</td></tr>";  ?>
    
    <?php
    }?>									
    </tbody>
</table>
<ul class="nav justify-content-center">
        <li class="nav-item">
        <a class="nav-link active" href="user.php">Book a cab</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="moneyspent.php">Money Spent</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="changeinfo.php">Change Info</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
        </li>
    </ul>
</body>
</html>