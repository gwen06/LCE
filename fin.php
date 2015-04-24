<?php
include("header.php");
?>
<html>
<META HTTP-EQUIV="Refresh" CONTENT="50;URL=fin.php">
<div class="row">
  <div class="col-sm-2">
    <div class="row">
	  <h3><aside class="col-md-12"><em>FIN :</em></aside></h3>
	  	  <h3><aside class="col-md-12"><em>Cliquez sur accueil pour retourner a la page d'accueil</em></aside></h3>
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

//Declaration des variables de sessions du nom du technicien + de la machine qui elles sont constantes 		
$tech = $_SESSION['nom_tech'] ;
$machine = $_SESSION['machine'] ;

if (isset ($_POST['commentaire'])) {
$_SESSION['commentaire'] = $_POST['commentaire'] ;
}
else {
unset ($_SESSION['commentaire']);
	}

 //Affichage du recap sur la page commentaire :
if(isset ($_SESSION['teflon'])) {							
		
	$teflon = $_SESSION['teflon'] ;
			
		if(isset ($_SESSION['commentaire'])) {
			$commentaire = $_SESSION['commentaire'] ;
			//Connexion a la base de donnée
			connectMaBase();

			//On prépare la commande sql d'insertion 
			$sql='INSERT INTO `intervention`(`Nom`, `Machine`, `Technique`, `Commentaire`, `DATE`, `Heure`) VALUES ("'.mysql_real_escape_string($tech).'","'.mysql_real_escape_string($machine).'","'.mysql_real_escape_string($teflon).'", "'.mysql_real_escape_string($commentaire).'", CURDATE(), CURTIME())';
			
			//On envoi la requete + mess d'erreur
            mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
			
			echo '<div class="alert alert-success"> Enregistrement reussit </div>';
		}
		else {
			//Connexion a la base de donnée
			connectMaBase();

			//On prépare la commande sql d'insertion 
			$sql='INSERT INTO `intervention`(`Nom`, `Machine`, `Technique`, `DATE`, `Heure`) VALUES ("'.mysql_real_escape_string($tech).'","'.mysql_real_escape_string($machine).'","'.mysql_real_escape_string($teflon).'", CURDATE(), CURTIME())';
			
			//On envoi la requete + mess d'erreur
            mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
			
			echo '<div class="alert alert-success">Enregistrement reussit</div>';
		}
}
		
if (isset ($_SESSION['traitement4'])) {
		
	$traitement4 = $_SESSION['traitement4'] ;
	$technique1 = $_SESSION['technique1'] ;
			
		if(isset ($_SESSION['commentaire'])) {
			$commentaire = $_SESSION['commentaire'] ;
			//Connexion a la base de donnée
			connectMaBase();
			
		    //On prépare la commande sql d'insertion
            $sql='INSERT INTO `intervention`(`Nom`, `Machine`, `Technique`, `Traitement`, `Commentaire`, `DATE`, `Heure`) VALUES ("'.mysql_real_escape_string($tech).'","'.mysql_real_escape_string($machine).'","'.mysql_real_escape_string($technique1).'", "'.mysql_real_escape_string($traitement4).'", "'.mysql_real_escape_string($commentaire).'", CURDATE(), CURTIME())';
 
            //on envoi la requete
            mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
			
			echo '<div class="alert alert-success">Enregistrement reussit</div>';
 		}
		else {
			//Connexion a la base de donnée
			connectMaBase();
			
		    //On prépare la commande sql d'insertion
            $sql='INSERT INTO `intervention`(`Nom`, `Machine`, `Technique`, `Traitement`, `DATE`, `Heure`) VALUES ("'.mysql_real_escape_string($tech).'","'.mysql_real_escape_string($machine).'","'.mysql_real_escape_string($technique1).'", "'.mysql_real_escape_string($traitement4).'", CURDATE(), CURTIME())';
 
            //on envoi la requete
            mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
			
			echo '<div class="alert alert-success">Enregistrement reussit</div>';
		}
}
		
