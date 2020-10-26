<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
	<meta name="viewport" content="width=device-width, initial-1.0">
	<link rel="stylesheet" type="text/css" href="../../assets/css/inscription-apprenant-css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap&subset=cyrillic,latin-ext" rel="stylesheet">

</head>
<body>
	<main>
		
		<h2>
			<span><img src="<?=base_url()?>assets/img/img-apprenants/blue.png" width="15%" alt=""></span>
			<span>Inscription</span>
		 </h2>
		<form class="commercial_form" action="traitement/traitement.php" method="GET">
			<div class="bloc">
				<div class="blocnomprenom">
					<div class="bloc_nom">
					<label class="label" for="nom">Votre nom:</label>
					<input placeholder="Exemple: MOUSSAVOU"  type="texte" id="nom" name="nom" required="required">
				</div>
				
				<div class="bloc_prenom">
					<label class="label" for="prenom">Votre prénom:</label>
					<input placeholder="Exemple: Albus"   type="texte" id="prenom" name="prenom">
				</div>
				</div>	
				
				<div class="bloc_mail">
					<label  for="mail">Votre adresse e-mail:</label>
					<input placeholder="Exemple: moussouvalbus@gmail.com"   type="e-mail" id="mail" name="mail">
				</div>

				<div class="bloc_sexe">
					<p>Votre sexe:</p>
					<div><input type="radio" name="genre" id="h"><label for="h">Homme</label></div>
					<div><input type="radio" name="genre" id="f"><label for="f">Femme</label></div>
				</div>

				<div class="bloc_birthdate">
					<label for="age">Date de naissance:</label>
					<input type="date" id="age" name="age">
				</div>


				<div class="bloc_telephone">
					<label for="telephone">Numéro de téléphone:</label>
					<input placeholder="Exemple: 066443186" type="tel" id="telephone" name="telephone">
				</div>

				<div class="bloc_telwhatsapp">
					<label for="telephoneWhatsapp">Numéro whatsapp:</label>
					<input type="tel" id="telephoneWhatsapp" name="telephoneWhatsapp">
				</div>

				<div class="bloc_attentes">
					<label for="attentes">Quelles sont vos attentes vis-à-vis de la formation?</label>
					<textarea placeholder="Allez, dites nous tout" name="" id="attentes" cols="10" rows="10"></textarea>
				</div>

				<div class="bloc_periode">
					<label for="periode">Quelle période choisirez-vous pour la formation?</label><br>
					<div><input type="radio" name="heure" id="journe"><label for="journe">En matinée</label></div>
					<div><input type="radio" name="heure" id="soire"><label for="soire">En après midi</label></div>
				</div>	
			</div>
			<div class="btnEnvoi"><input class="last_1" type="submit" value="Envoyer"></div>
		</form>
	</main>
</body>
</html>