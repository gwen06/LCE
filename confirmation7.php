 <?php
include("header.php");
?>

<?php
if (isset($erreur)) echo '<br />',$erreur;

// on teste si le visiteur a soumis le formulaire
elseif (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
	// on teste l'existence de nos variables. On teste également si elles ne sont pas vides
	if ((isset($_POST['login2']) && !empty($_POST['login2'])) && (isset($_POST['pass2']) && !empty($_POST['pass2'])) && (isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm']))) {
		// on teste les deux mots de passe
		if ($_POST['pass2'] != $_POST['pass_confirm']) {
			$erreur = 'Les 2 mots de passe sont differents.';
			header('Location: inscription.php?erreur=' . urlencode($erreur) );
		}
		else {
			//Connexion a la base de donnée
			connectMaBase();

			// on recherche si ce login est déjà utilisé par un autre membre
			$sql = 'SELECT `Nom` FROM `technicien` WHERE Nom="'.mysql_escape_string($_POST['login2']).'"';
			$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
			$data = mysql_fetch_array($req);
			
			//Si le resultat de la premiere requete est faux alors le membre n'existe pas donc on le créé
			if ($data[0] == 0) {
				//requete sql d'insertion dans la BDD
				$sql = 'INSERT INTO `technicien` VALUES("", "'.mysql_escape_string($_POST['login2']).'", PASSWORD("'.mysql_escape_string($_POST['pass2']).'"))';
				mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
				//redirection vers la page d'accueil 
				$reussite="Inscription reussite" ;
				header ('Location:ajouter.php?reussite='. urldecode($reussite) ) ;
			}
		}
	}
	
	elseif (empty ($_POST['login2']) || empty($_POST['pass2']) || empty($_POST['pass_confirm'])) {
			$vide7="Au moins un des champs est vide";
			header('Location: inscription.php?vide7=' . urlencode($vide7) );
	}
	
	else {
	$echec="Inscription echoue";
	header ('Location:inscription.php?echec='. urldecode($echec) ) ;
	}
}
?>