 <?php
include ("header.php") ; 
?>

<html>
<META HTTP-EQUIV="Refresh" CONTENT="50;URL=formulaire6.php">
<div class="row">
  <div class="col-sm-2">
    <div class="row">
	  <h3><aside class="col-md-12"><em>Formulaire :</em></aside></h3>
    </div>
  </div>
  
  <section class="col-sm-10 col-md-8">
<form name="inscription" method="post" action="confirmation6.php" >
  <div class="form-group">
    <label for="exampleInputEmail1">Technique Colleuse :</label>
<input type="text" name="machine" class="form-control" placeholder="Nom Technique Colleuse :"> <br/><br/>
<input type="submit" name="valider6" value="OK" class="btn btn-primary btn-lg btn-block"/>
</div></form>

<form method="post" action="confirmation6.php">

<?php
if(!empty($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === 1) {
   $ok='';
} else {
   $accesrefu= 'Acces refuse vous devez vous identifier';
   header('Location: connexion.php?accesrefu=' . urlencode($accesrefu) );
}

if (isset($_GET['vide6'])){
echo '<script language="Javascript"> alert ("'.htmlentities(urldecode($_GET['vide6'])).'" ) </script>';
}

if ( isset ($_GET['echec6'])){
echo '<script language="Javascript"> alert ("'.htmlentities(urldecode($_GET['echec6'])).'" ) </script>';
}
		

echo'<center><h3 class="text-info">Choisissez la technique colleuse que vous souhaitez supprimer.</h3></center>';

//Connexion a la base de donnée
connectMaBase();

echo'<center><select name="technique2" id="technique2">';
     echo'<option value=""></option>';
      
           $sql = 'SELECT traitement5 FROM technique2'; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['traitement5'].'"> '.$row['traitement5'].'</option>';
           }
        
echo '</select></center>';

?> 
</br><p><center><input type="submit" name="Supprimer" class="btn btn-primary btn-lg btn-block" value="Supprimer"/></center></p>
</form> 
   
<form method="post" action="ajouter.php">
<p><center><input type="submit" name="retour" class="btn btn-info" value="RETOUR"/></center></p>
</form>     

</section>
</div>

<div id="footer">
      <div class="container">
        <p class="muted credit">LCE</p>
      </div>
</div>
</html>	