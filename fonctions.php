<?php
function connectMaBase(){
    $base = mysql_connect ('localhost', 'root', 'lcesa');  
    mysql_select_db ('lcesa', $base) ;

}
?>
