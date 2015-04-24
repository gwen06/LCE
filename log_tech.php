<?php
include("header.php");
?>

<html>
<META HTTP-EQUIV="Refresh" CONTENT="50;URL=log_tech.php">
<div class="row">
  <div class="col-sm-2">
    <div class="row">
      <h3><aside class="col-md-12">Acces au site:</aside></h3>
    </div>
  </div>
  
  <section class="col-sm-10 col-md-8">

<h2>
<?php 
//On declare la session nom tech avec la valeur du tech selectionné precedemment
if (isset($_POST['nom_acc'])) { 
$_SESSION['nom_tech'] = $_POST['nom_acc'];
} 
//On affiche la valeur de la session 
echo '<em><center>' ; echo $_SESSION ['nom_tech'] ; echo '</center></em>';
?>
</h2>
<form method="post" action="erreur.php"/> 

<input type="password" class="form-control" placeholder="Password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />
<br />
<input type="submit" name="connexion" class="btn btn-primary btn-lg btn-block" value="Connexion">
</form>

<?php
//Message d'erreur si MDP ou login faux
if (isset($_GET['erreur'])){

echo '<script language="Javascript"> alert ("'.htmlentities(urldecode($_GET['erreur'])).'" ) </script>';
}

//Message d'erreur un des deux champs est vide
if (isset($_GET['erreur2'])){
echo '<script language="Javascript"> alert ("'.htmlentities(urldecode($_GET['erreur2'])).'" ) </script>';
}
?>
<form method="post" action="index.php">
<p><center><input type="submit" name="retour" class="btn btn-info" value="RETOUR"/></center></p>
</form> 
</section>
</div>

</html>