<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Récapitulatif</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <main>
    <section>
      <header>
       <nav id="remonter">
        <ul>
            <li><a href="trombinoscope.html">Trombinoscope</a></li>
            <li><a href="evaluation.html">Evaluation</a></li>
            <li><a href="meteo.php">Météo</a></li>
        </ul>
    </nav>
      </header>
      <br>
      <footer></footer>
    </section>
  </main>
</body>
</html>

<?php
	
	//extract($_POST);
	//echo '<pre>'.print_r($_POST).'</pre>';

	echo "<table border=\"1\"><tr><th>Les compétences réalisées</th></tr><tr><td>";
	echo "<ul>";
	if ($_POST["maquette"]=="réalisé") {
	echo "<li> Maquetter une application </li> ";
	}
	if ($_POST["statique"]=="réalisé") {
	echo "<li> Réaliser une interface utilisateur Web statique et adaptable </li> ";
	}
	if ($_POST["dynamique"]=="réalisé") {
	echo "<li> Développer une interface utilisateur Web dynamique </li> ";
	}
	if ($_POST["interface"]=="réalisé") {
	echo "<li> Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce </li> ";
	}
	if ($_POST["bd"]=="réalisé") {
	echo "<li>Créer une base de données </li> ";
	}
	if ($_POST["composants"]=="réalisé") {
	echo "<li> Développer les composants d'accès aux données </li> ";
	}
	if ($_POST["backend"]=="réalisé") {
	echo "<li> Développer la partie backend d'une application Web ou Web mobile </li> ";
	}
	if ($_POST["mes"]=="réalisé") {
	echo "<li> Élaborer et mettre en oeuvre des composants dans une application de gestion de contenu ou e-commerce </li> ";
	}
	echo "</ul></td></tr>";

	echo "<table border=\"1\"><tr><th>Les compétences non réalisées</th></tr><tr><td>";
	echo "<ul>";
	if ($_POST["maquette"]=="non_réalisé") {
	echo "<li> Maquetter une application </li> ";
	}
	if ($_POST["statique"]=="non_réalisé") {
	echo "<li> Réaliser une interface utilisateur Web statique et adaptable </li> ";
	}
	if ($_POST["dynamique"]=="non_réalisé") {
	echo "<li> Développer une interface utilisateur Web dynamique </li> ";
	}
	if ($_POST["interface"]=="non_réalisé") {
	echo "<li> Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce </li> ";
	}
	if ($_POST["bd"]=="non_réalisé") {
	echo "<li> Créer une base de données </li> ";
	}
	if ($_POST["composants"]=="non_réalisé") {
	echo "<li> Développer les composants d'accès aux données </li> ";
	}
	if ($_POST["backend"]=="non_réalisé") {
	echo "<li> Développer la partie backend d'une application Web ou Web mobile </li> ";
	}
	if ($_POST["mes"]=="non_réalisé") {
	echo "<li> Élaborer et mettre en oeuvre des composants dans une application de gestion de contenu ou e-commerce </li> ";
	}
	echo "</ul></td></tr>";
	echo "<br>";

?>