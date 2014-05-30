<?php
include('config.php')
?>

<?php

$id=$_SESSION['userid']; 

if ( $id == 1  ){ 

$requ ='DELETE FROM savoir WHERE  id="'.$_GET['id'].'"';


$req = mysql_query($requ);


mysql_query($req);

header('Location: mesnews.php');

}

else {

$requ ='DELETE FROM savoir WHERE  id="'.$_GET['id'].'" AND user_id="'.$_SESSION['userid'].'"';


$req = mysql_query($requ);


mysql_query($req);}

header('Location: mesnews.php');


?>