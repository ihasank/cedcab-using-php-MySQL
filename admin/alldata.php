<?php include_once ("db.php") ?>

<?php

session_start();

?>

<?php

    

?>
 
<html>
<head>
<title>RIDES </title>
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
    <center><h1><span class="badge badge-pill badge-primary">RIDES</span></h1></center>
    <?php 
        $u=$_SESSION["user_name"];
    ?>

    <ul class="nav justify-content-center">
        <li class="nav-item">
        <a class="nav-link" href="sortbyfareAdmin.php">SORT BY Fare</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="sortbydateAdmin.php">SORT BY Date</a>
    </ul>

<table id="ridesTable">
    <tr>
        <th>Ride ID</th>
        <th>ACTION</th>
        <th>DATE</th>
        <th>FROM</th>
        <th>TO</th>
        <th>TOTAL DISTANCE</th>
        <th>LUGGAGE</th>
        <th>FARE</th>
        <th>CUSTOMER NAME</th>
        <th>STATUS</th>
        <th>ACTION</th>
        <th>ACTION</th>
        <th>ACTION</th>
    </tr>

    <?php
    $sql = "SELECT * FROM tbl_ride";
    $result = $conn->query($sql);
    ?>

    
						 
    <tbody>
    <tr>
    <?php while($row = $result->fetch_assoc()) 
    {
    
    echo "<tr><td>".$row["ride_id"]."</td><td><a href='delete-process.php?ride_id= $row[ride_id]'>Delete</a></td><td>".$row["ride_date"]."</td><td>".$row["from1"]."</td><td> ".$row["to1"]."</td><td>".$row["total_distance"]."</td><td>".$row["luggage"]."</td><td> ".$row["total_fare"]."</td><td>".$row["customer_name"]. "</td><td>" .$row["status"]. "</td><td><a href='approve-process.php?ride_id= $row[ride_id]'>APPROVE</a></td><td><a href='pending-process.php?ride_id= $row[ride_id]'>PENDING</a></td><td><a href='cancel-process.php?ride_id= $row[ride_id]'>CANCEL</a></td></tr>";  ?>
    
    <?php
    }?>									
    </tbody>
</table>

<nav class="navbar fixed-bottom"   style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#"> &copy HK</a>
<ul class="nav justify-content-center">
        <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
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
    </nav>
</body>
</html>