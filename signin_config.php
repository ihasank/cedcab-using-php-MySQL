<?php include_once ("db.php");
session_start();

if(isset($_POST['signin']))
{	 
$user_name=$_POST['user_name'];
$pass=$_POST['pass'];

$sql = "SELECT * FROM tbl_user WHERE EXISTS (SELECT * FROM tbl_user WHERE user_name='$user_name' and pass='$pass' and isblock='0') ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    $_SESSION['user_name']=$user_name;
    $_SESSION['pass']=$pass;
    header("Location: http://localhost/9nov/cab/user/user.php");
} 
else
{
   echo "You are Blocked by Admin";
}
$conn->close();
}


if(isset($_POST['signin']) && ($_POST['user_name']=='Admin') && ($_POST['pass']=='123'))
{
    $_SESSION['user_name']=$user_name;
    $_SESSION['pass']=$pass;
    header("Location: http://localhost/9nov/cab/admin/index.php");
}
elseif(isset($_POST['signin']) && ($_POST['user_name']=='') && ($_POST['pass']==''))
{
    header("Location: http://localhost/9nov/cab/signin.php");
}

$conn->close();
?>