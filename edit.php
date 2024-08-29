
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

// On récupère tout le contenu de la table carac
$sqlQuery = 'SELECT * FROM carac';
$fichesStatement = $mysqlClient->prepare($sqlQuery);
$fichesStatement->execute();
$fiches = $fichesStatement->fetchAll();
$fiche_actuelle=$fiches[$id];
//print_r($fiche_actuelle);

$sqlQuerycomp = 'SELECT * FROM competences';
$fichescompStatement = $mysqlClient->prepare($sqlQuerycomp);
$fichescompStatement->execute();
$fichescomp = $fichescompStatement->fetchAll();
$fiche_actuelle_comp=$fichescomp[$id];
//print_r($fiche_actuelle_comp);

$sqlQuerypouv = 'SELECT * FROM `pouvoirs magiques`';
$fichespouvStatement = $mysqlClient->prepare($sqlQuerypouv);
$fichespouvStatement->execute();
$fichespouv = $fichespouvStatement->fetchAll();
$fiche_actuelle_pouv=$fichespouv[$id];

$sqlQuerysorts = 'SELECT * FROM `sorts`';
$fichessortsStatement = $mysqlClient->prepare($sqlQuerysorts);
$fichessortsStatement->execute();
$fichessorts = $fichessortsStatement->fetchAll();
$fiche_actuelle_sorts=$fichessorts[$id];


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
		<?php echo '<label for="Nom">Nom : <input type="texte" name="Nom" id="Nom" value=',$fiche_actuelle["Nom"],'><br> '?>
		<label for="Alignement">Alignement : </label>
        <select name="Alignement" id="Alignement">
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
		<?php echo '<label for="FP">FP : <input type="number" name="FP" id="FP" value=',$fiche_actuelle["FP"],'><br> '?>
		<?php echo '<label for="Rang_Mythique">Rang Mythique : <input type="number" name="Rang_Mythique" id="Rang_Mythique" value=',$fiche_actuelle["Rang_Mythique"],'><br> '?>
        <label for="type">Type : </label>
        <select name="Type" id="type">
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
		<label for="Taille">Taille : </label>
        <select name="Taille" id="Taille">
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
		
		
		
		<?php echo '<label for="Sens">Sens : <input type="texte" name="Sens" id="Sens" value=',$fiche_actuelle["Sens"],'><br> '?>
		<?php echo '<label for="Aura">Aura : <input type="texte" name="Aura" id="Aura" value=',$fiche_actuelle["Aura"],'><br> '?>
		
		<?php echo '<label for="Concentration_pv">Concentration : <input type="number" name="Concentration_pv" id="Concentration_pv" value=',$fiche_actuelle_pouv["Concentration_pv"],'><br> '?>
		<?php echo '<label for="NLS">NLS : <input type="number" name="NLS" id="NLS" value=',$fiche_actuelle_pouv["NLS"],'><br> '?>
		<?php echo '<label for="Constant">Constant : <input type="texte" name="Constant" id="Constant" value=',$fiche_actuelle_pouv["Constant"],'><br> '?>
		<?php echo '<label for="A volonte">A volonté : <input type="texte" name="A volonte" id="A volonte" value=',$fiche_actuelle_pouv["A_volonte"],'><br> '?>
		<?php echo '<label for="3_jour">3/jour : <input type="texte" name="3_jour" id="3_jour" value=',$fiche_actuelle_pouv["3_jour"],'><br> '?>
		<?php echo '<label for="1_jour">1/jour : <input type="texte" name="1_jour" id="1_jour" value=',$fiche_actuelle_pouv["1_jour"],'><br> '?>
		<?php echo '<label for="1_mois">1/mois : <input type="texte" name="1_mois" id="1_mois" value=',$fiche_actuelle_pouv["1_mois"],'><br> '?>
		<?php echo '<label for="1_an">1/an : <input type="texte" name="1_an" id="1_an" value=',$fiche_actuelle_pouv["1_an"],'><br> '?>
		
		
		<?php echo '<label for="Classe">Constant : <input type="texte" name="Classe" id="Classe" value=',$fiche_actuelle_sorts["Classe"],'><br> '?>
		<?php echo '<label for="Concentration">Concentration : <input type="number" name="Concentration" id="Concentration" value=',$fiche_actuelle_sorts["Concentration"],'><br> '?>
		<?php echo '<label for="NLS_sorts">NLS : <input type="number" name="NLS_sorts" id="NLS_sorts" value=',$fiche_actuelle_sorts["NLS_sorts"],'><br> '?>
		
		<?php echo '<label for="Niveau_0">Niveau 0 : <input type="texte" name="Niveau_0" id="Niveau_0" value=',$fiche_actuelle_sorts["Niveau_0"],'><br> '?>
		<?php echo '<label for="Niveau_1">Niveau 1 : <input type="texte" name="Niveau_1" id="Niveau_1" value=',$fiche_actuelle_sorts["Niveau_1"],'><br> '?>
		<?php echo '<label for="Niveau_2">Niveau 2 : <input type="texte" name="Niveau_2" id="Niveau_2" value=',$fiche_actuelle_sorts["Niveau_2"],'><br> '?>
		<?php echo '<label for="Niveau 3">Niveau 3 : <input type="texte" name="Niveau_3" id="Niveau_3" value=',$fiche_actuelle_sorts["Niveau_3"],'><br> '?>
		<?php echo '<label for="Niveau_4">Niveau 4 : <input type="texte" name="Niveau_4" id="Niveau_4" value=',$fiche_actuelle_sorts["Niveau_4"],'><br> '?>
		<?php echo '<label for="Niveau_5">Niveau 5 : <input type="texte" name="Niveau_5" id="Niveau_5" value=',$fiche_actuelle_sorts["Niveau_5"],'><br> '?>
		<?php echo '<label for="Niveau_6">Niveau 6 : <input type="texte" name="Niveau_6" id="Niveau_6" value=',$fiche_actuelle_sorts["Niveau_6"],'><br> '?>
		<?php echo '<label for="Niveau_7">Niveau 7 : <input type="texte" name="Niveau_7" id="Niveau_7" value=',$fiche_actuelle_sorts["Niveau_7"],'><br> '?>
		<?php echo '<label for="Niveau_8">Niveau 8 : <input type="texte" name="Niveau_8" id="Niveau_8" value=',$fiche_actuelle_sorts["Niveau_8"],'><br> '?>
		<?php echo '<label for="Niveau_9">Niveau 9 : <input type="texte" name="Niveau_9" id="Niveau_9" value=',$fiche_actuelle_sorts["Niveau_9"],'><br> '?>
		
		<?php echo '<label for="VD">VD  : <input type="number" name="VD" id="VD" value=',$fiche_actuelle["VD"],'><br>' ?>
		<?php echo '<label for="distance_vol">Vol : <input type="number" name="distance_vol" id="distance_vol" value=',$fiche_actuelle["distance_vol"],'><br>' ?>
		<?php echo '<label for="qualite_vol">Qualité de vol  : <input type="text" name="qualite_vol" id="qualite_vol" value=',$fiche_actuelle["qualite_vol"],'><br>' ?>
		<?php echo '<label for="cac">Corps-à-corps  : <input type="text" name="cac" id="cac" value=',$fiche_actuelle["cac"],'><br>' ?>
		<?php echo '<label for="Espace">Espace  : <input type="number" name="Espace" id="Espace" value=',$fiche_actuelle["Espace"],'><br>' ?>
		<?php echo '<label for="Allonge">Allonge  : <input type="number" name="Allonge" id="Allonge" value=',$fiche_actuelle["Allonge"],'><br>' ?>
		<?php echo '<label for="Attaques_spe">Attaques spéciales  : <input type="text" name="Attaques_spe" id="Attaques_spe" value=',$fiche_actuelle["Attaques_spe"],'><br>' ?>
		
		<?php echo '<label for="For">Force : <input type="number" name="Force" id="For" value=',$fiche_actuelle["Force"],'><br> '?>
		<?php echo '<label for="Dex">Dextérité : <input type="number" name="Dexterite" id="Dex" value=',$fiche_actuelle["Dexterite"],'><br> '?>
		<?php echo '<label for="Cons">Constitution : <input type="number" name="Constitution" id="Cons" value=',$fiche_actuelle["Constitution"],'><br> '?>
		
		<?php echo '<label for="Int">Intelligence : <input type="number" name="Intelligence" id="Int" value=',$fiche_actuelle["Intelligence"],'><br> '?>
		<?php echo '<label for="Sag">Sagesse : <input type="number" name="Sagesse" id="Sag" value=',$fiche_actuelle["Sagesse"],'><br> '?>
		<?php echo '<label for="Cha">Charisme : <input type="number" name="Charisme" id="Cha" value=',$fiche_actuelle["Charisme"],'><br> '?>
		<?php echo '<label for="BBA">BBA : <input type="number" name="BBA" id="BBA" value=',$fiche_actuelle["BBA"],'><br> '?>
		
		<?php echo '<label for="Armure">Armure : <input type="number" name="Armure" id="Armure", value=',$fiche_actuelle["Armure"],'><br> '?>
		<?php echo '<label for="Contact">dont Armure+Bouclier+Armure naturelle  : <input type="number" name="Contact" id="Contact" value=',$fiche_actuelle["Contact"],'><br>'   ?>
		<?php echo '<label for="Esquive">dont Esquive  : <input type="number" name="Esquive" id="Esquive" value=',$fiche_actuelle["Esquive"],'><br>' ?>
		<?php echo '<label for="Description_bonus_armure">Description bonus armure : <input type="text" name="Description_bonus_armure" id="Description_bonus_armure" value=',$fiche_actuelle["Description_bonus_armure"],'><br>' ?>
		
		<?php echo '<label for="Bonus_Initiative">Bonus Initiative  : <input type="number" name="Bonus_Initiative" id="Bonus_Initiative" value=',$fiche_actuelle["Bonus_Initiative"],'><br>' ?>
		<?php echo '<label for="Bonus_Reflexe">Bonus Réflexe : <input type="number" name="Bonus_Reflexe" id="Bonus_Reflexe" value=',$fiche_actuelle["Bonus_Reflexe"],'><br>' ?>
		<?php echo '<label for="Bonus_Vigueur">Bonus Vigueur : <input type="number" name="Bonus_Vigueur" id="Bonus_Vigueur" value=',$fiche_actuelle["Bonus_Vigueur"],'><br>' ?>
		<?php echo '<label for="Bonus_Volonte">Bonus Volonte : <input type="number" name="Bonus_Volonte" id="Bonus_Volonte" value=',$fiche_actuelle["Bonus_Volonte"],'><br>' ?>
		
		<?php echo '<label for="RD_valeur">RD valeur  : <input type="number" name="RD_valeur" id="RD_valeur" value=',$fiche_actuelle["RD_valeur"],'><br>' ?>
		<?php echo '<label for="RD">RD  : <input type="text" name="RD" id="RD" value=',$fiche_actuelle["RD"],'><br>' ?>
		<?php echo '<label for="Immunite">Immunité : <input type="text" name="Immunite" id="Immunite" value=',$fiche_actuelle["Immunite"],'><br>' ?>
		<?php echo '<label for="Resistance">Résistance  : <input type="text" name="Resistance" id="Resistance" value=',$fiche_actuelle["Resistance"],'><br>' ?>
		<?php echo '<label for="RM">RM  : <input type="number" name="RM" id="RM" value=',$fiche_actuelle["RM"],'><br>' ?>

		<?php echo '<label for="Dons">Dons : <input type="text" name="Dons" id="Dons" value=',$fiche_actuelle["Dons"],'><br> '?>
		<?php echo '<label for="Langues">Langues : <input type="text" name="Langues" id="Langues" value=',$fiche_actuelle["Langues"],'><br> '?>
		<?php echo '<label for="Particularites">Particularités : <input type="text" name="Particularites" id="Particularites" value=',$fiche_actuelle["Particularites"],'><br> '?>
		<?php echo '<label for="Environnement">Environnement : <input type="text" name="Environnement" id="Environnement" value=',$fiche_actuelle["Environnement"],'><br> '?>
		<?php echo '<label for="Organisation_sociale">Organisation sociale : <input type="text" name="Organisation_sociale" id="Organisation_sociale" value=',$fiche_actuelle["Organisation_sociale"],'><br> '?>
		<?php echo '<label for="Tresor">Trésor : <input type="text" name="Tresor" id="Tresor" value=',$fiche_actuelle["Tresor"],'><br> '?>
		<?php echo '<label for="Pouvoirs_speciaux">Pouvoir spéciaux : <input type="text" name="Pouvoirs_speciaux" id="Pouvoirs_speciaux" value=',$fiche_actuelle["Pouvoirs_speciaux"],'><br> '?>
		<?php echo '<label for="Resume">Résumé : <input type="text" name="Resume" id="Resume", value=',$fiche_actuelle["Resume"],'><br> '?>
		
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
