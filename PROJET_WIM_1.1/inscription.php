<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>projet </title>
  <link rel="stylesheet" media="screen" href="inscription.css">
  <link rel="stylesheet" media="screen" href="index.css">
</head>
<body>
  	
	<a href="mailto:Faune.et.flaure@gmail.com" ><img src="mail3.png"class="mail"/></a>
	<nav>
		<div class="table">
			<ul>
				<li class="menu-ind">
					<a href ="index.html">Accueil</a>
				</li>
				<li class="menu-prop">
					<a href ="apropos.php">Nos Sorties</a>
				</li>
				<li class="menu-insr">
					<a href ="inscription.php">S'inscrire</a>
				</li>
				<li class="menu-con">
					<a href ="contacts.html">Contacts</a>
				</li>
			</ul>
		</div>
	</nav>
    <div class="rect"></div>
<?php

    try {
        //Connexion à la base de données (une seule fois suffit)
        $dbh=new PDO('mysql:host=localhost;dbname=final','root', '');


        // Vérification si le formulaire a été soumis
        if (isset($_POST['submit'])) {
            // Récupération des valeurs du formulaire
            $id_sortie = $_POST['id_sortie'];
            $id_personne = $_POST['id_personne'];

            // Insertion de l'inscription dans la table "inscrire"
            $query = "INSERT INTO inscrire (date_inscription,id_sortie, id_personne)
                        VALUES (NOW(), :id_sortie, :id_personne)";
            $prep = $dbh->prepare($query);
            $prep->bindParam(':id_sortie', $id_sortie);
            $prep->bindParam(':id_personne', $id_personne);
            $prep->execute();

            // Affichage d'un message de succès
            echo '<p>Inscription réussie à la sortie !</p>';
        }
     } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
        die();
    }
?>

<div class="formulaire">
<form method="POST" action="">
    <label for="id_personne">Votre identifiant :</label>
    <input type="text" id="id_personne" name="id_personne" required><br>

    <label for="id_sortie">Identifiant de sortie :</label>
    <input type="text" id="id_sortie" name="id_sortie" required><br>
    <div class="contre">
        <input type="submit" name="submit" value="S'inscrire">
    </div>
</form>
</div>
<u1 class="titre1">
            <p> 
                <h1> Inscrivez-vous à une sortie !</h1>
            </p>
</u1>
<u1 class="titre2">
            <p> 
                Renseignez votre identifiant et l'identifiant de la sortie à laquelle vous souhaitez vous inscrire.
        </p>
</u1>
<div class="rectangle2">
<footer class="A2">
	<p> copyright 2020 Insaf Djebbari </p>
</footer>
</div>
</body>
</html>






















