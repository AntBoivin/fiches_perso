
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


$sqlQuery = 'SELECT * FROM `pouvoirs magiques`';
$fichespouvStatement = $mysqlClient->prepare($sqlQuery);
$fichespouvStatement->execute();
$fichespouv = $fichespouvStatement->fetchAll();
$fiche_actuelle_pouv=$fichespouv[$id];


$sqlQuery = 'SELECT * FROM `sorts`';
$fichessortsStatement = $mysqlClient->prepare($sqlQuery);
$fichessortsStatement->execute();
$fichessorts = $fichessortsStatement->fetchAll();
$fiche_actuelle_sorts=$fichessorts[$id];


// echo $fiche_actuelle["Alignement"];
// echo ($fiche_actuelle["Alignement"]===4 ? 'Loyal Bon' : 'pas Loyal Bon');


$alignement=array("LB", "LN", "LM", "NB", "N", "NM", "CB", "CN", "CM");
$taille=["Infime"=>"I", "Minuscule"=>"Min","Très Petit"=>"TP","Petit"=>"P","Moyen"=>"M","Grand"=>"G","Très Grand"=>"TG", "Gigantesque"=>"Gig","Colossal"=>"C"];
$Type=array("Aberration", "Animal" , "Créature artificielle", "Créature magique",
        "Dragon", "Extérieur", "Fée", "Humanoïde",
        "Humanoïde monstrueux", "Mort-vivant", "Plante",
        "Vase", "Vermine");
$comp=Array ("","Acrobaties","Art de la magie","artisanat type I","Artisanat","artisanat type II","Artisanat","Bluff","Connaissances donjon","Connaissances folklore","Connaissances géographie","Connaissances histoire","Connaissances ingénierie","Connaissances mystère","Connaissances nature","Connaissances noblesse","Connaissances plans","Connaissances religion","Déguisement","Diplomatie","Discretion","Dressage","Equitation","Escalade","Escamotage","Estimation","Evasion","Intimidation","Linguistique","Natation","Perception","Premiers secours","profession type I","Profession","profession type II","Profession","Psychologie","representation type I","Représentation","representation type II","Représentation","representation type III","Représentation","representation type IV","Représentation","Sabotage","Survie","Utilisation d'objets magiques","Vol");

$DV_valeur=[
        "Aberration" => 8, "Animal" => 8, "Créature artificielle" => 10, "Créature magique" => 10,
        "Dragon" => 12, "Extérieur" => 10, "Fée" => 6, "Humanoïde" => 8,
        "Humanoïde monstrueux" => 10, "Mort-vivant" => 8, "Plante" => 8,
        "Vase" => 8, "Vermine" => 8];
$BonusCA=["Infime"=>8, "Minuscule"=>4,"Très Petit"=>2,"Petit"=>1,"Moyen"=>0,"Grand"=>1,"Très Grand"=>2, "Gigantesque"=>4,"Colossal"=>8]
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

<?php echo $Type[$fiche_actuelle["Type"]]," de taille ", $taille[$fiche_actuelle["Taille"]],", ", $alignement[$fiche_actuelle["Alignement"]]?><br>
<?php echo '<div id="subsection">Init</div> ',$fiche_actuelle["Bonus_Initiative"]+floor($fiche_actuelle["Dexterite"]/2)-5, " ; " ; 
if (! empty($fiche_actuelle["Sens"])){
	echo "Sens ",$fiche_actuelle["Sens"];
	}
?>
<?php  if (! empty($fiche_actuelle["Aura"])){
echo "<br>";
echo '<div id="subsection"> Aura </div> : ',$fiche_actuelle["Aura"]; 
}





?><br>

<section>Defense</section>

 <?php $CA=10+$fiche_actuelle["Armure"] ?> 
 <?php echo '<div id="subsection">CA : </div>', $CA," (contact : ", $CA-$fiche_actuelle["Contact"], ', pris au dépourvu ', $CA-$fiche_actuelle["Esquive"]-max(floor($fiche_actuelle["Dexterite"]/2)-5,0),')<br>'  ?>
