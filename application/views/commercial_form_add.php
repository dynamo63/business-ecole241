
<!DOCTYPE html>
<html>
<head>
	<title>inscriptions commerciales</title>
	<meta name="viewport" content="width=device-width, initial-1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style_commercial.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap&subset=cyrillic,latin-ext" rel="stylesheet">

</head>
<body>
	<main>
		<h2><?php echo $titre; ?></h2>
		<form action="<?= site_url('commercial/ajouter') ?>" method="POST">
			<div class="bloc">
				<div class="boxBloc">
					<div class="bloc_1">
						<label class="label" for="nom">Nom:</label>
						<input placeholder="Ex: MOUSSOUVA" type="texte" id="nom" name="nom" required="required">
					</div>
					
					<div class="bloc_2">
						<label class="label" for="prenom">Prénom:</label>
						<input placeholder="Ex: Albus" type="texte" id="prenom" name="prenom">
					</div>
				</div>
				
				<div class="bloc_3">
					<p>Votre sexe:</p>
					<div><input type="radio" name="genre" value="H" checked id="h"><label for="h">Homme:</label></div>
					<div><input type="radio" name="genre" value="F" id="f"><label for="f">Femme</label></div>
				</div>

				<div class="bloc_4">
					<label for="age">Date de naissance:</label>
					<input value="1993-06-05" type="date" id="age" name="date_n">
				</div>
				
				<div class="bloc_5">
					<label  for="email">Adresse e-mail:</label>
					<input placeholder="Ex: moussouvaalbus@gmail.com" type="e-mail" id="email" name="email">
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