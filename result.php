<head> <link rel="stylesheet" type="text/css" href="style.css"> <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>Your Result</title></head>
<body>
  <center>
    <div class="txt">Online Result Management </div>
    <div class="content">
      <div class="content3" style="height: 45%">
        <div class="max">Input Panel</div>

        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBNAME";
$roll = $_POST["roll"];
$class = $_POST["class"] ;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, roll, class, language , math, physics, chemistry GPA FROM result1 WHERE roll = $roll AND class = $class LIMIT 1 " ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="list"> FULL NAME: ' . $row["name"]. '</div>
        <div class="list">ROLL: ' . $row["roll"]. '</div>
        <div class="list">CLASS: ' . $row["class"]. '</div>
        <div class="list">LANGUAGE: ' . $row["language"]. '</div>
         <div class="list">MATH: ' . $row["math"]. '</div>
         <div class="list">PHYSICS: ' . $row["physics"]. '</div>'
          ;
    }
} else {
    echo '<center><h1>SPRRY NO RESULT FOUND PLEASE INSERT CORRECT DATA IN THE INPUT PANEL</h1></center>';
}

$conn->close();
?>




</div></div></center></body>
