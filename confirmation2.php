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
        if (isset ($_POST['valider2']) && !empty ($_POST['machine'])){
		$ok="0";
            //On récupère les valeurs entrées par l'utilisateur :
         	$machine=$_POST['machine'];
			
			//On se connecte
			connectMaBase();

            //On prépare la commande sql d'insertion
            $sql = 'INSERT INTO machine(`Nom`) VALUES("'.$machine.'") ';

            /*on lance la commande (mysql_query) et au cas où, 
            on rédige un petit message d'erreur si la requête ne passe pas (or die) 
            (Message qui intègrera les causes d'erreur sql)*/
			mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
			
			$reussite2="Ajout de machine reussit";
			header('Location: ajouter.php?reussite2=' . urlencode($reussite2));
		}
		
		elseif (empty ($_POST['machine'])) {
			$vide2="Le champ machine est vide";
			header('Location: formulaire2.php?vide2=' . urlencode($vide2) );
		}
		elseif (isset ($_POST['valider2']) && $ok="1" ) {
			$echec2="Ajout de machine echoué";
			header('Location: formulaire2.php?echec2=' . urlencode($echec2));
		}

if (isset ($_POST['Supprimer'])) {
			
		//On se connecte
		connectMaBase();
			
		if ( isset ($_POST['machine'])){
		$sql = 'SELECT * FROM `machine` WHERE 1=1 AND `Nom` LIKE "'.mysql_real_escape_string($_POST['machine']).'"';
		$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
		
				if ($result = mysql_fetch_array($req)) {
					$sql_sup='DELETE FROM `machine` WHERE 1=1 AND `Nom` LIKE "'.mysql_real_escape_string($_POST['machine']).'" ';
					$req_sup = mysql_query($sql_sup) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
		
					echo '</br><div class="alert alert-success">Machine supprime avec succes.</div>';
				}
				else {
				echo '</br><div class="alert alert-danger">Suppression de la machine echouee.</div>';
				}
		}
}
elseif (isset ($_POST['Supprimer']) && empty ($_POST['machine'])) {
echo '<div class="alert alert-danger">Aucune machine n\'est selectionnée.</div>';
}
		
?>

<form method="post" action="ajouter.php">
<p><center><input type="submit" name="retour" class="btn btn-info" value="RETOUR"/></center></p>
</form>