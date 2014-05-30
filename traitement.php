<?php
include('config.php')
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 //EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Les plus beaux cupcakes</title>
 <link rel="stylesheet" type="text/css" href="css/design.css" media="screen" title="css" /> 
<link rel="stylesheet" type="text/css" href="exclu.php" media="screen" title="css" /> 
	 <link rel="stylesheet" type="text/css" href="contact.php" media="screen" title="css" /> 
<link rel="stylesheet" type="text/css" href="histoire.php" media="screen" title="css" /> 
<link href='http://fonts.googleapis.com/css?family=Lobster|Indie+Flower|Dancing+Script:400,700&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	 <body>


	
			
			<?php
			//Si lutilisateur est connecte, on lui donne un lien pour modifier ses informations, pour voir ses messages et un pour se deconnecter
			if(isset($_SESSION['username']))
			{
			?>
			
			<div class="header" >
					<div id="menu_horizontal">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="news.php">Les cupcakes</a></li>
					<li><a href="mesnews.php">Mes cupcakes</a></li>
					<li><a href="connexion.php">Deconnexion</a></li>
					<li><a href="add.php">Ajouter</a></li>
<?php
//On recupere les identifiants, les pseudos et les emails des utilisateurs

$id=$_SESSION['userid']; 



	if ( $id == 1  ){  
?>

				<li>	<a href="admin.php">Admin</a></li>
					<?php
}?>

					</div>

					<!--<header>

						<nav>
							<span class="menu-open"><img src="menu.png" alt=""></span>&nbsp;
							<h1>Menu</h1>

							<div class="clr"></div>


							<div class="menu-slim">
								<ul>
										<li><a href="index.php">Accueil</a></li>
										<li><a href="news.php">Les cupcakes</a></li>
											<li><a href="mesnews.php">Mes cupcakes</a></li>
											<li><a href="connexion.php">Deconnexion</a></li>
											<li><a href="add.php">Ajouter</a></li>
									
								</ul>
							</div>
						</nav>
					</header>-->
				
					<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <h3>Menu</h3>
  <a href="index.php" style="text-decoration:none;height:10%;font-size:30px;padding-top:12%;">Accueil<img src="icon_48165.png" width="40" height="40" style="float:right;" > </a>
  <a href="news.php" style="text-decoration:none;height:10%;font-size:30px;padding-top:12%;background:#0d77b6;"> Les cupcakes<img src="icon_52803.png" width="40" height="40"  style="float:right;"></a>
    <a href="mesnews.php" style="text-decoration:none;height:10%;font-size:30px;padding-top:12%;">Mes cupcakes<img src="icon_48310.png" width="40" height="40" style="float:right;" ></a>
  <a href="connexion.php" style="text-decoration:none;height:10%;font-size:30px;padding-top:12%;background:#0d77b6;">Deconnexion<img src="icon_4371.png" width="40" height="40"  style="float:right;"></a>
  <a href="add.php" style="text-decoration:none;height:10%;font-size:30px;padding-top:12%;">Ajouter<img src="icon_6155.png" width="40" height="40"  style="float:right;"></a>
  <?php
//On recupere les identifiants, les pseudos et les emails des utilisateurs

$id=$_SESSION['userid']; 



	if ( $id == 1  ){  
?>

<a href="admin.php" style="text-decoration:none;height:10%;font-size:30px;padding-top:12%;background:#0d77b6;">Admin<img src="icon_39321.png" width="40" height="40"  style="float:right;"></a>
<?php
}?>


</nav>

<div class="container">
    <div class="main">
        <section>
          
            <!-- Class "cbp-spmenu-open" gets applied to menu -->
            <img src="menu.png" style="float:right;margin-right:10px;margin-top:10px;" id="showLeft" />
                       
        </section>
        
    </div>
</div>
			<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				menuTop = document.getElementById( 'cbp-spmenu-s3' ),
				menuBottom = document.getElementById( 'cbp-spmenu-s4' ),
				showLeft = document.getElementById( 'showLeft' ),
				showRight = document.getElementById( 'showRight' ),
				showTop = document.getElementById( 'showTop' ),
				showBottom = document.getElementById( 'showBottom' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

			showLeft.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeft' );
			};
			showRight.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRight' );
			};
			showTop.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuTop, 'cbp-spmenu-open' );
				disableOther( 'showTop' );
			};
			showBottom.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuBottom, 'cbp-spmenu-open' );
				disableOther( 'showBottom' );
			};
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			showRightPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toleft' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRightPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
				if( button !== 'showRight' ) {
					classie.toggle( showRight, 'disabled' );
				}
				if( button !== 'showTop' ) {
					classie.toggle( showTop, 'disabled' );
				}
				if( button !== 'showBottom' ) {
					classie.toggle( showBottom, 'disabled' );
				}
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>

			
			
			
			<?php
			}
			else
			{
			//Sinon, on lui donne un lien pour sinscrire et un autre pour se connecter
			?>
	
				<div class="header" >
						<div id="menu_horizontal">
						<li><a href="index.php">Accueil</a></li>
						<li><a href="news.php">Les cupcakes</a></li>
							<li><a href="inscription.php">Inscription</a></li>
						<li><a href="connexion.php">Connexion</a></li>
						

						</div>
<!--
						<header>

							<nav>
								<span class="menu-open"><img src="menu.png" alt=""></span>&nbsp;
								<h1>Menu</h1>

								<div class="clr"></div>


								<div class="menu-slim">
									<ul>
											<li><a href="index.php">Accueil</a></li>
											<li><a href="news.php">Les cupcakes</a></li>
												<li><a href="inscription.php">Inscription</a></li>
											<li><a href="connexion.php">Connexion</a></li>
									</ul>
								</div>
							</nav>
						</header>-->
						<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <h3>Menu</h3>
<a href="index.php" style="text-decoration:none;height:15%;font-size:30px;padding-top:17%;">Accueil<img src="icon_48165.png" width="40" height="40"  style="float:right;"></a>
<a href="news.php" style="text-decoration:none;height:15%;font-size:30px;padding-top:17%;background:#0d77b6;">Les cupcakes<img src="icon_52803.png" width="40" height="40"  style="float:right;"></a>
<a href="inscription.php" style="text-decoration:none;height:15%;font-size:30px;padding-top:17%;">Inscription<img src="icon_52803.png" width="40" height="40"  style="float:right;"></a>
<a href="connexion.php" style="text-decoration:none;height:15%;font-size:30px;padding-top:17%;background:#0d77b6;">Connexion<img src="icon_4372.png" width="40" height="40"  style="float:right;"></a>
  </nav>
<div class="container">
    <div class="main">
        <section>
          
            <!-- Class "cbp-spmenu-open" gets applied to menu -->
            <img src="menu.png" style="float:right;margin-right:10px;margin-top:10px;" id="showLeft" />
                       
        </section>
        
    </div>
</div>
			<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				menuTop = document.getElementById( 'cbp-spmenu-s3' ),
				menuBottom = document.getElementById( 'cbp-spmenu-s4' ),
				showLeft = document.getElementById( 'showLeft' ),
				showRight = document.getElementById( 'showRight' ),
				showTop = document.getElementById( 'showTop' ),
				showBottom = document.getElementById( 'showBottom' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

			showLeft.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeft' );
			};
			showRight.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRight' );
			};
			showTop.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuTop, 'cbp-spmenu-open' );
				disableOther( 'showTop' );
			};
			showBottom.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuBottom, 'cbp-spmenu-open' );
				disableOther( 'showBottom' );
			};
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			showRightPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toleft' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRightPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
				if( button !== 'showRight' ) {
					classie.toggle( showRight, 'disabled' );
				}
				if( button !== 'showTop' ) {
					classie.toggle( showTop, 'disabled' );
				}
				if( button !== 'showBottom' ) {
					classie.toggle( showBottom, 'disabled' );
				}
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>

			
			
			<?php
			}
			?>
<br><br> 
                  	<div class="content" >           
<?php

$maxsize=1000000;


$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['file']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) && ($_FILES['file']['size'] < $maxsize) ) 
{


        $uploaddir = 'upload/';
        $uploadfile = $uploaddir . basename($_FILES['file']['name']);



        echo '<pre>';



        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            echo "<p></p>";

        } else {
            echo "Attaque potentielle par téléchargement de fichiers.
                  Voici plus d'informations :\n";
        }

        echo '</pre>';



        $savoir = "INSERT INTO  savoir (link,text, user_id) VALUES ('".$_FILES['file']['name']."','".$_POST['name']."','".$_POST['userid']."')";

        mysql_query($savoir);

        ?>
                               
<br>
                        <img src="<?php echo  "upload/".$_FILES['file']['name']; ?>" height="350px" > 
                       
                      
                                               
                <p style="font-size:40px;"><?php echo $_POST['name']; ?></p>

          <?php 
      }


          else {
        echo "
Veuillez respecter les extensions jpg/png
Votre fichier doit peser moins de 1 mo
        ";


}      ?>                                   
                  </div>                    
			<div class="footer">
				<p>Vanessa Sanchez A3 IIM</p>

			</div>


			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
			<script src="script.js"></script>
			</body>

		</html>