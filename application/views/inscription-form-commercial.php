<!DOCTYPE html>
<html>
<head>
	<title>inscriptions commerciales</title>
	<meta name="viewport" content="width=device-width, initial-1.0">
	<link rel="stylesheet" type="text/css" href="../../assets/css/inscription-form-commercial-css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap&subset=cyrillic,latin-ext" rel="stylesheet">

</head>
<body>
	<main>
		<h2>Devenir commercial</h2>
		<form action="traitement/traitement.php" method="GET">
			<div class="bloc">
				<div class="boxBloc">
					<div class="bloc_1">
						<label class="label" for="nom">Nom:</label>
						<input placeholder="Ex: MOUSSOUVOU" type="texte" id="nom" name="nom" required="required">
					</div>
					
					<div class="bloc_2">
						<label class="label" for="prenom">Prénom:</label>
						<input placeholder="Ex: Albus" type="texte" id="prenom" name="prenom">
					</div>
				</div>
				
				<div class="bloc_3">
					<p>Votre sexe:</p>
					<div><input type="radio" name="genre" id="h"><label for="h">Homme:</label></div>
					<div><input type="radio" name="genre" id="f"><label for="f">Femme</label></div>
				</div>

				<div class="bloc_4">
					<label for="age">Date de naissance:</label>
					<input placeholder="Ex: 15/6/15" type="date" id="age" name="age">
				</div>
				
				<div class="bloc_5">
					<label  for="email">Adresse e-mail:</label>
					<input placeholder="Ex: moussouvoualbus@gmail.com" type="e-mail" id="email" name="mail">
				</div>

				<div class="bloc_6">
					<label for="motdepasse">Mot de passe:</label>
					<input  type="password" id="motdepasse" name="motDePasse">
				</div>

				<div class="bloc_7">
					<label class="label" for="nomUtilisateur">Nom utilisateur:</label>
					<input placeholder="Ex: MoussAlbus" type="texte" id="nomUtilisateur" name="utilisateur">
				</div>

				<div class="bloc_8">
					<label for="telephone">Numéro de téléphone:</label>
					<input placeholder="Ex: 06298364" type="tel" id="telephone" name="telephone">
				</div>

				<div class="bloc_9">
					<label for="telephoneWhatsapp">Numéro Whatsapp:</label>
					<input type="texte" id="telephoneWhatsapp" name="telephoneWhatsapp">
				</div>
			</div>
			<div class="btnEnvoi"><input class="last_1" type="submit" value="Envoyer"></div>
		</form>
	</main>
</body>
</html>