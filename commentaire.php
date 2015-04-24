<?php
include("header.php");
?>
<html>
<div class="row">
  <div class="col-sm-2">
    <div class="row">
	  <h3><aside class="col-md-12"><em>Commentaire optionnel :</em></aside></h3>
	  	  <h3><aside class="col-md-12"><em>(Inserer eventuellement un commentaire sur le deroulement de l'intervention)</em></aside></h3>
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

	if(isset ($_POST['teflon'])) {				
		$_SESSION['teflon'] = $_POST['teflon'] ;			
		echo '<h3 class="text-primary">Vous avez selectionne precedemment : '.$_SESSION['nom_tech'].' -> '.$_SESSION['machine'].' ->  '.$_SESSION['teflon'].' <br /></h3> ';
	}
	else {
	unset ($_SESSION['teflon']);
	}
	
	if (isset ($_POST['traitement4'])) {
		$_SESSION['traitement4'] = $_POST['traitement4'] ;		
		echo '<h3 class="text-primary">Vous avez selectionné precedemment : '.$_SESSION['nom_tech'].' -> '.$_SESSION['machine'].' -> '.$_SESSION['technique1'].' -> '.$_SESSION['traitement4'].' <br /></h3> ';
	}
	else {
	unset ($_SESSION['traitement']);
	}
	
	if (isset ($_POST['traitement2'])){
		$_SESSION['traitement2'] = $_POST['traitement2'] ;		
		echo '<h3 class="text-primary">Vous avez selectionné precedemment : '.$_SESSION['nom_tech'].' -> '.$_SESSION['machine'].' -> '.$_SESSION['dosage'].' -> '.$_SESSION['traitement2'].' <br /></h3> '; 
	}
	else {
	unset ($_SESSION['traitement2']);
	}
	
	if (isset ($_POST['traitement3'])) { 
		$_SESSION['traitement3'] = $_POST['traitement3'] ;		
		echo '<h3 class="text-primary">Vous avez selectionné precedemment : '.$_SESSION['nom_tech'].' -> '.$_SESSION['machine'].' -> '.$_SESSION['mecanique'].' -> '.$_SESSION['traitement3'].'<br /></h3> ';
	}
	else {
	unset ($_SESSION['traitement3']);
	}
	
	if (isset ($_POST['traitement5'])) {
		$_SESSION['traitement5'] = $_POST['traitement5'] ;		
		echo '<h3 class="text-primary">Vous avez selectionné precedemment : '.$_SESSION['nom_tech'].' -> '.$_SESSION['machine'].' -> '.$_SESSION['technique2'].' -> '.$_SESSION['traitement5'].' <br /></h3> ';
	}
	else {
	unset ($_SESSION['traitement5']);
	}
	
?>

<form method="post" action="fin.php"/>
   <p><br /><textarea class="form-control" rows="5" placeholder="Inserer votre commentaire:"></textarea></p>
   <input class="btn btn-primary btn-lg btn-block" type="submit" name="ok" value="valider"  /></button>
</form>

</section>
</div>
</html>