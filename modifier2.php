 <?php
include("header.php");
?>

<html>
<div class="row">
  <div class="col-sm-2">
    <div class="row">
	  <h3><aside class="col-md-12"><em>Modification :</em></aside></h3>
    </div>
  </div>
  
  <section class="col-sm-10 col-md-8">
  
<?php
//Connexion a la base de donnée
connectMaBase();


if (isset($_GET['message'])){
echo '<script language="Javascript"> alert ("'.htmlentities(urldecode($_GET['message'])).'" ) </script>';
}

if (isset ($_POST['Modifier']) && !empty ($_POST['technicien'])) {
$_SESSION['technicien'] = $_POST['technicien'];
?>	

<form method="post" action="modifier2.php">
</br>	
<label for="exampleInputEmail1">Ancien mot de passe : </label>
<input type="password" class="form-control" name="pass1" value="<?php if (isset($_POST['pass1'])) echo htmlentities(trim($_POST['pass1'])); ?>"><br />
<label for="exampleInputEmail1">Nouveau mot de passe : </label>
<input type="password" class="form-control" name="pass2" value="<?php if (isset($_POST['pass2'])) echo htmlentities(trim($_POST['pass2'])); ?>"><br />
<label for="exampleInputEmail1">Confirmation mot de passe : </label>
<input type="password" class="form-control" name="pass3" value="<?php if (isset($_POST['pass3'])) echo htmlentities(trim($_POST['pass3'])); ?>"><br />

<p><center><input type="submit" name="Ok" class="btn btn-info" value="VALIDER"/></center></p>
</form>
<?php
}
if (isset ($_POST['Supprimer']) && !empty ($_POST['technicien'])) {

		$sql = 'SELECT * FROM `technicien` WHERE 1=1 AND `Nom` LIKE "'.mysql_real_escape_string($_POST['technicien']).'"';
		$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
		
		if ($result = mysql_fetch_array($req)) {
			$sql_sup='DELETE FROM `technicien` WHERE 1=1 AND `Nom` LIKE "'.mysql_real_escape_string($_POST['technicien']).'" ';
			$req_sup = mysql_query($sql_sup) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
		
		echo '<div class="alert alert-success">Technicien supprime avec succes.</div>';
		}
		else {
		echo '<div class="alert alert-danger">Suppression du technicien echouee.</div>';
		}
}
elseif (isset ($_POST['Supprimer']) && empty ($_POST['technicien'])) {
echo '<div class="alert alert-danger">Aucun nom n\'est selectionné.</div>';
}

?>
 <?php
//Connexion a la base de donnée
connectMaBase();	

if (isset ($_POST['Ok']) && isset ($_POST['pass1']) && isset ($_POST['pass2']) && isset ($_POST['pass3'])){
	// on teste si une entrée de la base contient le couple login / pass
	$sql = 'SELECT count(*) as nb FROM technicien WHERE Nom="'.mysql_escape_string($_SESSION['technicien']).'" AND pass_md5=PASSWORD("'.mysql_escape_string($_POST['pass1']).'")';
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
 
	$result=mysql_fetch_assoc($req);

		if ($result['nb'] == 0) {
		echo '<div class="alert alert-danger">L\'ancien mot de passe est faux.</div>';
		}	
		
			if ($_POST['pass2'] != $_POST['pass3']){
			echo '<div class="alert alert-danger">Les mots de passes sont differents.</div>';
			}
		
			if ($result['nb'] == 1 && ($_POST['pass2'] == $_POST['pass3']) ) {		
		$sql = 'SELECT * FROM `technicien` WHERE 1=1 AND `Nom` LIKE "'.mysql_real_escape_string($_SESSION['technicien']).'"';
		$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

				if ($result = mysql_fetch_array($req)) {
					$sql_sup='UPDATE `technicien` SET pass_md5=PASSWORD("'.mysql_escape_string($_POST['pass3']).'") WHERE 1=1 AND `Nom` LIKE "'.mysql_real_escape_string($_SESSION['technicien']).'"  ';
					$req_sup = mysql_query($sql_sup) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
					echo'<div class="alert alert-success">Changement de mot de passe reussit.</div>' ;
				}
			}	
}		
		elseif (isset ($_POST['Modifier']) && empty ($_POST['technicien'])){
		echo '<div class="alert alert-danger">Aucun nom n\'est selectionné.</div>';
		}

?>
<form method="post" action="modifier.php">
<p><center><input type="submit" name="retour" class="btn btn-info" value="RETOUR"/></center></p>
</form>

</section>
</div>
</html>