<?php
include("header.php");
?>
<html>
<META HTTP-EQUIV="Refresh" CONTENT="50;URL=titre.php">
<div class="row">
  <div class="col-sm-2">
    <div class="row">
	  <h3><aside class="col-md-12"><em>Selectionner un domaine d'intervention :</em></aside></h3>
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

if (isset ($_POST['machine'])) { 
$_SESSION['machine']=$_POST['machine'] ;
echo '<h3 class="text-primary">Vous avez selectionne precedemment : '.$_SESSION['nom_tech'].' -> '.$_SESSION['machine'].' <br /></h3> ';
}

?>

<form method="post" action="commentaire.php"> </br><input type="submit" name="teflon" value="Teflon" class="btn btn-primary btn-lg btn-block" /> </form>
<form method="post" action="technique1.php"></br><input type="submit" name="technique1" value="Technique" class="btn btn-primary btn-lg btn-block" /> </form>
<form method="post" action="dosage.php"></br><input type="submit" name="dosage" value="Dosage" class="btn btn-primary btn-lg btn-block" /> </form>
<form method="post" action="mecanique.php"></br><input type="submit" name="mecanique" value="Mecanique" class="btn btn-primary btn-lg btn-block"/> </form>
<form method="post" action="technique2.php"></br><input type="submit" name="technique2" value="Technique Colleuse" class="btn btn-primary btn-lg btn-block"/> </form>

<form method="post" action="lcesa.php">
<p><center><input type="submit" name="retour" class="btn btn-info" value="RETOUR"/></center></p>
</form>

</section>
</div>
</html>