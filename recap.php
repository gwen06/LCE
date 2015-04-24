<?php
session_start();
include("fonctions.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LCEsa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

<div class="page-header">
<p><h1>Consultation :</h1></p>
</div>

<html>
  
<?php
//Connexion a la base de donnée
connectMaBase();
?>

<div class="table-responsive">
<table class="table">

<tr class="success">
	<th>Technicien:</th>
	<th>Machine:</th>
	<th>Technique:</th>
	<th>Traitement technique (L ou K):</th>
	<th>Traitement technique (Colleuse):</th>
	<th>Traitement mecanique:</th>
	<th>Traitement dosage:</th>
	<th>Commentaire:</th>
	<th>Date:</th>
	<th>Heure:</th>
</tr>
   
<TR>

<form method="POST" action="recap.php">

<TD>
<select name="tech" id="tech">
     <option value=""></option>
      <?php
           $sql = 'SELECT Nom FROM technicien'; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['Nom'].'"> '.$row['Nom'].'</option>';
           }
        ?>
</select>
<?php 
// on crée la requête SQL 
$sql = 'SELECT `Nom` FROM `intervention`'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_array($req)) {
 
if ($data['Nom'] == "") {
	$data['Nom'] = "Non Specifie" ;
}
 
echo '</br>'.$data['Nom'].'</br>';
} 	

?>

</TD>

<TD>
<select name="machine" id="machine">
     <option value=""></option>
      <?php
           $sql = 'SELECT Nom FROM machine'; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['Nom'].'"> '.$row['Nom'].'</option>';
           }
        ?>
</select>
<?php 
// on crée la requête SQL 
$sql = 'SELECT `Machine` FROM `intervention`'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_array($req)) {
 
 if ($data['Machine'] == "") {
	$data['Machine'] = "Non Specifie" ;
}
 
echo '</br>'.$data['Machine'].'</br>';
} 	
?>
</TD>

<TD>
<select name="technique" id="technique">
     <option value=""></option>
	 <option value="Teflon">Teflon</option>
	 <option value="Technique">Technique</option>
	 <option value="Dosage">Dosage</option>
	 <option value="Mecanique">Mecanique</option>
	 <option value="Technique Colleuse">Technique colleuse</option>
</select>
<?php 
// on crée la requête SQL 
$sql = 'SELECT `Technique` FROM `intervention`'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_array($req)) {

if($data['Technique'] == "") {
	$data['Technique'] = "Non Specifie" ;
}
 
echo '</br>'.$data['Technique'].'</br>';
} 	

?>
</TD>


<TD>
<select name="LouK" id="LouK">
     <option value=""></option>
      <?php
           $sql = 'SELECT traitement4 FROM `technique1` '; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['traitement4'].'"> '.$row['traitement4'].'</option>';
           }
        ?>
</select>
<?php 
// on crée la requête SQL 
$sql = 'SELECT `Traitement` FROM `intervention`'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_array($req)) {

if($data['Traitement'] == "") {
	$data['Traitement'] = "Non Specifie" ;
}
 
echo '</br>'.$data['Traitement'].'</br>';
} 	

?>
</TD>

<TD>
<select name="Colleuse" id="Colleuse">
     <option value=""></option>
      <?php
           $sql = 'SELECT traitement5 FROM `technique2` '; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['traitement5'].'"> '.$row['traitement5'].'</option>';
           }
        ?>
</select>
<?php 
// on crée la requête SQL 
$sql = 'SELECT `Traitement` FROM `intervention`'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_array($req)) {

if($data['Traitement'] == "") {
	$data['Traitement'] = "Non Specifie" ;
}
 
echo '</br></br>';
} 	

?>
<TD>

<select name="mecanique" id="mecanique">
     <option value=""></option>
      <?php
           $sql = 'SELECT Traitement3 FROM `mecanique` '; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['Traitement3'].'"> '.$row['Traitement3'].'</option>';
           }
        ?>
</select>
<?php 
// on crée la requête SQL 
$sql = 'SELECT `Traitement` FROM `intervention`'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_array($req)) {

if($data['Traitement'] == "") {
	$data['Traitement'] = "Non Specifie" ;
}
 
echo '</br></br>';
} 	

?>

<TD>
<select name="dosage" id="dosage">
     <option value=""></option>
      <?php
           $sql = 'SELECT Traitement2 FROM `dosage` '; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['Traitement2'].'"> '.$row['Traitement2'].'</option>';
           }
        ?>
</select>
<?php 
// on crée la requête SQL 
$sql = 'SELECT `Traitement` FROM `intervention`'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_array($req)) {

if($data['Traitement'] == "") {
	$data['Traitement'] = "Non Specifie" ;
}
 
echo '</br></br>';
} 	
?>
</TD>

<TD>
<?php 
// on crée la requête SQL 
$sql = 'SELECT `Commentaire` FROM `intervention`'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_array($req)) {


if($data['Commentaire'] == "") {
	$data['Commentaire'] = "Non Specifie" ;
}
 
echo '</br>'.$data['Commentaire'].'</br>';
} 	
?>
</TD>

<TD>
<select name="date" id="date">
     <option value=""></option>
      <?php
           $sql = 'SELECT ID,DATE_FORMAT(`DATE`,\'%d-%m-%Y\') AS date_fr FROM `intervention` WHERE 1=1 GROUP BY `DATE` '; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['date_fr'].'"> '.$row['date_fr'].'</option>';
           }
        ?>
