<?php

include "connection.php";
$new_recipe_name = $_GET["recipename"];
$new_recipe = $_GET["recipe"];
echo "<h1>Pridedam recepta su pavadinimu: \"$new_recipe_name\" , pats receptas: \"$new_recipe\"...</h1>";

$new_recipe_name=addslashes($new_recipe_name);
$new_recipe=addslashes($new_recipe);

$sql = "INSERT INTO receptai (ReceptoID, ReceptoPavadinimas, Receptas) VALUES (NULL, '$new_recipe_name', '$new_recipe')";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

?>

<a href= "nd.php">Grizti atgal</a>
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
