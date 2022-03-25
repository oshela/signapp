<?php
include 'db.php';
?>
<?php
    if(isset($_POST["btn_sign_in"])){
       /*'<script>
        var user-location;
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
             } else { 
               x.innerHTML = "Geolocation is not supported by this browser.";
           }
       }
       user-location =position.coords.latitude + " "+ position.coords.longitude;
        </script>';*/
            $firstname = $_POST["first_name"];
            $lastname = $_POST["last_name"];
    /*$where ='<script>
     user-location =position.coords.latitude + " "+ position.coords.longitude;
    </script>';
    $nhub = 9.8790871 + " "+ 8.8742863;
    if($where == $nhub){*/
  $query= "INSERT INTO sign_ins(first_name,last_name,date_and_time) VALUES('$firstname','$lastname',now())";
   $result= mysqli_query($conn,$query);
    if(!$result){
        die("error occured".mysqli_error($conn));
        exit();
     }
     else{
        echo '<script>
        window.alert("sign in successful");
        </script>';
    }
//}else{
  //  echo "you are not in the correct location";
//}
}else if(isset($_POST["btn_sign_out"])){
    /*'<script>
    var user-location;
   function getLocation() {
        if (navigator.geolocation) {
           navigator.geolocation.getCurrentPosition(showPosition);
       } else { 
           x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }
    user-location =position.coords.latitude + " "+ position.coords.longitude;
    </script>'; */
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
   /*$where ='<script>
    user-location =position.coords.latitude + " "+ position.coords.longitude;
   </script>';
  $nhub = 9.8790871 + " "+ 8.8742863;
   if($where == $nhub){*/
$query= "INSERT INTO sign_outs(first_name,last_name,date_and_time) VALUES('$firstname','$lastname',now())";
$result= mysqli_query($conn,$query);
if(!$result){
die("error occured".mysqli_error($conn));
exit();
}else{
echo '<script>
window.alert("sign out successful");
</script>';
    }
}
//}else{
 //   echo "you are not in the correct location";
//}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>signsmart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <script src="main.js"></script>
    <style>
    body{
        background-image:linear-gradient(to right bottom,#87bdd8,#55c577d0,#079163c0),url(img/time.jpeg);
        background-size: 200vh;
        background-repeat: no-repeat;
        background-position:right;
        height:100vh;
        filter: alpha(opacity=60); 
    }
    ul{
        padding: 0px;
        overflow: hidden;
        margin: 0px;
        list-style-type: none;
    }
    li{
        float: right;
    }
    li a{
        display: block;
        padding: 10px;
        color: whitesmoke;
        text-decoration:none;
    }
    a:hover{
        background-color: gray;
    }
    .qq{
        margin-top:0px;
        text-align: center;
        font-size: 50px;
        color
    }
    .box{
        height:60vh;
        margin-top:110px;
        width: 300px;
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #191919;
        text-align: center;
    
    }
    .box h1{
        color: whitesmoke;
        text-transform: uppercase;
        font-weight: 500;
    
    }
    .box input[type= "text"],.box input[type = "password"]{
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #3498db;
        padding: 14px 10px;
        width: 200px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
    }
    .box input[type= "text"]:focus,.box input[type = "password"]:focus{
    width: 220px;
    border-color: #2ecc71;
    }
    .box input[type= "submit"]{
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #2ecc71;
        padding: 14px 40px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
    
    }
    .box input[type= "submit"]:hover{
        background: #2ecc71;
    }
    
    
    a:active{
        background-color:grey;
    }
   button{
       border-style:none;
       border-radius:15px;
       background-color:rgb(23, 204, 25);
       height:30px;
       width:15vh;
   }
   button:hover{
       background:rgb(96, 255, 25);
   }
    
    </style>
</head>
<body>
<p id="demo"></p>
   
<header class="booty">
<div >
    <nav>
        <ul>
             <label style="color:black; font-size:40px"><i><b>signsmart.ng</b></i></label>
            <li><a href="about_us.html">About-us</a></li>
            <li><a href="sign_out.php">Sign-outs</a></li>
            <li><a href="sign_in.php">Sign-ins</a></li>
            <li><a href="#" class = "active">Home</a></li>
        </ul>
        </nav><hr>
        <div class = "osh">
        <h1 class="qq"><i>Signsmart.ng<br><small>Do it Smart</small></i></h1>
        <hr>   
   
    <div style = "margin-top:30px;">
    <form class="box" action = "" method="post">
        <h1>SIGN HERE</h1>
        <input type="text"name ="first_name" placeholder="enter your first name">
        <input type="text"name ="last_name" placeholder=" enter your last name">
        <input type="submit"name ="btn_sign_in" placeholder="sign in">
        <input type="submit"name ="btn_sign_out" placeholder="sign out">
    </form>
</div>
    </div>
</div>
    </div>
    </div>
   
</form>
</div>
</header>
</body>
</html>