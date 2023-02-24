<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
  <style>
    *{
        font-family:Arial, Helvetica, sans-serif;
    }
    body{
        background: #222;
    }
    div{
        margin: auto;
        padding: 3px;
    }
    h1{
        color:lightskyblue;
    }
  </style>
</head>

<?php

include "connection.php";
$keywordfromform =$_GET["keyword"];
$keywordfromform=addslashes($keywordfromform);
echo "<h1>Receptu paieska su zodziu $keywordfromform ...</h1>";

$sql = "SELECT ReceptoID, ReceptoPavadinimas, Receptas FROM receptai WHERE ReceptoPavadinimas LIKE '%".$keywordfromform."%'";
$result = $mysqli->query($sql) or die("Error");
?>


<div id="accordion">
<?php

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3>$row[ReceptoPavadinimas]</h3>";
        echo "<div><p>$row[Receptas]</p></div>";
    }
    } else {
        echo "Rezultatu nera";
    }
    $mysqli->close();
?>
</div>