<?php
include("header.php");
?>

<html>
<div class="row">
  <div class="col-sm-2">
    <div class="row">
	  <h3><aside class="col-md-12"><em>Selectionnez le traitement de votre choix:</em></aside></h3>
    </div>
  </div>
  
  <section class="col-sm-10 col-md-8">

<?php
if(!empty($_SESSION['log_tech']) && $_SESSION['log_tech'] === 1) {
   $ok='';
} else {
   $accesrefu= 'Acces refuse vous devez vous identifier';
   header('Location: index.php?accesrefu=' . urlencode($accesrefu) );
}

$_SESSION['dosage']=$_POST['dosage'];
echo '<h3 class="text-primary">Vous avez selectionne precedemment : '.$_SESSION['nom_tech'].' -> '.$_SESSION['machine'].' -> '.$_SESSION['dosage'].' <br /></h3> ';

//Connexion a la base de donnée
connectMaBase();

// on crée la requête SQL 
$sql = 'SELECT * FROM dosage'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
?>

<form method="post" action="commentaire.php">
<?php

// on fait une boucle qui va faire un tour pour chaque enregistrement 
while($data = mysql_fetch_array($req)) 
    { 
    // on affiche les informations de l'enregistrement en cours 
    echo '<input type="submit" name="traitement2" class="btn btn-primary btn-lg btn-block" value="'.$data['Traitement2'].'"/>'; 
    } 

// on ferme la connexion à mysql 
mysql_close(); 

?>

</form>

<form method="post" action="LCEsa.php">
<p><center><input type="submit" name="retour" class="btn btn-info" value="RETOUR"/></center></p>
</form> 

</section>
</div>
</html>