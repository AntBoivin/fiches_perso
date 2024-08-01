
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
// print_r($fiche_actuelle_comp);




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
	<h1>Test</h1>
	
	<a href="formulaire_pf.php"> Ajouter une entrée</a>
	<a href="fiche.php"> Tableau</a>
	
	
	
<?php echo '<form action="fiche_pf.php?id=',$id,'" method="post">' ?>
	<p>
		<?php echo '<label for="Nom">Nom : <input type="texte" name="nom" id="Nom" value=',$fiche_actuelle["Nom"],'><br> '?>
		<label for="alignement">Alignement : </label>
        <select name="alignement" id="alignement">
            <?php echo ($fiche_actuelle["Alignement"]===0 ? '<option value="0" selected>Loyal Bon</option>' : '<option value="0">Loyal Bon</option>'); 
			 echo $fiche_actuelle["Alignement"]===1 ? '<option value="1" selected>Loyal Neutre</option>' : '<option value="1">Loyal Neutre</option>'; 
			 echo $fiche_actuelle["Alignement"]===2 ? '<option value="2" selected>Loyal Mauvais</option>' : '<option value="2">Loyal Mauvais</option>'; 
			 echo $fiche_actuelle["Alignement"]===3 ? '<option value="3" selected>Neutre Bon</option>' : '<option value="3">Neutre Bon</option>'; 
			 echo $fiche_actuelle["Alignement"]===4 ? '<option value="4" selected>Neutre</option>' : '<option value="4">Neutre</option>'; 
			 echo $fiche_actuelle["Alignement"]===5 ? '<option value="5" selected>Neutre Mauvais</option>' : '<option value="5">Neutre Mauvais</option>'; 
			 echo $fiche_actuelle["Alignement"]===6 ? '<option value="6" selected>Chaotique Bon</option>' : '<option value="6">Chaotique Bon</option>'; 
			 echo $fiche_actuelle["Alignement"]===7 ? '<option value="7" selected>Chaotique Neutre</option>' : '<option value="7">Chaotique Neutre</option>'; 
			 echo $fiche_actuelle["Alignement"]===8 ? '<option value="8" selected>Chaotique Mauvais</option>' : '<option value="8">Chaotique Mauvais</option>'; ?>
        </select>
		<br>
		<?php echo '<label for="FP">FP : <input type="number" name="facteur_de_puissance" id="FP" value=',$fiche_actuelle["FP"],'><br> '?>
		<?php echo '<label for="rMy">Rang Mythique : <input type="number" name="rang_mythique" id="rMy" value=',$fiche_actuelle["Rang_Mythique"],'><br> '?>
        <label for="type">Type : </label>
        <select name="type" id="type">
            <?php echo ($fiche_actuelle["Type"]===1 ? '<option value="1" selected>Aberration</option>' : '<option value="1">Aberration</option>' ) ;
			 echo ($fiche_actuelle["Type"]===2 ? '<option value="2" selected>Animal</option>' : '<option value="2">Animal</option>' ) ;
			 echo ($fiche_actuelle["Type"]===3 ? '<option value="3" selected>Créature artificielle</option>' : '<option value="3">Créature artificielle</option>' ) ;
			 echo ($fiche_actuelle["Type"]===4 ? '<option value="4" selected>Créature magique</option>' : '<option value="4">Créature magique</option>' ) ;
			 echo ($fiche_actuelle["Type"]===5 ? '<option value="5" selected>Dragon</option>' : '<option value="5">Dragon</option>' ) ;
			 echo ($fiche_actuelle["Type"]===6 ? '<option value="6" selected>Extérieur</option>' : '<option value="6">Extérieur</option>' ) ;
			 echo ($fiche_actuelle["Type"]===7 ? '<option value="7" selected>Fée</option>' : '<option value="7">Fée</option>' ) ;
			 echo ($fiche_actuelle["Type"]===8 ? '<option value="8" selected>Humanoïde</option>' : '<option value="8">Humanoïde</option>' ) ;
			 echo ($fiche_actuelle["Type"]===9 ? '<option value="9" selected>Humanoïde monstrueux</option>' : '<option value="9">Humanoïde monstrueux</option>' ) ;
			 echo ($fiche_actuelle["Type"]===10 ? '<option value="10" selected>Mort-vivant</option>' : '<option value="10">Mort-vivant</option>' ) ;
			 echo ($fiche_actuelle["Type"]===11 ? '<option value="11" selected>Plante</option>' : '<option value="11">Plante</option>' ) ;
			 echo ($fiche_actuelle["Type"]===12 ? '<option value="12" selected>Vase</option>' : '<option value="12">Vase</option>' ) ;
			 echo ($fiche_actuelle["Type"]===13 ? '<option value="13" selected>Vermine</option>' : '<option value="13">Vermine</option>' ) ;?>
        </select>
		<br>
		<label for="taille">Taille : </label>
        <select name="taille" id="taille">
			<?php echo ($fiche_actuelle["Taille"]==="Infime" ? '<option value="Infime" selected>Infime</option>' : '<option value="Infime">Infime</option>' ) ;
			 echo ($fiche_actuelle["Taille"]==="Minuscule" ? '<option value="Minuscule" selected>Minuscule</option>' : '<option value="Minuscule">Minuscule</option>' ) ;
			 echo ($fiche_actuelle["Taille"]==="Très Petit" ? '<option value="Très Petit" selected>Très Petit</option>' : '<option value="Très Petit">Très Petit</option>' ) ;
			 echo ($fiche_actuelle["Taille"]==="Petit" ? '<option value="Petit" selected>Petit</option>' : '<option value="Petit">Petit</option>' ) ;
			 echo ($fiche_actuelle["Taille"]==="Moyen" ? '<option value="Moyen" selected>Moyen</option>' : '<option value="Moyen">Moyen</option>' ) ;
			 echo ($fiche_actuelle["Taille"]==="Grand" ? '<option value="Grand" selected>Grand</option>' : '<option value="Grand">Grand</option>' ) ;
			 echo ($fiche_actuelle["Taille"]==="Très Grand" ? '<option value="Très Grand" selected>Très Grand</option>' : '<option value="Très Grand">Très Grand</option>' ) ;
			 echo ($fiche_actuelle["Taille"]==="Gigantesque" ? '<option value="Gigantesque" selected>Gigantesque</option>' : '<option value="Gigantesque" >Gigantesque</option>' ) ;
			 echo ($fiche_actuelle["Taille"]==="Colossal" ? '<option value="Colossal" selected>Colossal</option>' : '<option value="Colossal">Colossal</option>' ) ;?>
        </select>
		<br>
		<!--<label for="DV">DV : <input type="number" name="dés de vie" id="DV"><br>-->
		
		<?php echo '<label for="For">Force : <input type="number" name="force" id="For" value=',$fiche_actuelle["Force"],'><br> '?>
		<?php echo '<label for="Dex">Dextérité : <input type="number" name="dexterite" id="Dex" value=',$fiche_actuelle["Dexterite"],'><br> '?>
		<?php echo '<label for="Cons">Constitution : <input type="number" name="constitution" id="Cons" value=',$fiche_actuelle["Constitution"],'><br> '?>
		
		<?php echo '<label for="Int">Intelligence : <input type="number" name="intelligence" id="Int" value=',$fiche_actuelle["Intelligence"],'><br> '?>
		<?php echo '<label for="Sag">Sagesse : <input type="number" name="sagesse" id="Sag" value=',$fiche_actuelle["Sagesse"],'><br> '?>
		<?php echo '<label for="Cha">Charisme : <input type="number" name="charisme" id="Cha" value=',$fiche_actuelle["Charisme"],'><br> '?>
		<?php echo '<label for="Armure">Armure : <input type="number" name="Armure" id="Armure", value=',$fiche_actuelle["Armure"],'><br> '?>
		
		<?php echo '<label for="particularites">Particularités : <input type="text" name="particularites" id="particularites" value=',$fiche_actuelle["Particularites"],'><br> '?>
		<?php echo '<label for="resume">Résumé : <input type="text" name="resume" id="resume", value=',$fiche_actuelle["Resume"],'><br> '?>
		
		<p id="comp">
