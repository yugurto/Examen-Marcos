<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscripcio</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<body>
<header>
        <?php include 'header.php' ?>
    </header>
<form class="form-registrar" action="index.php" method="post">
    <input type="hidden" name="r" value="do_register">
<div class="mb-3">
    <label for="exampleInputText1" class="form-label">Nom</label>
    <input name="nom" type="text" class="form-control" id="nom" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputText2" class="form-label">Cognoms</label>
    <input name="cognoms" type="text" class="form-control" id="cognoms" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputDate1" class="form-label">Data de naixament</label>
    <input name="data_naix" type="date" class="form-control" id="data" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">adreca</label>
    <input name="adreca" type="text" class="form-control" id="adreca" aria-describedby="emailHelp">
  </div>
  <input type="file" name="foto" id="foto" accept="image/jpg" class="form-control container-m10">
  <button type="submit" class="btn btn-primary">Enviar</button>
</form> 
</body>
</html>