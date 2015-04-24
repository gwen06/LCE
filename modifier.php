 <?php
include("header.php");
?>

<html>
<META HTTP-EQUIV="Refresh" CONTENT="50;URL=modifier.php">
<div class="row">
  <div class="col-sm-2">
    <div class="row">
	  <h3><aside class="col-md-12"><em>Modification :</em></aside></h3>
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

//Connexion a la base de donnée
connectMaBase();

?>

<center>
<form method="POST" action="modifier2.php">
<h4><p class="text-primary">Selectionnez un nom de technicien :</p></h4>
<select name="technicien" id="technicien">
     <option value=""></option>
<?php      
           $sql = 'SELECT Nom FROM technicien'; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['Nom'].'"> '.$row['Nom'].'</option>';
           }
?>

</select>

<h4><p class="text-primary">Que voulez vous faire ?</p></h4>
</center>

</br><p><button type="submit"  class="btn btn-primary btn-lg btn-block" name="Modifier" value="Modifier "  />Modifier</button></p> 
</br><p><button type="submit"  class="btn btn-primary btn-lg btn-block" name="Supprimer" value="Supprimer "  />Supprimer</button></p> 
</form>

<form method="post" action="inscription.php">
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