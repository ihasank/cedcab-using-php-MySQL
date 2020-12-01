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
    <center><h1><span class="badge badge-pill badge-primary">USERS</span></h1></center>
    <?php 
        //$u=$_SESSION["user_name"];
    ?>

<table id="ridesTable">
    <tr>
        <th>USER ID</th>
        <th>USER NAME</th>
        <th>NAME</th>
        <th>DATE OF SIGNUP</th>
        <th>MOBILE</th>
        <th>STATUS</th>
        <th>PASSWORD</th>
        <th>ACTION</th>
        <th>ACTION</th>
    </tr>

    <?php
    $sql = "SELECT * FROM tbl_user";
    $result = $conn->query($sql);
    ?>

    
						 
    <tbody>
    <tr>
    <?php while($row = $result->fetch_assoc()) 
    {
    
    echo "<tr><td>".$row["user_id"]."</td><td>".$row["user_name"]."</td><td> ".$row["name"]."</td><td>".$row["dateofsignup"]."</td><td>".$row["mobile"]."</td><td> ".$row["isblock"]."</td><td>".$row["pass"]. "</td><td><a href='block-process.php?user_id= $row[user_id]'>Block</a></td><td><a href='unblock-process.php?user_id= $row[user_id]'>Unblock</a></td></tr>";  ?>
    
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
        <a class="nav-link" href="alldata.php">Ride Status</a>
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