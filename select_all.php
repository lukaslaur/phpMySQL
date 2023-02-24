<?php 

$sql = "SELECT JuokelioID, Juokelio_klausimas, Juokelio_atsakymas FROM juokeliai";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo "Juokelio ID: " . $row["JuokelioID"]. " - Juokelio Klausimas: " . $row["Juokelio_klausimas"]. " - Juokelio atsakymas" . $row["Juokelio_atsakymas"]. "<br>";
}
} else {
  echo "0 results";
}

?>