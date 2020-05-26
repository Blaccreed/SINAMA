<?php
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['email']) && $_POST['motdepasse'] == 'Connexion') {
	if ((isset($_POST['email']) && !empty($_POST['login'])) {

	$base = mysqli_connect ('serveur', 'login', 'password');
	mysqli_connect ('nom_base', $base);

	// on teste si une entrée de la base contient ce couple login / pass
	$sql = 'SELECT count(*) FROM membre WHERE login="'.mysqli_escape_string($_POST['login']).'" AND pass_md5="'.mysqli_escape_string(md5($_POST['pass'])).'"';
	$req = mysqli_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
	$data = mysqli_fetch_array($req);

	mysqli_free_result($req);
	mysqli_close();

	// si on obtient une réponse, alors l'utilisateur est un membre
	if ($data[0] == 1) {
		session_start();
		$_SESSION['login'] = $_POST['login'];
		header('Location: membre.php');
		exit();
	}
	// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
	elseif ($data[0] == 0) {
		$erreur = 'Compte non reconnu.';
	}
	// sinon, alors la, il y a un gros problème :)
	else {
		$erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}
?>
