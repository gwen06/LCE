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
        if (isset ($_POST['valider6']) && !empty ($_POST['technique2'])){
		$ok="0";
            //On récupère les valeurs entrées par l'utilisateur :
         	$technique2=$_POST['technique2'];
			
			//On se connecte
			connectMaBase();

            //On prépare la commande sql d'insertion
           $sql = 'INSERT INTO technique2(`traitement5`) VALUES("'.$technique2.'") ';

            /*on lance la commande (mysql_query) et au cas où, 
            on rédige un petit message d'erreur si la requête ne passe pas (or die) 
            (Message qui intègrera les causes d'erreur sql)*/
			mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 

            // on ferme la connexion
            mysql_close();
			
			$reussite6="Ajout de technique (Colleuse) reussit";
			header('Location: ajouter.php?reussite6=' . urlencode($reussite6));
        }
		elseif (empty ($_POST['technique2'])) {
			$vide6="Le champ technique (Colleuse) est vide";
			header('Location: formulaire6.php?vide6=' . urlencode($vide6) );
		}
		
		elseif(isset ($_POST['valider2']) && $ok="1" ){
			$echec6="Ajout de machine echoué";
			header('Location: formulaire6.php?echec6=' . urlencode($echec6));
		}
		
if (isset ($_POST['Supprimer'])) {

		//On se connecte
		connectMaBase();
		
		if ( isset ($_POST['technique2'])){
		
		$sql = 'SELECT * FROM `technique2` WHERE 1=1 AND `traitement5` LIKE "'.mysql_real_escape_string($_POST['technique2']).'"';
		$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
		
				if ($result = mysql_fetch_array($req)) {

					$sql_sup='DELETE FROM `technique2` WHERE 1=1 AND `traitement5` LIKE "'.mysql_real_escape_string($_POST['technique2']).'" ';
					$req_sup = mysql_query($sql_sup) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
		
					echo '</br><div class="alert alert-success">Technique colleuse supprime avec succes.</div>';
				}
				else {
				echo '</br><div class="alert alert-danger">Suppression de la Technique colleuse echoue.</div>';
				}
		}
}
elseif (isset ($_POST['Supprimer']) && empty ($_POST['technique2'])) {
echo '<div class="alert alert-danger">Aucune technique n\'est selectionnée.</div>';
}
?>

<form method="post" action="ajouter.php">
<p><center><input type="submit" name="retour" class="btn btn-info" value="RETOUR"/></center></p>
</form>