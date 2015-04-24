 <?php
include ("header.php") ; 
?>

<html>
<META HTTP-EQUIV="Refresh" CONTENT="50;URL=inscription.php">
<div class="row">
  <div class="col-sm-2">
    <div class="row">
	  <h3><aside class="col-md-12"><em>Formulaire :</em></aside></h3>
    </div>
  </div>
  
  <section class="col-sm-10 col-md-8">
<form action="confirmation7.php" method="post">
<label for="exampleInputPassword1">Login :</label> <input type="text" name="login2" class="form-control" value="<?php if (isset($_POST['login2'])) echo htmlentities(trim($_POST['login2'])); ?>"><br />
<label for="exampleInputPassword1">Password :</label> <input type="password" name="pass2" class="form-control" value="<?php if (isset($_POST['pass2'])) echo htmlentities(trim($_POST['pass2'])); ?>"><br />
<label for="exampleInputPassword1">Confirm Password :</label> <input type="password" name="pass_confirm" class="form-control" value="<?php if (isset($_POST['pass_confirm'])) echo htmlentities(trim($_POST['pass_confirm'])); ?>">
<br /><br />
<input type="submit" name="inscription" class="btn btn-primary btn-lg btn-block" value="Inscription">
</form>


<?php
if(!empty($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === 1) {
   $ok='';
} else {
   $accesrefu= 'Acces refuse vous devez vous identifier';
   header('Location: connexion.php?accesrefu=' . urlencode($accesrefu) );
}

if (isset($_GET['vide7'])){
	echo '<script language="Javascript"> alert ("'.htmlentities(urldecode($_GET['vide7'])).'" ) </script>';
}	
   
if (isset($_GET['erreur'])){
	echo '<script language="Javascript"> alert ("'.htmlentities(urldecode($_GET['erreur'])).'" ) </script>';
}   

if ( isset ($_GET['echec'])){
echo '<script language="Javascript"> alert ("'.htmlentities(urldecode($_GET['echec'])).'" ) </script>';
}


?>
<form method="post" action="modifier.php"/> </br><p><button type="submit"  class="btn btn-primary btn-lg btn-block" name="Modifier" value="Modifier "  />Modifier</button></p>  </form> 
<form method="post" action="ajouter.php"><p><center><input type="submit" name="retour" class="btn btn-info" value="RETOUR"/></center></p></form>     

</section>
</div>
</html>