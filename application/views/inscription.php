<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
	<meta name="viewport" content="width=device-width, initial-1.0">
	<link rel="stylesheet" type="text/css" href="http://localhost/business-ecole241/assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap&subset=cyrillic,latin-ext" rel="stylesheet">

</head>
<body>
	<main>
		<h2>Inscription</h2>
		<form class="commercial_form" action="<?= site_url('inscription/ajouter') ?>" method="POST">
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
					<input placeholder="Exemple: moussouvalbus@gmail.com"   type="e-mail" id="mail" name="email">
				</div>

				<div class="bloc_sexe">
					<p>Votre sexe:</p>
					<div><input type="radio" name="genre" value="H" checked id="h"><label for="h">Homme</label></div>
					<div><input type="radio" name="genre" value="F" id="f"><label for="f">Femme</label></div>
				</div>

				<div class="bloc_birthdate">
					<label for="date_n">Date de naissance:</label>
					<input type="date" id="date_n" name="date_n">
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
					<textarea placeholder="Allez, dites nous tout" name="attentes" id="attentes" cols="20" rows="10"></textarea>
					<!-- <input  type="texte" id="attentes" name="objectif" > -->
				</div>

				<div class="bloc_periode">
					<label for="periode">Quelle période choisirez-vous pour la formation?</label><br>
					<div><input type="radio" name="periode" id="journe"><label for="journe">Journée</label></div>
					<div><input type="radio" name="periode" id="midi"><label for="midi">Après-midi</label></div>
				</div>	
			</div>
			<div class="btnEnvoi"><input class="last_1" type="submit" value="Envoyer"></div>
		</form>
	</main>
</body>
</html>