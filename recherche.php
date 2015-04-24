<?php
include("header.php");
?>

<html>
<META HTTP-EQUIV="Refresh" CONTENT="50;URL=recherche.php">
<?php

//Connexion a la base de donnée
connectMaBase();

// on crée la requête SQL 
$sql = 'SELECT *,DATE_FORMAT(`DATE`,\'%d-%m-%Y\') AS date_fr FROM `intervention` WHERE 1=1 ';
 
if (!empty($_POST['tech']))
   $sql.= " AND `Nom` LIKE '".mysql_real_escape_string($_POST['tech'])."' "; 

if (!empty($_POST['machine']))
   $sql.= " AND `Machine` LIKE '".mysql_real_escape_string($_POST['machine'])."' "; 

if (!empty($_POST['technique']))
   $sql.= " AND `Technique` LIKE '".mysql_real_escape_string($_POST['technique'])."' "; 

if (!empty($_POST['LouK']))
   $sql.= " AND `Traitement` LIKE '".mysql_real_escape_string($_POST['LouK'])."' "; 
   
if (!empty($_POST['Colleuse']))
   $sql.= " AND `Traitement` LIKE '".mysql_real_escape_string($_POST['Colleuse'])."' "; 

if (!empty($_POST['mecanique']))
   $sql.= " AND `Traitement` LIKE '".mysql_real_escape_string($_POST['mecanique'])."' "; 

if (!empty($_POST['dosage']))
   $sql.= " AND `Traitement` LIKE '".mysql_real_escape_string($_POST['dosage'])."' "; 

if (!empty($_POST['date']))  {
$date = $_POST['date'];
$date = explode("-", $date);
$newsdate=$date[2].'-'.$date[1].'-'.$date[0];
echo $newsdate; 
  $sql.= " AND `DATE` LIKE '".mysql_real_escape_string($newsdate)."' ";  }
   
// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

//, `Technique`,`Traitement`, `Commentaire`, `DATE`
echo '<div class="table-responsive">' ;
echo '<TABLE class="table">';

echo'<tr class="success">';
	echo'<th>Technicien:</th>';
	echo'<th>Machine:</th>';
	echo'<th>Technique:</th>';
	echo'<th>Traitement:</th>';
	echo'<th>Commentaire:</th>';
	echo'<th>Date:</th>';
	echo'<th>Heure:</th>';
echo'</tr>';

while($result = mysql_fetch_array($req)) {

if ($result['Nom'] == "") {
	$result['Nom'] = "Non Specifie" ;
}
if ($result['Machine'] == "") {
	$result['Machine'] = "Non Specifie" ;
}
if($result['Technique'] == "") {
	$result['Technique'] = "Non Specifie" ;
}
if($result['Traitement'] == "") {
	$result['Traitement'] = "Non Specifie" ;
}
if($result['Commentaire'] == "") {
	$result['Commentaire'] = "Non Specifie" ;
}
 
echo '<TR>' ;

echo'<TD>'.$result['Nom'].'</TD>';
echo'<TD>'.$result['Machine'].'</TD> ';
echo'<TD>'.$result['Technique'].'</TD> ';
echo'<TD>'.$result['Traitement'].'</TD> ';
echo'<TD>'.$result['Commentaire'].'</TD> ';
echo'<TD>'.$result['date_fr'].'</TD> ';
echo'<TD>'.$result['Heure'].'</TD>';

echo'</TR> ';
}
 			
echo '</TABLE> ';
echo '</div>';

?>

<form method="post" action="recap.php">
<p><center><input type="submit" name="retour" class="btn btn-info" value="RETOUR"/></center></p>
</form>
</div>
</br>

<?php $sql = 'SELECT *,DATE_FORMAT(`DATE`,\'%d-%m-%Y\') AS date_fr FROM `intervention` WHERE 1=1 ';
 
if (!empty($_POST['tech'])) {
   $sql.= " AND `Nom` LIKE '".mysql_real_escape_string($_POST['tech'])."' "; 
   $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
   }
   while($result = mysql_fetch_array($req)) { echo '<TR>'.$result['Nom'].'</TR>';  }?>