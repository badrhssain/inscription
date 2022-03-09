<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="insc.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          <div id="leftmain" class="col-md-6">
          <img id="logo" src="logo-removebg-preview (1).png">
          <h1>Bonjour, beauté !<strong > Inscrivez-vous.</strong></h1>
          <h3>Registre</h3>
          <form action="submit.php" method="POST">
          <input type ="text" name="email" id="email" placeholder="Adresse e-mail"><br>
          <input type ="text" name="nom"  id="nom" placeholder="Nom">
          <input type ="text" name="prenom"  id="prenom" placeholder="Prénom"><br>
          <input type ="text" name="adresse"  id="adr" placeholder="Adresse"><br>
          <input type ="text" name="number"  id="num" placeholder=" Numéro de tel"><br>
          <input type ="text" name="password"  id="mdp" placeholder="Mot de passe"><br>
          <input type ="text" name="password"  id="mdp" placeholder="confirmer mot de passe"><br>
          <div id="svn"><a><input type="checkbox" id="ho"> Se souvenir de moi</a><br></div>
          <button type="submit" name="submit" id="submit">S'inscrire</button><br>
        </form>
    </div>
    <div id="rightmain" class="col-md-6">
      <h1 class="textimg">You deserve it beauty</h1>
      <hr>
    </div>
  </div>
</div>

</body>
</html>