<?php
include("header.php");
?>

<html>
<META HTTP-EQUIV="Refresh" CONTENT="50;URL=index2.php">

<div class="row">
  <div class="col-sm-2">
    <div class="row">
	  <h3><aside class="col-md-12"><em>Selectionnez votre compte :</em></aside></h3>
    </div>
  </div>
  <section class="col-sm-10 col-md-8">
<?php

//message d'erreur si l'acces n'est pas autorisé
if (isset($_GET['accesrefu'])){
echo '<script language="Javascript"> alert ("'.htmlentities(urldecode($_GET['accesrefu'])).'" ) </script>';
}

//Connexion a la base de donnée
connectMaBase();

// on crée la requête SQL 
$sql = 'SELECT * FROM technicien'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

?>


<form method="post" name="nom_acc2" action="log_tech.php">
<?php

// on fait une boucle qui va faire un tour pour chaque enregistrement 
while($data = mysql_fetch_array($req)) 
    { 
    // on affiche les informations de l'enregistrement en cours 
echo '<input type="submit" class="btn btn-default btn-lg btn-block" name="nom_acc" value="'.$data['Nom'].'" >';
	}
// on ferme la connexion à mysql 
mysql_close(); 

?>
</form>

<form method="post" action="connexion.php"/> 
</br><p><button type="submit"  class="btn btn-primary btn-lg btn-block" name="ajouter" value="Administrateur "  />Administrateur</button></p> 
</form> 

</section>
</div>
</html>