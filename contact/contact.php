<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['objet']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"Fishandtips.com"<Fishandtips.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<img src="../logo/fish.png"/>
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					<u>Objet de l\'expéditeur :</u>'.$_POST['objet'].'<br />
					<u>Commentaires :</u>
					'.nl2br($_POST['message']).'
					<br />
					<img src="../logo/fish.png"/>
				</div>
			</body>
		</html>
		';

		mail("foussenicoulibalypro@gmail.com", "CONTACT - Fishandtips.com", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="icon"  href="../logo/flavi.ico" />
		<link rel="stylesheet" href="contact.css">
		  <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
	</head>
	<body>
		<a href="../acceuil.html" class="logo"
			<span class="symbol"><img class="petit"src="../images/fishandship.png" style="width:2em; height:2em; " /></span><span class="title">Fish'n Tips</span>
		</a>
		<header >
<h1>Des question?</h1>

		</header>





<div id="form">

<div class="fish" id="fish"></div>
<div class="fish" id="fish2"></div>

<form id="waterform" method="POST">

<div class="formgroup" id="name-form">
    <label for="name">Votre nom</label>
    <input type="text" id="name" name="nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" />
</div>

<div class="formgroup" id="message-form">
    <label for="objet">l'objet de la demande</label>
    <input type="text" id="message" name="objet" value="<?php if(isset($_POST['objet'])) { echo $_POST['objet']; } ?>" />
</div>

<div class="formgroup" id="email-form">
    <label for="email">Votre mail</label>
    <input type="email" id="email" name="mail" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" />
</div>

<div class="formgroup" id="message-form">
    <label for="message">message</label>
    <textarea id="message" name="message" value=<?php if(isset($_POST['message'])) { echo $_POST['message']; }?>></textarea>
</div>
<input type="submit" value="Envoyer !" name="mailform" />
</div>

</form>
<?php
		if(isset($msg))
		{
			echo $msg;
		}?>
</body>
</html>