</select>
<?php 
// on crée la requête SQL 
$sql = 'SELECT DATE_FORMAT(`DATE`,\'%d-%m-%Y\') AS date_fr FROM `intervention`'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_array($req)) {
 
echo '</br>'.$data['date_fr'].'</br>';
} 	
?>
</TD>

<TD>
<?php 
// on crée la requête SQL 
$sql = 'SELECT `Heure` FROM `intervention`'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_array($req)) {

echo '</br>'.$data['Heure'].'</br>';
} 	
?>
</TD>
</form>
</TR>
</TABLE>
</div>

<form method="post" action="recap.php">
<p><center><input type="submit" name="recherche" class="btn btn-info" value="OK"></center></p>

<?php
if (isset ($_POST['recherche'])){
?>
<div class="table-responsive">
<table class="table">

<tr class="success">
	<th>Technicien:</th>
	<th>Machine:</th>
	<th>Technique:</th>
	<th>Traitement technique (L ou K):</th>
	<th>Traitement technique (Colleuse):</th>
	<th>Traitement mecanique:</th>
	<th>Traitement dosage:</th>
	<th>Commentaire:</th>
	<th>Date:</th>
	<th>Heure:</th>
</tr>
   
<TR>

<TD>
<select name="tech" id="tech">
     <option value=""></option>
      <?php
           $sql = 'SELECT Nom FROM technicien'; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['Nom'].'"> '.$row['Nom'].'</option>';
           }
        ?>
</select>
<?php
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

echo '</TD>'.$result['Nom'].'</TD>';
echo'</TD>'.$result['Machine'].'</TD> ';
echo'</TD>'.$result['Technique'].'</TD> ';
echo'</TD>'.$result['Traitement'].'</TD> ';
echo'</TD>'.$result['Commentaire'].'</TD> ';
echo'</TD>'.$result['date_fr'].'</TD> ';
echo'</TD>'.$result['Heure'].'</TD>';
}

?>
</TD>

<TD>
<select name="machine" id="machine">
     <option value=""></option>
      <?php
           $sql = 'SELECT Nom FROM machine'; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['Nom'].'"> '.$row['Nom'].'</option>';
           }
        ?>
</select>

<?php
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


echo '</TD>'.$result['Nom'].'<//TD>';
echo'</TD>'.$result['Machine'].'</TD> ';
echo'</TD>'.$result['Technique'].'</TD> ';
echo'</TD>'.$result['Traitement'].'</TD> ';
echo'</TD>'.$result['Commentaire'].'</TD> ';
echo'</TD>'.$result['date_fr'].'</TD> ';
echo'</TD>'.$result['Heure'].'</TD>';

}

?>
</TD>

<TD>
<select name="technique" id="technique">
     <option value=""></option>
	 <option value="Teflon">Teflon</option>
	 <option value="Technique">Technique</option>
	 <option value="Dosage">Dosage</option>
	 <option value="Mecanique">Mecanique</option>
	 <option value="Technique Colleuse">Technique colleuse</option>
</select>
</TD>


<TD>
<select name="LouK" id="LouK">
     <option value=""></option>
      <?php
           $sql = 'SELECT traitement4 FROM `technique1` '; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['traitement4'].'"> '.$row['traitement4'].'</option>';
           }
        ?>
</select>

</TD>

<TD>
<select name="Colleuse" id="Colleuse">
     <option value=""></option>
      <?php
           $sql = 'SELECT traitement5 FROM `technique2` '; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['traitement5'].'"> '.$row['traitement5'].'</option>';
           }
        ?>
</select>

<TD>

<select name="mecanique" id="mecanique">
     <option value=""></option>
      <?php
           $sql = 'SELECT Traitement3 FROM `mecanique` '; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['Traitement3'].'"> '.$row['Traitement3'].'</option>';
           }
        ?>
</select>


<TD>
<select name="dosage" id="dosage">
     <option value=""></option>
      <?php
           $sql = 'SELECT Traitement2 FROM `dosage` '; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['Traitement2'].'"> '.$row['Traitement2'].'</option>';
           }
        ?>
</select>

</TD>

<TD>
<?php
// on crée la requête SQL 
$sql = 'SELECT *,DATE_FORMAT(`DATE`,\'%d-%m-%Y\') AS date_fr FROM `intervention` WHERE 1=1 ';
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($result = mysql_fetch_array($req)) {
	if ($result['Commentaire'] == "") {
		$result['Commentaire'] = "Non Specifie" ;
	}
echo '</br>'.$result['Commentaire'].'</br>';	
}
?>
</TD>

<TD>
<select name="date" id="date">
     <option value=""></option>
      <?php
           $sql = 'SELECT ID,DATE_FORMAT(`DATE`,\'%d-%m-%Y\') AS date_fr FROM `intervention` WHERE 1=1 GROUP BY `DATE` '; 
           $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
           while ($row = mysql_fetch_array($req, MYSQL_ASSOC)) {
               echo '<option value="'.$row['date_fr'].'"> '.$row['date_fr'].'</option>';
           }
        ?>
</select>

</TD>

<TD>

</TD>

</TR>
</TABLE>
</div>
</form>
<?php }?>
<form method="post" action="lcesa.php">
<p><center><input type="submit" name="retour" class="btn btn-info" value="RETOUR"/></center></p>
</form>

<center><ul class="pagination pagination-lg">
<li><a href="#">&laquo;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul></center>
</html>