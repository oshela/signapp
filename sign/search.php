<?php
include 'db.php';
?>
<?php
if(isset($_POST["btn-search"])){
    $search =$_POST["first_name"];
$sql= "SELECT* FROM sign_ins WHERE first_name = $search";
$result = $conn-> query($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
$result = $conn-> query($sql);
if($result){
    while($row = $result-> 
      echo "<p>".$row['id']."</p>";
      echo "<p>".$row['first_name']."</p>";
      echo "<p>".$row['last_name']."</p>";
      echo "<p>".$row['date_and_time']."</p>";      
    }
}

?>
</body>
</html>