<?php  echo '<div id="subsection"> PV </div>: ', floor($fiche_actuelle["DV"]*(($DV_valeur[$Type[$fiche_actuelle["Type"]]]+1)/2+floor($fiche_actuelle["Constitution"]/2)-5))+$fiche_actuelle["Rang_Mythique"]*$DV_valeur[$Type[$fiche_actuelle["Type"]]] ?><br>
<?php echo '<div id="subsection">Ref</div> ',$fiche_actuelle["Bonus_Reflexe"]+floor($fiche_actuelle["Dexterite"]/2)-5 ,' <div id="subsection">Vig</div> ',$fiche_actuelle["Bonus_Vigueur"]+floor($fiche_actuelle["Constitution"]/2)-5,' <div id="subsection">Vol</div> ', $fiche_actuelle["Bonus_Volonte"]+floor($fiche_actuelle["Sagesse"]/2)-5?><br>
<?php if($fiche_actuelle["RD_valeur"]!=0){
	echo '<div id="subsection">RD</div> ',$fiche_actuelle["RD_valeur"],'/',$fiche_actuelle["RD"], '; ';
	}; 
if(!empty($fiche_actuelle["Immunite"])){echo '<div id="subsection">Immunité</div> ',$fiche_actuelle["Immunite"], '; ';} ; 
if(!empty($fiche_actuelle["Resistance"])){echo '<div id="subsection">Résistance</div> ',$fiche_actuelle["Resistance"], '; ';}; 
if($fiche_actuelle["RM"]!=0){echo '<div id="subsection">RM</div> ',$fiche_actuelle["RM"],' <br>' ;} ;
?>

<section>Attaque</section>
<?php echo '<div id="subsection">VD</div> ',$fiche_actuelle["VD"],' m; vol  ',1.5*$fiche_actuelle["distance_vol"] ,'m (',$fiche_actuelle["distance_vol"], ' c) (',$fiche_actuelle["qualite_vol"],') <br>'?>
<?php echo '<div id="subsection">Corps à corps</div> : ',$fiche_actuelle["cac"], '<br>';?>
<?php echo '<div id="subsection">Espace</div> : ', 1.5*$fiche_actuelle["Espace"] ,'m (',$fiche_actuelle["Espace"], ' c); <div id="subsection">Allonge</div> : ', 1.5*$fiche_actuelle["Allonge"] ,'m (',$fiche_actuelle["Allonge"], ' c)<br>' ?>
<?php echo '<div id="subsection">Attaques spéciales</div> : ',$fiche_actuelle["Attaques_spe"],'<br>' ?>

<?php
if (!(empty($fiche_actuelle_pouv["Constant"]) and empty($fiche_actuelle_pouv["A_volonte"]) and empty($fiche_actuelle_pouv["3_jour"]) and empty($fiche_actuelle_pouv["1_jour"]) and empty($fiche_actuelle_pouv["1_mois"]) and empty($fiche_actuelle_pouv["1_an"]))){
echo '<div id="subsection">Pouvoirs magiques (NLS ',$fiche_actuelle_pouv["NLS"],' ; concentration +',$fiche_actuelle_pouv["Concentration_pv"],')</div> :<br>';

if (!(empty($fiche_actuelle_pouv["Constant"])))
{
echo "Constant : ",$fiche_actuelle_pouv["Constant"],"<br>";
}
if (!(empty($fiche_actuelle_pouv["A_volonte"])))
{
echo "A volonté : ",$fiche_actuelle_pouv["A_volonte"],"<br>";
}
if (!(empty($fiche_actuelle_pouv["3_jour"])))
{
echo "3/jour : ",$fiche_actuelle_pouv["3_jour"],"<br>";
}
if (!(empty($fiche_actuelle_pouv["1_jour"])))
{
echo "1/jour : ",$fiche_actuelle_pouv["1_jour"],"<br>";
}
if (!(empty($fiche_actuelle_pouv["1_mois"])))
{
echo "1/mois : ",$fiche_actuelle_pouv["1_mois"],"<br>";
}
if (!(empty($fiche_actuelle_pouv["1_an"])))
{
echo "1/an : ",$fiche_actuelle_pouv["1_an"],"<br>";
}

}


?>

