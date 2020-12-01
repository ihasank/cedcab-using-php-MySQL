<?php include_once ("db.php"); ?>

<?php session_start(); ?>


<?php
$dist_array=array(
    'Charbagh'=>0,
    'IndiraNagar'=>10,
    'BBD'=>30,
    'Barabanki'=>60,
    'Faizabad'=>100,
    'Basti'=>150,
    'Gorakhpur'=>210
);
$fare="";
$u=$_SESSION["user_name"];
        

if(isset($_GET['click'])){
    
        $pick=$_GET['pick'];
        $drop=$_GET['drop'];
        $ctype=$_GET['ctype'];
        $luggage=$_GET['luggage'];
        $distance=abs($dist_array[$pick]-$dist_array[$drop]);
            


            if($ctype=='CedMicro'){
                $fixedfare=50;
                $fare=0;
                if($distance>0 && $distance<=10)
                {
                    $fare=$fixedfare+$distance*13.50;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }

                }
                elseif($distance>10 && $distance<=60)
                {
                    $fare=$fixedfare+(10*13.50)+($distance-10)*12.00;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($distance>60 && $distance<=160)
                {
                    $fare=$fixedfare+(10*13.50)+(50*12.00)+($distance-50)*10.20;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($distance>160)
                {
                    $fare=$fixedfare+(10*13.50)+(50*12.00)+(100*10.20)+($distance-160)*8.50;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
            }

            elseif($ctype=='CedMini'){
                $fixedfare=150;
                $fare=0;
                if($distance>0 && $distance<=10)
                {
                    $fare=$fixedfare+$distance*14.50;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($distance>10 && $distance<=60)
                {
                    $fare=$fixedfare+(10*14.50)+($distance-10)*13.00;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($distance>60 && $distance<=160)
                {
                    $fare=$fixedfare+(10*14.50)+(50*13.00)+($distance-50)*11.20;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($distance>160)
                {
                    $fare=$fixedfare+(10*14.50)+(50*13.00)+(100*11.20)+($distance-160)*9.50;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                if($luggage>0 && $luggage<=10)
                {
                    $fare=$fare+50;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($luggage>10 && $luggage<=20)
                {
                    $fare=$fare+100;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($luggage>20)
                {
                    $fare=$fare+200;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
               

                
            }


            elseif($ctype=='CedRoyal'){
                $fixedfare=200;
                $fare=0;
                if($distance>0 && $distance<=10)
                {
                    $fare=$fixedfare+$distance*15.50;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($distance>10 && $distance<=60)
                {
                    $fare=$fixedfare+(10*15.50)+($distance-10)*14.00;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($distance>60 && $distance<=160)
                {
                    $fare=$fixedfare+(10*15.50)+(50*14.00)+($distance-50)*12.20;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($distance>160)
                {
                    $fare=$fixedfare+(10*15.50)+(50*14.00)+(100*12.20)+($distance-160)*10.50;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                if($luggage>0 && $luggage<=10)
                {
                    $fare=$fare+50;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($luggage>10&&$luggage<=20)
                {
                    $fare=$fare+100;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($luggage>20)
                {
                    $fare=$fare+200;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
            }


            elseif($ctype=='CedSUV')
            {
                $fixedfare=250;
                $fare=0;
                if($distance>0 && $distance<=10)
                {
                    $fare=$fixedfare+$distance*16.50;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($distance>10 && $distance<=60)
                {
                    $fare=$fixedfare+(10*16.50)+($distance-10)*15.00;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($distance>60 && $distance<=160)
                {
                    $fare=$fixedfare+(10*16.50)+(50*15.00)+($distance-50)*13.20;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($distance>160)
                {
                    $fare=$fixedfare+(10*16.50)+(50*15.00)+(100*13.20)+($distance-160)*11.50;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                if($luggage>0 && $luggage<=10)
                {
                    $fare=$fare+100;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($luggage>10&&$luggage<=20)
                {
                    $fare=$fare+200;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
                elseif($luggage>20)
                {
                    $fare=$fare+400;
                    $sql = "INSERT INTO tbl_ride (from1,to1,total_distance,luggage,total_fare,customer_name,status) VALUES ('$pick', '$drop', '$distance' , '$luggage', '$fare' ,'$u','1')";
                    if ($conn->query($sql) === TRUE) {
                      header("Location: http://localhost/9nov/cab/user/ridestatus.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                }
            }

}


?>

<html>
    <head>
        <title>BOOKING page</title>
        <link rel="stylesheet" href="task5.css"/>
        <link rel="stylesheet" href="bootstrap.css"/>
        <style>.Error {color: #FF0000;font-style:italic;} .alert{background-color:#ffc107;} option{background-color: gold;}
          #container {margin:0px auto;} label{font-size:large;}
        </style>
    </head>
    <body>
    <div class="alert" role="alert">
        <h1 class="text-center">cedCab</h1>
    </div>
    <h2><?php  echo "Hey , ".$_SESSION["user_name"] ;?></h2>
    <div id="container">
    
        <h1><span class="badge badge-pill badge-warning">Book a Taxi</span></h1>
        <br/>
        <form action="user.php" method="get">
            
            <div class="form-group">
                <label> PICK-UP</label>
                <select name="pick">
                    <option value="Charbagh">Charbagh</option>
                    <option value="IndiraNagar">IndiraNagar</option>
                    <option value="BBD">BBD</option>
                    <option value="Barabanki">Barabanki</option>
                    <option value="Basti">Basti</option>
                    <option value="Faizabad">Faizabad</option>
                    <option value="Gorakhpur">Gorakhpur</option>
                `</select>
                
            </div>

            <div class="form-group">
                <label> DROP</label>
                <select name="drop">
                    <option value="Charbagh">Charbagh</option>
                    <option value="IndiraNagar">IndiraNagar</option>
                    <option value="BBD">BBD</option>
                    <option value="Barabanki">Barabanki</option>
                    <option value="Basti">Basti</option>
                    <option value="Faizabad">Faizabad</option>
                    <option value="Gorakhpur">Gorakhpur</option>
                `</select>
            </div>

            <div class="form-group">
                <label> CAB-TYPE</label>
                <select name="ctype" id="cars">
                    <option value="CedMicro">CedMicro</option>
                    <option value="CedMini">CedMini</option>
                    <option value="CedRoyal">CedRoyal</option>
                    <option value="CedSUV">CedSUV</option>
                `</select>
            </div>

            <div class="form-group">
                <label> LUGGAGE</label>
                <input type="number" class="form-control" name="luggage" placeholder="Enter weight in kg"/>
            </div>

            <div class="form-group">
                <button type="submit" name="click" class="btn btn-success">CALCULATE FARE</button>
                <h1><?php  echo "Rs $fare.00" ?></h1>
            </div>
        </form> 
    </div>
    
    <nav class="navbar fixed-bottom"   style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#"> &copy HK</a>
      <ul class="nav">
        <li class="nav-item">
        <a class="nav-link" href="rides.php">Your Rides</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="ridestatus.php">Ride Status</a>
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
    </nav>
    </body>
</html>

