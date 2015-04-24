 <?php
include("header.php");
?>

<html>
<META HTTP-EQUIV="Refresh" CONTENT="50;URL=ajouter.php">
<div class="row">
  <div class="col-sm-2">
    <div class="row">
	  <h3><aside class="col-md-12"><em>Choisissez le domaine que vous souhaitez ajouter :</em></aside></h3>
    </div>
  </div>
  
  <section class="col-sm-10 col-md-8">

<?php
if(!empty($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === 1) {
   $ok='';
} else {
   $accesrefu= 'Acces refuse vous devez vous identifier';
   header('Location: connexion.php?accesrefu=' . urlencode($accesrefu) );
}
?>

<form method="post" action="inscription.php"/> </br><input type="submit" class="btn btn-primary btn-lg btn-block" name="inscription1" value="Ajouter technicien"/> </form>
<form method="post" action="formulaire2.php"/> </br><input type="submit" class="btn btn-primary btn-lg btn-block" name="ajouter2" value="Ajouter machine"  /> </form> 
<form method="post" action="formulaire3.php"/> </br><input type="submit" class="btn btn-primary btn-lg btn-block" name="ajouter3" value="Ajouter mecanique"  /> </form> 
<form method="post" action="formulaire4.php"/> </br><input type="submit" class="btn btn-primary btn-lg btn-block" name="ajouter4" value="Ajouter dosage"  /> </form> 
<form method="post" action="formulaire5.php"/> </br><input type="submit" class="btn btn-primary btn-lg btn-block" name="ajouter5" value="Ajouter technique (L ou K)"  /> </form> 
<form method="post" action="formulaire6.php"/> </br><input type="submit" class="btn btn-primary btn-lg btn-block" name="ajouter5" value="Ajouter technique (Colleuse)"  /> </form> 
<form method="post" action="deconnexion.php"/> </br><p><input type="submit" class="btn btn-primary btn-lg btn-block" name="deconnexion" value="Deconnexion "  /></p> </form> 
</div>
<?php

//Message reussite inscription
if ( isset ($_GET['reussite'])){
echo '<script type="text/javascript">  alert ("'.htmlentities(urldecode($_GET['reussite'])).'" ) </script>';
}

//Message reussite machine
if ( isset ($_GET['reussite2'])){
echo '<script type="text/javascript">  alert ("'.htmlentities(urldecode($_GET['reussite2'])).'" ) </script>';
}

//Message reussite machine
if ( isset ($_GET['reussite3'])){
echo '<script type="text/javascript">  alert ("'.htmlentities(urldecode($_GET['reussite3'])).'" ) </script>';
}

//Message reussite dossage
if ( isset ($_GET['reussite4'])){
echo '<script type="text/javascript">  alert ("'.htmlentities(urldecode($_GET['reussite4'])).'" ) </script>';
}

//Message reussite technique l ou k
if ( isset ($_GET['reussite5'])){
echo '<script type="text/javascript">  alert ("'.htmlentities(urldecode($_GET['reussite5'])).'" ) </script>';
}

//Message reussite technique colleuse
if ( isset ($_GET['reussite6'])){
echo '<script type="text/javascript">  alert ("'.htmlentities(urldecode($_GET['reussite6'])).'" ) </script>';
}
?>

</section>
</div>

<div id="footer">
      <div class="container">
        <p class="muted credit">LCE</p>
      </div>
</div>
</html>	