if (isset ($_SESSION['traitement2'])){
		
	$traitement2 = $_SESSION['traitement2'] ;
	$dosage = $_SESSION['dosage'] ;
	
		if(isset ($_SESSION['commentaire'])) {
			$commentaire = $_SESSION['commentaire'] ;	
 
			//Connexion a la base de donnée
			connectMaBase();
			
            //On prépare la commande sql d'insertion
            $sql='INSERT INTO `intervention`(`Nom`, `Machine`, `Technique`, `Traitement`, `Commentaire`, `DATE`, `Heure`) VALUES ("'.mysql_real_escape_string($tech).'","'.mysql_real_escape_string($machine).'","'.mysql_real_escape_string($dosage).'", "'.mysql_real_escape_string($traitement2).'", "'.mysql_real_escape_string($commentaire).'", CURDATE(), CURTIME())'; 
 
            //on envoi la requete
            mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 

			echo '<div class="alert alert-success">Enregistrement reussit</div>';			
		}
		else {
			//Connexion a la base de donnée
			connectMaBase();
			
            //On prépare la commande sql d'insertion
            $sql='INSERT INTO `intervention`(`Nom`, `Machine`, `Technique`, `Traitement`, `DATE`, `Heure`) VALUES ("'.mysql_real_escape_string($tech).'","'.mysql_real_escape_string($machine).'","'.mysql_real_escape_string($dosage).'", "'.mysql_real_escape_string($traitement2).'", CURDATE(), CURTIME())'; 
 
            //on envoi la requete
            mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
			
			echo '<div class="alert alert-success">Enregistrement reussit</div>';
		}			
}
		
		
if (isset ($_SESSION['traitement3'])) { 
		
	$traitement3 = $_SESSION['traitement3'] ;
	$mecanique = $_SESSION['mecanique'] ;
	
		if(isset ($_SESSION['commentaire'])) {
			$commentaire = $_SESSION['commentaire'] ;
			
			//Connexion a la base de donnée
			connectMaBase();
			
            //On prépare la commande sql d'insertion
            $sql='INSERT INTO `intervention`(`Nom`, `Machine`, `Technique`, `Traitement`, `Commentaire`, `DATE`, `Heure`) VALUES ("'.mysql_real_escape_string($tech).'","'.mysql_real_escape_string($machine).'","'.mysql_real_escape_string($mecanique).'", "'.mysql_real_escape_string($traitement3).'", "'.mysql_real_escape_string($commentaire).'", CURDATE(), CURTIME())';
 
            //on lance la commande (mysql_query) et au cas où, 
            mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
			
			echo '<div class="alert alert-success">Enregistrement reussit</div>';
		}
		else {
			//Connexion a la base de donnée
			connectMaBase();
			
            //On prépare la commande sql d'insertion
            $sql='INSERT INTO `intervention`(`Nom`, `Machine`, `Technique`, `Traitement`, `DATE`, `Heure`) VALUES ("'.mysql_real_escape_string($tech).'","'.mysql_real_escape_string($machine).'","'.mysql_real_escape_string($mecanique).'", "'.mysql_real_escape_string($traitement3).'", CURDATE(), CURTIME())';
 
            //on lance la commande (mysql_query) et au cas où, 
            mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
			
			echo '<div class="alert alert-success">Enregistrement reussit</div>';
		}
}
		
if (isset ($_SESSION['traitement5'])) {
		
	$traitement5 = $_SESSION['traitement5'] ;		
	$technique2 = $_SESSION['technique2'] ;
			
		if(isset ($_SESSION['commentaire'])) {
			$commentaire = $_SESSION['commentaire'] ;
			
			//Connexion a la base de donnée
			connectMaBase();
 
            //On prépare la commande sql d'insertion
            
			$sql='INSERT INTO `intervention`(`Nom`, `Machine`, `Technique`, `Traitement`, `Commentaire`, `DATE`, `Heure`) VALUES ("'.mysql_real_escape_string($tech).'","'.mysql_real_escape_string($machine).'","'.mysql_real_escape_string($technique2).'", "'.mysql_real_escape_string($traitement5).'", "'.mysql_real_escape_string($commentaire).'", CURDATE(), CURTIME())';
 
            //on lance la commande (mysql_query) et au cas où
            mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
			
			echo '<div class="alert alert-success">Enregistrement reussit</div>';
		}
		else {
			//Connexion a la base de donnée
			connectMaBase();
 
            //On prépare la commande sql d'insertion
            $sql='INSERT INTO `intervention`(`Nom`, `Machine`, `Technique`, `Traitement`, `DATE`, `Heure`) VALUES ("'.mysql_real_escape_string($tech).'","'.mysql_real_escape_string($machine).'","'.mysql_real_escape_string($technique2).'", "'.mysql_real_escape_string($traitement5).'", CURDATE(), CURTIME())';
 
            //on lance la commande (mysql_query) et au cas où
            mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
			
			echo '<div class="alert alert-success">Enregistrement reussit</div>';

		}		
}
?>


<form method="post" action="LCEsa.php">
<p><center><input type="submit" name="retour" class="btn btn-info" value="RETOUR"/></center></p>
</form> 

</section>
</div>
</html>