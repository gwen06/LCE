<?php
include("header.php");
?>
<html>
<META HTTP-EQUIV="Refresh" CONTENT="50;URL=LCEsa.php">
<div class="row">
  <div class="col-sm-2">
    <div class="row">
      <h3><aside class="col-md-12"><em>Bienvenue !</em></aside></h3>
	  <h3><aside class="col-md-12">Choisissez votre intervention : </aside></h3>
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
?>




<form method="post" action="machine.php">
<p><input type="submit" name="enregistrer" class="btn btn-primary btn-lg btn-block" value="Enregistrer une intervention"/></p>
</form>

<form method="post" action="recap.php">
<p><input type="submit" name="consulter" class="btn btn-primary btn-lg btn-block" value="Consulter une intervention"/></p>
</form>

<p><input type="submit" name="enregistrer2" class="btn btn-primary btn-lg btn-block" value="Enregistrer les releves de calage et 
de dosage"/></p>

<form method="post" action="deconnexion.php"/> 
<p><input type="submit" class="btn btn-primary btn-lg btn-block" name="deconnexion" value="Deconnexion "  /></p> 
</form> 

</section>
</div>
</html>
