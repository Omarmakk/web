<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>À propos de nous </title>
  <link rel="stylesheet" media="screen" href="apropos.css">
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
					<a href ="apropos.php">Sorties</a>
				</li>
                <li class="menu-insr">
					<a href ="inscription.php">S'INSCRIRE</a>
				</li>
				<li class="menu-con">
					<a href ="contacts.html">Contacts</a>
				</li>
			</ul>
		</div>
	</nav>
    <div class= "rectangle2"></div>
	<div class="container">
    <table>
      <thead>
        <tr>
          <th>Thème</th>
          <th>Lieu</th>
          <th>Date</th>
          <th>Distance</th>
          <th>Effectif maximum</th>
        </tr>
      </thead>
      <tbody>
        <?php
            try {
                //Connexion à la base de données (une seule fois suffit)
                $dbh=new PDO('mysql:host=localhost;dbname=final','root', '');
                //Parcours des résultats d'une requête
                foreach($dbh->query('SELECT * from sortie') as $row) {
            //Affichage du nom des personnes
                 
                    echo "<tr><td>" .$row['theme'].
                    "</td><td>" .$row['lieu'].
                    "</td><td>" .$row['date_sortie'].
                    "</td><td>" .$row['distance'].
                    "</td><td>" .$row['effectif_max']."</td></tr>\n";
            }
            
                $dbh = null;
            } 
            catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
            }
        ?>
    </table>
  </div>
        <u1 class="titre">
            <h1> Nos sorties</h1>
        </u1>
            
	<footer>
		<p> copyright 2023 Insaf Djebbari </p>
	</footer>
</body>
</html>


