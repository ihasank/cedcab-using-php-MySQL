<html>
<head>
    <title>SIGN IN</title>
    <link rel="stylesheet" href="bootstrap.css"/>
    <style>.Error {color: #FF0000;font-style:italic;} .alert{background-color:#ffc107;} option{background-color: gold;}</style>
    <style>
    #signin{background-color: #ffc107;height:350px;width:350px;margin-top:100px;margin-left: 560px;}
    </style>
</head>
<body>
<div class="alert" role="alert">
        <h1 class="text-center">cedCab</h1>
</div>
<div id="signin">
<center><h1>SIGN-IN</h1></center>
<hr>
<form method="post" action="signin_config.php">
<table>
    <tr>
        <td><label>Username</label></td>
        <td><input type="text" name="user_name"/></td>
        
    </tr>
    
    <tr>
        <td><label>Password</label></td>
        <td><input type="password" name="pass"/></td>
    </tr>
    
    <tr>
        <td></td>
        <td><input type="submit" name="signin" value="SIGN IN"/></td>
    </tr>
    <tr><td>Not a member?</td><td><a href="index.php">SIGN UP</a></td></tr>
</form>
</table>

<nav class="navbar fixed-bottom"   style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#"> &copy HK</a>
    </nav>
</body>
</html>