<?php 
if($fiche_actuelle_sorts["NLS_sorts"] !=0){

echo '<div id="subsection">Sorts de ',$fiche_actuelle_sorts["Classe"] ,' préparés (NLS ',$fiche_actuelle_sorts["NLS_sorts"],' ; concentration +',$fiche_actuelle_sorts["Concentration"],')</div> :<br>';
if (!empty($fiche_actuelle_sorts["Niveau_0"])){
	echo "Niveau 0 : ", $fiche_actuelle_sorts["Niveau_0"],'<br>';	
}
if (!empty($fiche_actuelle_sorts["Niveau_1"])){
	echo "Niveau 1 : ", $fiche_actuelle_sorts["Niveau_1"],'<br>';	
}
if (!empty($fiche_actuelle_sorts["Niveau_2"])){
	echo "Niveau 2 : ", $fiche_actuelle_sorts["Niveau_2"],'<br>';	
}
if (!empty($fiche_actuelle_sorts["Niveau_3"])){
	echo "Niveau 3 : ", $fiche_actuelle_sorts["Niveau_3"],'<br>';	
}
if (!empty($fiche_actuelle_sorts["Niveau_4"])){
	echo "Niveau 4 : ", $fiche_actuelle_sorts["Niveau_4"],'<br>';	
}
if (!empty($fiche_actuelle_sorts["Niveau_5"])){
	echo "Niveau 5 : ", $fiche_actuelle_sorts["Niveau_5"],'<br>';	
}
if (!empty($fiche_actuelle_sorts["Niveau_6"])){
	echo "Niveau 6 : ", $fiche_actuelle_sorts["Niveau_6"],'<br>';	
}
if (!empty($fiche_actuelle_sorts["Niveau_7"])){
	echo "Niveau 7 : ", $fiche_actuelle_sorts["Niveau_7"],'<br>';	
}
if (!empty($fiche_actuelle_sorts["Niveau_8"])){
	echo "Niveau 8 : ", $fiche_actuelle_sorts["Niveau_8"],'<br>';	
}
if (!empty($fiche_actuelle_sorts["Niveau_9"])){
	echo "Niveau 9 : ", $fiche_actuelle_sorts["Niveau_9"],'<br>';	
}
}
?>

<section>Caractéristiques</section>
<?php  echo '<div id="subsection"> For </div>: ', $fiche_actuelle["Force"] ?> <?php  echo '<div id="subsection"> Dex </div>: ', $fiche_actuelle["Dexterite"] ?> <?php  echo '<div id="subsection"> Cons </div>: ', $fiche_actuelle["Constitution"] ?> <?php  echo '<div id="subsection"> Int </div>: ', $fiche_actuelle["Intelligence"] ?> <?php  echo '<div id="subsection"> Sag </div>: ', $fiche_actuelle["Sagesse"] ?><?php  echo '<div id="subsection"> Cha </div>: ', $fiche_actuelle["Charisme"] ?><br>
<?php echo '<div id="subsection">BBA</div> ',$fiche_actuelle["BBA"] ,' <div id="subsection">BMO</div> ',$fiche_actuelle["BBA"]+floor($fiche_actuelle["Force"]/2)-5-$BonusCA[$fiche_actuelle["Taille"]] ,' <div id="subsection">DMD</div> ',10+$fiche_actuelle["BBA"]+floor($fiche_actuelle["Force"]/2)-5+floor($fiche_actuelle["Dexterite"]/2)-5-$BonusCA[$fiche_actuelle["Taille"]] ?><br>
<div id="subsection">Compétences</div>
<?php 

$i=0;
foreach ($fiche_actuelle_comp as $nbcomp => $score){
	if ($score != 0 and gettype($nbcomp)=="integer"){

		if ($comp[$nbcomp]=="Artisanat" or $comp[$nbcomp]=="Profession" or $comp[$nbcomp]=="Représentation")
		{
		if ($i==1){
			echo ", ";	
		}
		$i=1;
			echo $comp[$nbcomp],' (',$fiche_actuelle_comp[$nbcomp-1],') +', $score;
		}
		elseif (!($comp[$nbcomp]=="artisanat type I" or $comp[$nbcomp]=="artisanat type II" or $comp[$nbcomp]=="profession type I" or $comp[$nbcomp]=="profession type II"  or $comp[$nbcomp]=="representation type I" or $comp[$nbcomp]=="representation type II" or $comp[$nbcomp]=="representation type III" or $comp[$nbcomp]=="representation type IV")) {
			if ($i==1){
			echo ", ";	
		}
		$i=1;
			echo $comp[$nbcomp],' +',$score;
		}
	}
}

echo "<br>";


echo '<div id="subsection">Dons</div> : ',$fiche_actuelle["Dons"] ,'<br>';
echo '<div id="subsection">Langues</div> : ',$fiche_actuelle["Langues"] ,'<br>';

?>

<div id="subsection">Particularités </div>
<?php echo $fiche_actuelle["Particularites"]?>
<section>Ecologie</section>
<div id="subsection">Environnement </div>
<?php echo $fiche_actuelle["Environnement"]?><br>
<div id="subsection">Organisation sociale</div>
<?php echo $fiche_actuelle["Organisation_sociale"]?><br>

<div id="subsection">Trésor</div>
<?php echo $fiche_actuelle["Tresor"]?>

<section>Pouvoirs spéciaux</section>

<?php echo $fiche_actuelle["Pouvoirs_speciaux"]?>

<section>Résumé</section>
<?php echo $fiche_actuelle["Resume"]?>



</html>
