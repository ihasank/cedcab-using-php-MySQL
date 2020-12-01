<?php include_once ("db.php");
if(isset($_POST['save']))
{	
 
$user_name=$_POST['user_name'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$pass=$_POST['pass'];
$rpassword=$_POST['rpassword'];


if(($_POST['pass'])==($_POST['rpassword']))
{
    $sql = "INSERT INTO tbl_user ( user_name ,name,mobile,pass,is_admin,isblock) VALUES ('$user_name','$name','$mobile','$pass','1','1')";
    if ($conn->query($sql) === TRUE) 
    {
    echo "New record created successfully";
    
    } 
    else
    {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}



else
{
    header("Location: http://localhost/9nov/cab/index.php");
}
}
?>