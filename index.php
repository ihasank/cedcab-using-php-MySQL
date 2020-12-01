<html>
<head><title>HOMEPAGE</title></head>
<style>#signup{background-color: #ffc107;height:350px;width:350px; margin-top:100px;margin-left: 560px;} </style>
<link rel="stylesheet" href="bootstrap.css"/>
<style>.Error {color: #FF0000;font-style:italic;} .alert{background-color:#ffc107;} option{background-color: gold;}</style>
<body>
<div class="alert" role="alert">
        <h1 class="text-center">cedCab</h1>
</div>
<div id="outer">
    <div id="signup">
        <center><h1>SIGN-UP</h1></center>
        <hr>
        <form method="post" action="signup.php">
        <table>
            <tr>
                <td><label>Username</label></td>
                <td><input type="text" name="user_name" required/></td>
                
            </tr>
            
            <tr>
                <td><label>Name</label></td>
                <td><input type="text" name="name" required/></td>
            </tr>
            
            <tr>
                <td><label>Mobile Number</label></td>
                <td><input type="number" name="mobile" required/></td>
            </tr>
            <tr>
                <td><label>Password</label></td>
                <td><input type="password" name="pass" required/></td>
            </tr>
            <tr>
                <td><label>Re-enter Password</label></td>
                <td><input type="password" name="rpassword" required/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save" value="SIGN UP"/></td>
            </tr>
            <tr><td>Already a member?</td><td><a href="signin.php">SIGN IN</a></td></tr>
        </table>
        </form>
    </div>
</div>

<nav class="navbar fixed-bottom"   style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#"> &copy HK</a>
    </nav>
</body>
</html>