 <?php
include("header.php");
?>

<html>
<h2>Acces au site: </h2>
</div>


<?php

	if (isset($_POST['login'])) {
	 //$_POST['nom_acc'] = $_POST['login'] ;
     $_POST['login'] = $_SESSION['nom_tech'];
	 $nom_tech = $_SESSION['nom_tech'] ;
	}
 
// on teste si le visiteur a soumis le formulaire de connexion

if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {	

	if(!empty($_POST['pass']) && !empty($_SESSION['nom_tech'])) {
		$pass=$_POST['pass'];
 
		//Connexion a la base de donnée			
		connectMaBase();
 
		// on teste si une entrée de la base contient ce couple login / pass
		$sql = 'SELECT count(*) as nb FROM `technicien` WHERE `Nom`="'.mysql_escape_string($_SESSION['nom_tech']).'" AND `pass_md5`=PASSWORD("'.mysql_escape_string($pass).'") ';

		//On envoi la requete
		$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
		//On met le resultat sous forme de tableau 
		$result=mysql_fetch_assoc($req);

		mysql_close();
 
		// si on obtient une réponse, alors l'utilisateur est un membre
		if ($result['nb'] == 1) {
			$_SESSION['log_tech'] = 1 ;
			header('Location: LCEsa.php');
			
		}
		// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
		else {
			//Envoi du get erreur dans l'url et redirection pour l'afficher et revenir au log
			$_SESSION['log_tech'] = 0;
			$erreur=" Le mot de passe est faux";
			header('Location: log_tech.php?erreur=' . urlencode($erreur) );
			
		}
	}
	else {
		//Envoi du get erreur 2 dans l'url et redirection pour l'afficher et revenir au log
		$erreur2=" L'un des champs est vide";
		header('Location: log_tech.php?erreur2=' . urlencode($erreur2) );
	}
}
?>

</form>
</body>
</html>