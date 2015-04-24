 <?php
include("header.php");
?>

<html>
<META HTTP-EQUIV="Refresh" CONTENT="50;URL=connexion.php">
<div class="row">
  <div class="col-sm-2">
    <div class="row">
	  <h3><aside class="col-md-12"><em>Veuillez vous connecter pour acceder a l'espace administrateur:</em></aside></h3>
    </div>
  </div>
  
  <section class="col-sm-10 col-md-8">

<form action="verif_admin.php" method="post">

<label for="exampleInputEmail1">Login :</label>
<input type="text" class="form-control" name="login3" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"><br />
<label for="exampleInputEmail1">password : </label>
<input type="password" class="form-control" name="pass3" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />
<br />
<input type="submit" name="connexion2" class="btn btn-primary btn-lg btn-block" value="Connexion">
</form>

<?php
//message d'erreur si MDP ou login faux 
if (isset($_GET['err'])){
echo '<script language="Javascript"> alert ("'.htmlentities(urldecode($_GET['err'])).'" ) </script>';
}

//message d'erreur si un des deux champs est vide
if (isset($_GET['error'])){
echo '<script language="Javascript"> alert ("'.htmlentities(urldecode($_GET['error'])).'" ) </script>';
}

//message d'erreur si l'acces n'est pas autorisé
if (isset($_GET['accesrefu'])){
echo '<script language="Javascript"> alert ("'.htmlentities(urldecode($_GET['accesrefu'])).'" ) </script>';
}
?>


<form method="post" action="index.php">
<p><center><input type="submit" name="retour" class="btn btn-info" value="RETOUR"/></center></p>
</form> 

</section>
</div>
</html>
