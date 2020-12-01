<?php include_once ("db.php") ?>

<?php

session_start();
$u=$_SESSION["user_name"];

if(isset($_POST['click']))
{	 
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$pass=$_POST['pass'];

$sql = "UPDATE tbl_user SET name='$name',pass='$pass',mobile='$mobile' WHERE user_name='$u' ";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Updated successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

<html>
<head>
<title>CHANGE INFO</title>
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
#outer
{
    margin:0px auto;
    height:500px;
    width:500px;
}
label
{
    font-size:large;
    color:black;
}
</style>
</head>
<body>
    <div class="alert" role="alert">
        <h1 class="text-center">cedCab</h1>
    </div>
    <div id="outer">
    <h1><span class="badge badge-pill badge-Primary">Update Here</span></h1>
        <br/>
        <form action="changeinfo.php" method="post">
            
            <div class="form-group">
                <label> Name </label>
                <input type="text" class="form-control" name="name" placeholder="New Name" required/>
            </div>

            <div class="form-group">
                <label> Mobile Number </label>
                <input type="number" class="form-control" name="mobile" placeholder="New Mobile Number" required/>
            </div>

            <div class="form-group">
                <label> Password </label>
                <input type="password" class="form-control" name="pass" placeholder="New Password" required/>
            </div>

            <div class="form-group">
                <button type="submit" name="click" class="btn btn-success">UPDATE</button>
            </div>
        </form> 
    </div>
    </div>
<nav class="navbar fixed-bottom"   style="background-color: #e3f2fd;">
<a class="navbar-brand" href="#"> &copy HK</a>
<ul class="nav justify-content-center">
        <li class="nav-item">
        <a class="nav-link active" href="user.php">Book a cab</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="ridestatus.php">Ride Status</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="rides.php">Your Rides</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="moneyspent.php">Money Spent</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
        </li>
    </ul>
    </nav>
</body>
</html>