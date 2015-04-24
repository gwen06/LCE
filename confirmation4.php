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
        if (isset ($_POST['valider4']) && !empty ($_POST['dosage'])){
		$ok="0";
            //On récupère les valeurs entrées par l'utilisateur :
         	$dosage=$_POST['dosage'];
			
			//On se connecte
			connectMaBase();

            //On prépare la commande sql d'insertion
           $sql = 'INSERT INTO dosage(`traitement2`) VALUES("'.$dosage.'") ';

            /*on lance la commande (mysql_query) et au cas où, 
            on rédige un petit message d'erreur si la requête ne passe pas (or die) 
            (Message qui intègrera les causes d'erreur sql)*/
			mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 

            // on ferme la connexion
            mysql_close();
			
			$reussite4="Ajout de dosage reussit";
			header('Location: ajouter.php?reussite4=' . urlencode($reussite4));
        }
		elseif (empty ($_POST['dosage'])) {
			$vide4="Le champ dosage est vide";
			header('Location: formulaire4.php?vide4=' . urlencode($vide4) );
		}
		
		elseif (isset ($_POST['valider2']) && $ok="1" ){
			$echec4="Ajout de machine echoué";
			header('Location: formulaire4.php?echec4=' . urlencode($echec4));
		}

if (isset ($_POST['Supprimer'])) {

		//On se connecte
		connectMaBase();
		
		if ( isset ($_POST['dosage'])){
		$sql = 'SELECT * FROM `dosage` WHERE 1=1 AND `Traitement2` LIKE "'.mysql_real_escape_string($_POST['dosage']).'"';
		$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
		
				if ($result = mysql_fetch_array($req)) {
					$sql_sup='DELETE FROM `dosage` WHERE 1=1 AND `Traitement2` LIKE "'.mysql_real_escape_string($_POST['dosage']).'" ';
					$req_sup = mysql_query($sql_sup) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
		
					echo '</br><div class="alert alert-success">Dosage supprime avec succes.</div>';
				}
				else {
				echo '</br><div class="alert alert-danger">Suppression du dosage echoue.</div>';
				}
		}
}
elseif (isset ($_POST['Supprimer']) && empty ($_POST['dosage'])) {
echo '<div class="alert alert-danger">Aucun dosage n\'est selectionné.</div>';
}
?>

<form method="post" action="ajouter.php">
<p><center><input type="submit" name="retour" class="btn btn-info" value="RETOUR"/></center></p>
</form>