<?php echo '<label for="Acro">Acrobaties : <input type="number" name="acrobaties" id="Acro" value=',$fiche_actuelle_comp["acrobaties"],'></label><br>'?>
<?php echo '<label for="Adlm">Art de la magie : <input type="number" name="art_de_la_magie" id="Adlm" value=',$fiche_actuelle_comp["art_de_la_magie"],'></label><br>'?>
<?php echo '<label for="Art_type_I">Art : <input type="text" name="artisanat_type_I" id="Art_type_I" value=',$fiche_actuelle_comp["artisanat_type_I"],'> </label>   '?>
<?php echo '<label for="Art_I"><input type="number" name="artisanat_I" id="Art_I" value=',$fiche_actuelle_comp["artisanat_I"],'></label><br>'?>
<?php echo '<label for="Art_type_II">Art : <input type="text" name="artisanat_type_II" id="Art_type_II" value=',$fiche_actuelle_comp["artisanat_type_II"],'>  </label> '?>
<?php echo '<label for="Art_II"> <input type="number" name="artisanat_II" id="Art_II" value=',$fiche_actuelle_comp["artisanat_II"],'></label><br>'?>
<?php echo '<label for="Bluff">Bluff : <input type="number" name="bluff" id="Bluff" value=',$fiche_actuelle_comp["bluff"],'></label><br>'?>
<?php echo '<label for="Conn_donj">Connaissances (exploration donjons) : <input type="number" name="conn_donj" id="Conn_donj" value=',$fiche_actuelle_comp["conn_donj"],'></label><br>   '?> 
<?php echo '<label for="Conn_folk">Connaissances (folklore local) : <input type="number" name="conn_folk" id="Conn_folk" value=',$fiche_actuelle_comp["conn_folk"],'></label><br>'?>
<?php echo '<label for="Conn_geo">Connaissances (géographie) : <input type="number" name="conn_geo" id="Conn_geo" value=',$fiche_actuelle_comp["conn_geo"],'></label><br>'?>
<?php echo '<label for="Conn_hist">Connaissances (histoire) : <input type="number" name="conn_hist" id="Conn_hist" value=',$fiche_actuelle_comp["conn_hist"],'></label><br>'?>
<?php echo '<label for="Conn_ing">Connaissances (ingénierie) : <input type="number" name="conn_ing" id="Conn_ing" value=',$fiche_actuelle_comp["conn_ing"],'></label><br>'?>
<?php echo '<label for="Conn_myst">Connaissances (mystère) : <input type="number" name="conn_myst" id="Conn_myst" value=',$fiche_actuelle_comp["conn_myst"],'></label><br>'?>
<?php echo '<label for="Conn_nat">Connaissances (nature) : <input type="number" name="conn_nat" id="Conn_nat" value=',$fiche_actuelle_comp["conn_nat"],'></label><br>'?>
<?php echo '<label for="Conn_nob">Connaissances (noblesse) : <input type="number" name="conn_nob" id="Conn_nob" value=',$fiche_actuelle_comp["conn_nob"],'></label><br>'?>
<?php echo '<label for="Conn_plans">Connaissances (plans) : <input type="number" name="conn_plans" id="Conn_plans" value=',$fiche_actuelle_comp["conn_plans"],'></label><br>'?>
<?php echo '<label for="Conn_rel">Connaissances (religions) : <input type="number" name="conn_rel" id="Conn_rel" value=',$fiche_actuelle_comp["conn_rel"],'></label><br>'?>
<?php echo '<label for="Deg">Déguisement : <input type="number" name="deguisement" id="Deg" value=',$fiche_actuelle_comp["deguisement"],'></label><br>'?>
<?php echo '<label for="Diplo">Diplomatie : <input type="number" name="diplomatie" id="Diplo" value=',$fiche_actuelle_comp["diplomatie"],'></label><br>'?>
<?php echo '<label for="Dis">Discrétion : <input type="number" name="discretion" id="Dis" value=',$fiche_actuelle_comp["discretion"],'></label><br>'?>
<?php echo '<label for="Dres">Dressage : <input type="number" name="dressage" id="Dres" value=',$fiche_actuelle_comp["dressage"],'></label><br>'?>
<?php echo '<label for="Equi">Équitation : <input type="number" name="equitation" id="Equi" value=',$fiche_actuelle_comp["equitation"],'></label><br>'?>
<?php echo '<label for="Escal"> Escalade : <input type="number" name="escalade" id="Escal" value=',$fiche_actuelle_comp["escalade"],'></label><br>'?>
<?php echo '<label for="Escam">Escamotage : <input type="number" name="escamotage" id="Escam" value=',$fiche_actuelle_comp["escamotage"],'></label><br>'?>
<?php echo '<label for="Estim">Estimation : <input type="number" name="estimation" id="Estim" value=',$fiche_actuelle_comp["estimation"],'></label><br>'?>
<?php echo '<label for="Evas">Évasion : <input type="number" name="evasion" id="Evas" value=',$fiche_actuelle_comp["evasion"],'></label><br>'?>
<?php echo '<label for="Intim">Intimidation : <input type="number" name="intimidation" id="Intim" value=',$fiche_actuelle_comp["intimidation"],'></label><br>'?>
<?php echo '<label for="Ling">Linguistique : <input type="number" name="linguistique" id="Ling" value=',$fiche_actuelle_comp["linguistique"],'></label><br>'?>
<?php echo '<label for="Nat">Natation : <input type="number" name="natation" id="Nat" value=',$fiche_actuelle_comp["natation"],'></label><br>'?>
<?php echo '<label for="Perc">Perception : <input type="number" name="perception" id="Perc" value=',$fiche_actuelle_comp["perception"],'></label><br>'?>
<?php echo '<label for="Secours">Premiers secours : <input type="number" name="premiers_secours" id="Secours" value=',$fiche_actuelle_comp["premiers_secours"],'></label><br>'?>
<?php echo '<label for="Prof_type_I">Profession : <input type="text" name="profession_type_I" id="Prof_type_I" value=',$fiche_actuelle_comp["profession_type_I"],'>  </label>  '?>
<?php echo '<label for="Prof_I">  <input type="number" name="profession_I" id="Prof_I" value=',$fiche_actuelle_comp["profession_I"],'></label><br>'?>
<?php echo ' <label for="Prof_type_II">Profession : <input type="text" name="profession_type_II" id="Prof_type_II" value=',$fiche_actuelle_comp["profession_type_II"],'>   </label> '?>
<?php echo '<label for="Prof_II">  <input type="number" name="profession_II" id="Prof_II" value=',$fiche_actuelle_comp["profession_II"],'></label><br>'?>
<?php echo '<label for="Psycho">Psychologie : <input type="number" name="psychologie" id="Psycho" value=',$fiche_actuelle_comp["psychologie"],'></label><br>'?>
<?php echo '<label for="Rep_type_I">Représentation : <input type="text" name="representation_type_I" id="Rep_type_I" value=',$fiche_actuelle_comp["representation_type_I"],'> </label>'?>
<?php echo '<label for="Rep_I">  <input type="number" name="representation_I" id="Rep_I" value=',$fiche_actuelle_comp["representation_I"],'></label><br>'?>
<?php echo '<label for="Rep_type_II">Représentation : <input type="text" name="representation_type_II" id="Rep_type_II" value=',$fiche_actuelle_comp["representation_type_II"],'>  </label> '?> 
<?php echo '<label for="Rep_II">  <input type="number" name="representation_II" id="Rep_II" value=',$fiche_actuelle_comp["representation_II"],'></label><br>'?>
<?php echo '<label for="Rep_type_III">Représentation : <input type="text" name="representation_type_III" id="Rep_type_III" value=',$fiche_actuelle_comp["representation_type_III"],'>   </label>'?>
<?php echo '<label for="Rep_III">  <input type="number" name="representation_III" id="Rep_III" value=',$fiche_actuelle_comp["representation_III"],'></label><br>'?>
<?php echo '<label for="Rep_type_IV">Représentation : <input type="text" name="representation_type_IV" id="Rep_type_IV" value=',$fiche_actuelle_comp["representation_type_IV"],'> </label>  '?>
<?php echo '<label for="Rep_IV">  <input type="number" name="representation_IV" id="Rep_IV" value=',$fiche_actuelle_comp["representation_IV"],'></label><br>'?>
<?php echo '<label for="Sabot">Sabotage : <input type="number" name="sabotage" id="Sabot" value=',$fiche_actuelle_comp["sabotage"],'></label><br>'?>
<?php echo '<label for="Survie">Survie : <input type="number" name="survie" id="Survie" value=',$fiche_actuelle_comp["survie"],'></label><br>'?>
<?php echo '<label for="Utilisation">Utilisation d\'objets magiques : <input type="number" name="utilisation_d_objets_magiques" id="Utilisation" value=',$fiche_actuelle_comp["utilisation_d_objets_magiques"],'></label><br>'?>
<?php echo '<label for="Vol">Vol : <input type="number" name="vol" id="Vol" value=',$fiche_actuelle_comp["vol"],'></label><br>	 '?>
</p> 
		
		
		
		
    </p>
	<input type="submit" value="Envoyer">
</form>
