 <?php
include("header.php");
?>
<html>
<div class="row">
  <div class="col-sm-2">
    <div class="row">
	  <h3><aside class="col-md-12"><em>Formulaire :</em></aside></h3>
    </div>
  </div>
  
  <section class="col-sm-10 col-md-8">
<?php
$ok="1";
     if (isset ($_POST['valider3']) && !empty ($_POST['mecanique'])){
	 $ok="0";
            //On récupère les valeurs entrées par l'utilisateur :
         	$mecanique=$_POST['mecanique'];
			
			//On se connecte
			connectMaBase();

            //On prépare la commande sql d'insertion
           $sql = 'INSERT INTO mecanique(`traitement3`) VALUES("'.$mecanique.'") ';

            /*on lance la commande (mysql_query) et au cas où, 
            on rédige un petit message d'erreur si la requête ne passe pas (or die) 
            (Message qui intègrera les causes d'erreur sql)*/
			mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 

			$reussite3="Ajout de mecanique reussit";
			header('Location: ajouter.php?reussite3=' . urlencode($reussite3));
        }
		elseif (empty ($_POST['mecanique'])) {
			$vide3="Le champ mecanique est vide";
			header('Location: formulaire3.php?vide3=' . urlencode($vide3) );
		}
		elseif (isset ($_POST['valider2']) && $ok="1" ){
			$echec3="Ajout de machine echoué";
			header('Location: formulaire4.php?echec3=' . urlencode($echec3));
		}

if (isset ($_POST['Supprimer'])) {

		//On se connecte
		connectMaBase();
		
		if ( isset ($_POST['mecanique'])){
		$sql = 'SELECT * FROM `mecanique` WHERE 1=1 AND `Traitement3` LIKE "'.mysql_real_escape_string($_POST['mecanique']).'"';
		$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
		
				if ($result = mysql_fetch_array($req)) {
					$sql_sup='DELETE FROM `mecanique` WHERE 1=1 AND `Traitement3` LIKE "'.mysql_real_escape_string($_POST['mecanique']).'" ';
					$req_sup = mysql_query($sql_sup) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
		
					echo '</br><div class="alert alert-success">mecanique supprime avec succes.</div>';
				}
				else {
				echo '</br><div class="alert alert-danger">Suppression de la mecanique echouee.</div>';
				}
		}
}
elseif (isset ($_POST['Supprimer']) && empty ($_POST['mecanique'])) {
echo '<div class="alert alert-danger">Aucune mecanique n\'est selectionnée.</div>';
}
?>

<form method="post" action="ajouter.php">
<p><center><input type="submit" name="retour" class="btn btn-info" value="RETOUR"/></center></p>
</form>