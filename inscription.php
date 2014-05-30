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

		<div id="presentation_ordi_connexion">
			<h1>Le cupcake, star du moment</h1>
			<h2>Inscris toi et publie ton plus beau cupcake</h2>
		</div>
	<div class="content" >
			<div id="presentation_connexion">
				<h1>Le cupcake, star du moment</h1>
				<h2>Inscris toi et publie ton plus beau cupcake</h2>
			</div>




<div id="inscription"><br />
	<img src="cupcake_bleu.png" alt="cupcake_bleu" />



	<?php
	//On verifie que le formulaire a ete envoye
	if(isset($_POST['username'], $_POST['password'], $_POST['passverif'], $_POST['email']) and $_POST['username']!='')
	{
	        //On enleve lechappement si get_magic_quotes_gpc est active
	        if(get_magic_quotes_gpc())
	        {
	                $_POST['username'] = stripslashes($_POST['username']);
	                $_POST['password'] = stripslashes($_POST['password']);
	                $_POST['passverif'] = stripslashes($_POST['passverif']);
	                $_POST['email'] = stripslashes($_POST['email']);
	               
	        }
	        //On verifie si le mot de passe et celui de la verification sont identiques
	        if($_POST['password']==$_POST['passverif'])
	        {
	                //On verifie si le mot de passe a 6 caracteres ou plus
	                if(strlen($_POST['password'])>=6)
	                {




	                        //On verifie si lemail est valide
	                        if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['email']))
	                        {
	                                //On echape les variables pour pouvoir les mettre dans une requette SQL
	                                $username = mysql_real_escape_string($_POST['username']);
	                                $password = mysql_real_escape_string($_POST['password']);
	                                $email = mysql_real_escape_string($_POST['email']);
	                                
	                                //On verifie sil ny a pas deja un utilisateur inscrit avec le pseudo choisis
	                                $dn = mysql_num_rows(mysql_query('select id from users where username="'.$username.'"'));
	                                if($dn==0)
	                                {
	                                        //On recupere le nombre dutilisateurs pour donner un identifiant a lutilisateur actuel
	                                        $dn2 = mysql_num_rows(mysql_query('select id from users'));
	                                        $id = $dn2+1;
	                                        //On enregistre les informations dans la base de donnee
	                                        if(mysql_query('insert into users(id, username, password, email, signup_date) values ('.$id.', "'.$username.'", "'.$password.'", "'.$email.'", "'.time().'")'))
	                                        {
	                                                //Si ca a fonctionne, on naffiche pas le formulaire
	                                                $form = false;
	?><br />
	<div class="message"><p style="font-size:40px;">Aller connecte toi</p><br /><br />
	<a href="connexion.php" style="font-size:40px;text-decoration:none;color:#15A2D6;">connexion</a></div><br />	<?php
	                                        }
	                                        else
	                                        {
	                                                //Sinon on dit quil y a eu une erreur
	                                                $form = true;
	                                                $message = 'Une erreur est survenue lors de l\'inscription.';
	                                        }
	                                }
	                                else
	                                {
	                                        //Sinon, on dit que le pseudo voulu est deja pris
	                                        $form = true;
	                                        $message = 'Un autre utilisateur utilise d&eacute;j&agrave; le nom d\'utilisateur que vous d&eacute;sirez utiliser.';
	                                }
	                        }
	                        else
	                        {
	                                //Sinon, on dit que lemail nest pas valide
	                                $form = true;
	                                $message = 'L\'email que vous avez entr&eacute; n\'est pas valide.';
	                        }
	                }
	                else
	                {
	                        //Sinon, on dit que le mot de passe nest pas assez long
	                        $form = true;
	                        $message = 'Le mot de passe que vous avez entr&eacute; contien moins de 6 caract&egrave;res.';
	                }
	        }
	        else
	        {
	                //Sinon, on dit que les mots de passes ne sont pas identiques
	                $form = true;
	                $message = 'Les mots de passe que vous avez entr&eacute; ne sont pas identiques.';
	        }
	}
	else
	{
	        $form = true;
	}
	if($form)
	{
	        //On affiche un message sil y a lieu
	        if(isset($message))
	        {
	                echo '<div class="message">'.$message.'</div>';
	        }
	        //On affiche le formulaire
	?>
	<div class="content">
	    <form action="inscription.php" method="post">
	      
	        <div class="center" style="font-family: 'Indie Flower', cursive;">
	        <div class="input">
	            <label for="username" style="font-size:30px;">Pseudo </label><input style="width:90%;" type="text" name="username" value="<?php if(isset($_POST['username'])){echo htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
	            <label for="password" style="font-size:30px;">Mot de passe <span class="small"></span></label><input style="width:90%;" type="password" name="password" /><br />
	            <label for="passverif" style="font-size:30px;">Verification <span class="small"></span></label><input style="width:90%;" type="password" name="passverif" /><br />
	            <label for="email" style="font-size:30px;">Email </label><input style="width:90%;" type="text" name="email" value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
	           <br /><br /><br /></div>
	            <input style="width:60%;" type="submit" value="OK" />
	                </div>
	    </form>
	</div>
	<?php
	}
	?>
	<br />

</div>
	
	
	</div>
	
	<div class="footer">
		<p>Vanessa Sanchez A3 IIM</p>
		
	</div>


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="script.js"></script>
	</body>

</html>