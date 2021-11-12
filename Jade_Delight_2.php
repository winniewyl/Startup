<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>Jade Delight 2</title>
    <header>
        <h1>Jade Delight!</h1>
    </header>
</head>
<body>

<?php
//establish connection info
$server = "sql111.epizy.com";
$userid = "epiz_29669488";
$pw = "STKSXMVdoW89o";
$db= "epiz_29669488_Jade_Delight";


// Create connection
$conn = new mysqli($server, $userid, $pw );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//select the database
$conn->select_db($db);

//run a query
$sql = "SELECT ItemName FROM Jade_Delight_Products";
echo "<br />The query is: " . $sql ."<br />";
$result = $conn->query($sql);


	
//close the connection	
$conn->close();

?>




</body>
   
</html>