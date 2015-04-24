 <?php
include("header.php");

if (isset($_POST['connexion2'])) {
	if (!empty($_POST['login3']) && !empty($_POST['pass3'])) {
	
		//Connexion a la base de donnée
		connectMaBase();

		// on teste si une entrée de la base contient le couple login / pass
			$sql = 'SELECT count(*) as nb FROM admin WHERE user="'.mysql_escape_string($_POST['login3']).'" AND pass2_md5=PASSWORD("'.mysql_escape_string($_POST['pass3']).'")';
			$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
 
			$result=mysql_fetch_assoc($req);

		//mysql_free_result($req);
		mysql_close();

		// si on obtient une réponse, alors l'utilisateur est un membre
		if ($result['nb'] == 1) {			
			$_SESSION['login3'] = $_POST['login3'];
			$_SESSION['is_logged_in'] = 1;
			header('Location: ajouter.php');
			exit();
		}
		// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
		elseif ($result['nb'] == 0) {
			$_SESSION['is_logged_in'] = 0;
			$message=" Le mot de passe ou le login est faux";
			//redirection la ou le message d'erreur sera affiché et pour se loger de nouveau 
			header('Location: connexion.php?err=' . urlencode($message) );
		}
	}
	elseif (empty($_POST['login3']) || empty($_POST['pass3'])) {
			$message2=" un des deux champs est vide";
			//redirection la ou le message d'erreur sera affiché et pour se loger de nouveau 
			header('Location: connexion.php?error=' . urlencode($message2) );
	}
}
?>

