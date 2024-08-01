
<?php 
$id = $_GET["id"];

?>

<?php
try {
    // On se connecte à MySQL
    $mysqlClient = new PDO('mysql:host=localhost;dbname=fiche;charset=utf8', 'root', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM carac';
$fichesStatement = $mysqlClient->prepare($sqlQuery);
$fichesStatement->execute();
$fiches = $fichesStatement->fetchAll();
$fiche_actuelle=$fiches[$id];

$sqlQuery = 'SELECT * FROM competences';
$fichescompStatement = $mysqlClient->prepare($sqlQuery);
$fichescompStatement->execute();
$fichescomp = $fichescompStatement->fetchAll();
$fiche_actuelle_comp=$fichescomp[$id];
print_r($fiche_actuelle);




// echo $fiche_actuelle["Alignement"];
// echo ($fiche_actuelle["Alignement"]===4 ? 'Loyal Bon' : 'pas Loyal Bon');
// On affiche chaque recette une à une

?>



<!DOCTYPE html>
<html>
<head>
    <title>Test formulaire</title>
	<link rel="stylesheet" href="fiche.css">
</head>
<body>

	
<div id="nom"><?php echo 'Nom : ', $fiche_actuelle["Nom"]?></div> <br> 
<?php  echo '<div id="subsection"> FP </div>: ', $fiche_actuelle["FP"] ?><br>
<?php  echo '<div id="subsection"> Rang Mythique </div>: ', $fiche_actuelle["Rang_Mythique"] ?><br>
<div id="subsection">PX</div><br>
Type de taille "taille", Alignement<br>
<div id="subsection">Init</div> ; Sens<br>

<section>Defense</section>
<div id="subsection">CA</div> , contact, pris au dépourvu <br>
<?php  echo '<div id="subsection"> PV </div>: ', 42?><br>
<div id="subsection">Ref</div>, <div id="subsection">Vig</div>, <div id="subsection">Vol</div><br>
<div id="subsection">RD</div> ; <div id="subsection">Immunités</div><br>

<section>Attaque</section>
<div id="subsection">VD</div><br>
<div id="subsection">Corps à corps</div><br>
<div id="subsection">Espace</div> ; <div id="subsection">Allonge</div><br>
<div id="subsection">Attaques spéciales</div><br>
<div id="subsection">Pouvoirs magiques</div> :<br>
Constant<br>
A volonté<br>
3/jour<br>
1/jour<br>
1/mois<br>

<section>Caractéristiques</section>
<?php  echo '<div id="subsection"> For </div>: ', $fiche_actuelle["Force"] ?> <?php  echo '<div id="subsection"> Dex </div>: ', $fiche_actuelle["Dexterite"] ?> <?php  echo '<div id="subsection"> Cons </div>: ', $fiche_actuelle["Constitution"] ?> <?php  echo '<div id="subsection"> Int </div>: ', $fiche_actuelle["Intelligence"] ?> <?php  echo '<div id="subsection"> Sag </div>: ', $fiche_actuelle["Sagesse"] ?><?php  echo '<div id="subsection"> Cha </div>: ', $fiche_actuelle["Charisme"] ?><br>
<div id="subsection">BBA</div>, <div id="subsection">BMO</div>, <div id="subsection">DMD</div><br>
<div id="subsection">Dons</div><br>
<div id="subsection">Compétences</div><br>
<div id="subsection">Langues</div><br>
<div id="subsection">Particularités</div><br>

<section>Ecologie</section>
<div id="subsection">Environnement</div><br>
<div id="subsection">Organisation sociale</div><br>
<div id="subsection">Trésor</div><br>

<section>Pouvoirs spéciaux</section>
<?php echo $fiche_actuelle["Particularites"]?>


<section>Résumé</section>
<?php echo $fiche_actuelle["Resume"]?>



</html>
