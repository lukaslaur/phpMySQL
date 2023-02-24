<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

</head>
<body>



<form class="form-horizontal" action = "keyword.php">
<fieldset>
<legend>Recepto paieska</legend>
<div class="form-group">
  <div class="col-md-4">
  <input id="keyword" name="keyword" type="text" placeholder="Iveskite pavadinima arba jo dali" class="form-control input-md">
  </div>
</div>
<div class="form-group">
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Paieska</button>
  </div>
</div>
</fieldset>
</form>


<form class="form-horizontal" action = "add_recipe.php">
<fieldset>
<legend>Prideti recepta</legend>
<div class="form-group">
  <div class="col-md-4">
  <input id="recipename" name="recipename" type="text" placeholder="Recepto pavadinimas" class="form-control input-md">
  </div>
</div>
<div class="form-group">
  <div class="col-md-4">
  <input id="recipe" name="recipe" type="text" placeholder="Receptas" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Pateikti</button>
  </div>
</div>
</fieldset>
</form>


<style>
    body{
        background: #222;
    }
    div{
        margin: auto;
        padding: 3px;
    }
    legend {  
    padding: 5px;  
    margin-left: calc(50% - 35px - 8px);  
    color: #154c79;   
    font-size: 20px;  
    text-transform: capitalize;  
    }  

</style>
</body>
</html>