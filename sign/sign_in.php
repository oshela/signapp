<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "registry";

$conn = mysqli_connect($server , $username ,$password , $db);
 $sql = "SELECT * FROM sign_ins";
 $result = $conn-> query($sql);
 $profpic = "time.jpeg";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>sign-ins</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
    body{
        background-image:linear-gradient(to right bottom,
        #87bdd8,
        #55c577d0,
        #079163c0),
        url(img/time.jpeg);
        background-size: 200vh;
        background-repeat: no-repeat;
        background-position:right;
        height:100vh;
        filter: alpha(opacity=40); 
    }
    ul{
        padding: 0px;
        overflow: hidden;
        margin: 0px;
        list-style-type: none;
        background-color:black;
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
    .postion{
        text-align:center;
        margin-left:50vh;
    }    
     </style>
</head>
<body>
<header class="booty">
<div >
    <nav>
        <ul>
             <label style="color:dimgrey; font-size:40px"><i><b>signsmart.ng</b></i></label>
            <li><a href="about_us.html">About-us</a></li>
            <li><a href="sign_out.php">Sign-outs</a></li>
            <li><a href="sign_in.php" class = "active">Sign-ins</a></li>
            <li><a href="index.php">Home</a></li>
        </ul>
        </nav>
        <br><br><form style="margin-left:80%"; method="POST" action= "">
     <input type ="text" name = "first_name" placeholder="enter firstname">
     <button type="submit" name="btn">search</button><br>
     </form>
    <div class = "postion">
    <h1 style="margin-right:50vh;"><b><i><u>sign-ins</u></i></b></h1>
    <table width = "600px" border = "1" celllspacing = "1">
        <tr>
            <th>id</th>
            <th>first name</th>
            <th>last name</th>
            <th>time</th>
            <tr>
            <?php
$result = $conn-> query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
      echo "<tr>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['first_name']."</td>";
      echo "<td>".$row['last_name']."</td>";
      echo "<td>".$row['date_and_time']."</td>";
      echo "</tr>";      
    }
}
     ?>
     </div>
     </table>  
</body>
</html>