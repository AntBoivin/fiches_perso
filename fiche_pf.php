<?php

$postData=$_POST;
print_r($postData);
if (!empty($_GET)){
$id=$_GET["id"];
}
else{$id=NULL;}



$statistiques = [
    1 => ["pv" => 15, "CA" => 12, "Attaque forte" => 2, "Attaque faible" => 1, "Dégâts élevés" => 7, "Dégâts faibles" => 5, "DD principal" => 12, "DD secondaire" => 9, "JdS fort" => 4, "JdS faible" => 1],
    2 => ["pv" => 20, "CA" => 14, "Attaque forte" => 4, "Attaque faible" => 3, "Dégâts élevés" => 10, "Dégâts faibles" => 7, "DD principal" => 13, "DD secondaire" => 9, "JdS fort" => 5, "JdS faible" => 1],
    3 => ["pv" => 30, "CA" => 15, "Attaque forte" => 6, "Attaque faible" => 4, "Dégâts élevés" => 13, "Dégâts faibles" => 9, "DD principal" => 14, "DD secondaire" => 10, "JdS fort" => 6, "JdS faible" => 2],
    4 => ["pv" => 40, "CA" => 17, "Attaque forte" => 8, "Attaque faible" => 6, "Dégâts élevés" => 16, "Dégâts faibles" => 12, "DD principal" => 15, "DD secondaire" => 10, "JdS fort" => 7, "JdS faible" => 3],
    5 => ["pv" => 55, "CA" => 18, "Attaque forte" => 10, "Attaque faible" => 7, "Dégâts élevés" => 20, "Dégâts faibles" => 15, "DD principal" => 15, "DD secondaire" => 11, "JdS fort" => 8, "JdS faible" => 4],
    6 => ["pv" => 70, "CA" => 19, "Attaque forte" => 12, "Attaque faible" => 8, "Dégâts élevés" => 25, "Dégâts faibles" => 18, "DD principal" => 16, "DD secondaire" => 11, "JdS fort" => 9, "JdS faible" => 5],
    7 => ["pv" => 85, "CA" => 20, "Attaque forte" => 13, "Attaque faible" => 10, "Dégâts élevés" => 30, "Dégâts faibles" => 22, "DD principal" => 17, "DD secondaire" => 12, "JdS fort" => 10, "JdS faible" => 6],
    8 => ["pv" => 100, "CA" => 21, "Attaque forte" => 15, "Attaque faible" => 11, "Dégâts élevés" => 35, "Dégâts faibles" => 26, "DD principal" => 18, "DD secondaire" => 12, "JdS fort" => 11, "JdS faible" => 7],
    9 => ["pv" => 115, "CA" => 23, "Attaque forte" => 17, "Attaque faible" => 12, "Dégâts élevés" => 40, "Dégâts faibles" => 30, "DD principal" => 18, "DD secondaire" => 13, "JdS fort" => 12, "JdS faible" => 8],
    10 => ["pv" => 130, "CA" => 24, "Attaque forte" => 18, "Attaque faible" => 13, "Dégâts élevés" => 45, "Dégâts faibles" => 33, "DD principal" => 19, "DD secondaire" => 13, "JdS fort" => 13, "JdS faible" => 9],
    11 => ["pv" => 145, "CA" => 25, "Attaque forte" => 19, "Attaque faible" => 14, "Dégâts élevés" => 50, "Dégâts faibles" => 37, "DD principal" => 20, "DD secondaire" => 14, "JdS fort" => 14, "JdS faible" => 10],
    12 => ["pv" => 160, "CA" => 27, "Attaque forte" => 21, "Attaque faible" => 15, "Dégâts élevés" => 55, "Dégâts faibles" => 41, "DD principal" => 21, "DD secondaire" => 15, "JdS fort" => 15, "JdS faible" => 11],
    13 => ["pv" => 180, "CA" => 28, "Attaque forte" => 22, "Attaque faible" => 16, "Dégâts élevés" => 60, "Dégâts faibles" => 45, "DD principal" => 21, "DD secondaire" => 15, "JdS fort" => 16, "JdS faible" => 12],
    14 => ["pv" => 200, "CA" => 29, "Attaque forte" => 23, "Attaque faible" => 17, "Dégâts élevés" => 65, "Dégâts faibles" => 48, "DD principal" => 22, "DD secondaire" => 16, "JdS fort" => 17, "JdS faible" => 12],
    15 => ["pv" => 220, "CA" => 30, "Attaque forte" => 24, "Attaque faible" => 18, "Dégâts élevés" => 70, "Dégâts faibles" => 52, "DD principal" => 23, "DD secondaire" => 16, "JdS fort" => 18, "JdS faible" => 13],
    16 => ["pv" => 240, "CA" => 31, "Attaque forte" => 26, "Attaque faible" => 19, "Dégâts élevés" => 80, "Dégâts faibles" => 60, "DD principal" => 24, "DD secondaire" => 17, "JdS fort" => 19, "JdS faible" => 14],
    17 => ["pv" => 270, "CA" => 32, "Attaque forte" => 27, "Attaque faible" => 20, "Dégâts élevés" => 90, "Dégâts faibles" => 67, "DD principal" => 24, "DD secondaire" => 18, "JdS fort" => 20, "JdS faible" => 15],
    18 => ["pv" => 300, "CA" => 33, "Attaque forte" => 28, "Attaque faible" => 21, "Dégâts élevés" => 100, "Dégâts faibles" => 75, "DD principal" => 25, "DD secondaire" => 18, "JdS fort" => 20, "JdS faible" => 16],
    19 => ["pv" => 330, "CA" => 34, "Attaque forte" => 29, "Attaque faible" => 22, "Dégâts élevés" => 110, "Dégâts faibles" => 82, "DD principal" => 26, "DD secondaire" => 19, "JdS fort" => 21, "JdS faible" => 16],
    20 => ["pv" => 370, "CA" => 36, "Attaque forte" => 30, "Attaque faible" => 23, "Dégâts élevés" => 120, "Dégâts faibles" => 90, "DD principal" => 27, "DD secondaire" => 20, "JdS fort" => 22, "JdS faible" => 17]
];

$Type=array("Aberration", "Animal" , "Créature artificielle", "Créature magique",
        "Dragon", "Extérieur", "Fée", "Humanoïde",
        "Humanoïde monstrueux", "Mort-vivant", "Plante",
        "Vase", "Vermine");

$tableau_type_DV = [
    1 => [
        "Aberration" => 2, "Animal" => 2, "Créature artificielle" => 2, "Créature magique" => 2,
        "Dragon" => 2, "Extérieur" => 2, "Fée" => 3, "Humanoïde" => 2,
        "Humanoïde monstrueux" => 2, "Mort-vivant" => 2, "Plante" => 2,
        "Vase" => 2, "Vermine" => 2
    ],
    2 => [
        "Aberration" => 3, "Animal" => 3, "Créature artificielle" => 3, "Créature magique" => 3,
        "Dragon" => 3, "Extérieur" => 3, "Fée" => 4, "Humanoïde" => 3,
        "Humanoïde monstrueux" => 3, "Mort-vivant" => 3, "Plante" => 3,
        "Vase" => 3, "Vermine" => 3
    ],
    3 => [
        "Aberration" => 4, "Animal" => 4, "Créature artificielle" => 4, "Créature magique" => 4,
        "Dragon" => 4, "Extérieur" => 4, "Fée" => 5, "Humanoïde" => 4,
        "Humanoïde monstrueux" => 4, "Mort-vivant" => 4, "Plante" => 4,
        "Vase" => 4, "Vermine" => 4
    ],
    4 => [
        "Aberration" => 5, "Animal" => 5, "Créature artificielle" => 5, "Créature magique" => 5,
        "Dragon" => 5, "Extérieur" => 5, "Fée" => 6, "Humanoïde" => 5,
        "Humanoïde monstrueux" => 5, "Mort-vivant" => 5, "Plante" => 5,
        "Vase" => 5, "Vermine" => 5
    ],
    5 => [
        "Aberration" => 7, "Animal" => 7, "Créature artificielle" => 6, "Créature magique" => 6,
        "Dragon" => 6, "Extérieur" => 6, "Fée" => 8, "Humanoïde" => 7,
        "Humanoïde monstrueux" => 6, "Mort-vivant" => 7, "Plante" => 7,
        "Vase" => 7, "Vermine" => 7
    ],
    6 => [
        "Aberration" => 9, "Animal" => 9, "Créature artificielle" => 8, "Créature magique" => 8,
        "Dragon" => 7, "Extérieur" => 8, "Fée" => 10, "Humanoïde" => 9,
        "Humanoïde monstrueux" => 8, "Mort-vivant" => 9, "Plante" => 9,
        "Vase" => 9, "Vermine" => 9
    ],
    7 => [
        "Aberration" => 10, "Animal" => 10, "Créature artificielle" => 9, "Créature magique" => 9,
        "Dragon" => 8, "Extérieur" => 9, "Fée" => 12, "Humanoïde" => 10,
        "Humanoïde monstrueux" => 9, "Mort-vivant" => 10, "Plante" => 10,
        "Vase" => 10, "Vermine" => 10
    ],
    8 => [
        "Aberration" => 12, "Animal" => 12, "Créature artificielle" => 10, "Créature magique" => 10,
        "Dragon" => 9, "Extérieur" => 10, "Fée" => 13, "Humanoïde" => 12,
        "Humanoïde monstrueux" => 10, "Mort-vivant" => 12, "Plante" => 12,
        "Vase" => 12, "Vermine" => 12
    ],
    9 => [
        "Aberration" => 14, "Animal" => 14, "Créature artificielle" => 12, "Créature magique" => 12,
        "Dragon" => 11, "Extérieur" => 12, "Fée" => 15, "Humanoïde" => 14,
        "Humanoïde monstrueux" => 12, "Mort-vivant" => 14, "Plante" => 14,
        "Vase" => 14, "Vermine" => 14
    ],
    10 => [
        "Aberration" => 15, "Animal" => 15, "Créature artificielle" => 13, "Créature magique" => 13,
        "Dragon" => 12, "Extérieur" => 13, "Fée" => 17, "Humanoïde" => 15,
        "Humanoïde monstrueux" => 13, "Mort-vivant" => 15, "Plante" => 15,
        "Vase" => 15, "Vermine" => 15
    ],
    11 => [
        "Aberration" => 16, "Animal" => 16, "Créature artificielle" => 14, "Créature magique" => 14,
        "Dragon" => 13, "Extérieur" => 14, "Fée" => 18, "Humanoïde" => 16,
        "Humanoïde monstrueux" => 14, "Mort-vivant" => 16, "Plante" => 16,
        "Vase" => 16, "Vermine" => 16
    ],
    12 => [
        "Aberration" => 17, "Animal" => 17, "Créature artificielle" => 16, "Créature magique" => 16,
        "Dragon" => 14, "Extérieur" => 16, "Fée" => 20, "Humanoïde" => 17,
        "Humanoïde monstrueux" => 16, "Mort-vivant" => 17, "Plante" => 17,
        "Vase" => 17, "Vermine" => 17
    ],
    13 => [
        "Aberration" => 19, "Animal" => 19, "Créature artificielle" => 18, "Créature magique" => 18,
        "Dragon" => 16, "Extérieur" => 18, "Fée" => 22, "Humanoïde" => 19,
        "Humanoïde monstrueux" => 18, "Mort-vivant" => 19, "Plante" => 19,
        "Vase" => 19, "Vermine" => 19
    ],
    14 => [
        "Aberration" => 20, "Animal" => 20, "Créature artificielle" => 19, "Créature magique" => 19,
        "Dragon" => 17, "Extérieur" => 19, "Fée" => 23, "Humanoïde" => 20,
        "Humanoïde monstrueux" => 19, "Mort-vivant" => 20, "Plante" => 20,
        "Vase" => 20, "Vermine" => 20
    ],
    15 => [
        "Aberration" => 22, "Animal" => 22, "Créature artificielle" => 20, "Créature magique" => 20,
        "Dragon" => 18, "Extérieur" => 20, "Fée" => 25, "Humanoïde" => 22,
        "Humanoïde monstrueux" => 20, "Mort-vivant" => 22, "Plante" => 22,
        "Vase" => 22, "Vermine" => 22
    ],
    16 => [
        "Aberration" => 24, "Animal" => 24, "Créature artificielle" => 21, "Créature magique" => 21,
        "Dragon" => 19, "Extérieur" => 21, "Fée" => 26, "Humanoïde" => 24,
        "Humanoïde monstrueux" => 21, "Mort-vivant" => 24, "Plante" => 24,
        "Vase" => 24, "Vermine" => 24
    ],
    17 => [
        "Aberration" => 26, "Animal" => 26, "Créature artificielle" => 23, "Créature magique" => 23,
        "Dragon" => 21, "Extérieur" => 23, "Fée" => 28, "Humanoïde" => 26,
        "Humanoïde monstrueux" => 23, "Mort-vivant" => 26, "Plante" => 26,
        "Vase" => 26, "Vermine" => 26
    ],
    18 => [
        "Aberration" => 28, "Animal" => 28, "Créature artificielle" => 25, "Créature magique" => 25,
        "Dragon" => 23, "Extérieur" => 25, "Fée" => 31, "Humanoïde" => 28,
        "Humanoïde monstrueux" => 25, "Mort-vivant" => 28, "Plante" => 28,
        "Vase" => 28, "Vermine" => 28
    ],
    19 => [
        "Aberration" => 30, "Animal" => 30, "Créature artificielle" => 28, "Créature magique" => 28,
        "Dragon" => 25, "Extérieur" => 28, "Fée" => 33, "Humanoïde" => 30,
        "Humanoïde monstrueux" => 28, "Mort-vivant" => 30, "Plante" => 30,
        "Vase" => 30, "Vermine" => 30
    ],
    20 => [
        "Aberration" => 34, "Animal" => 34, "Créature artificielle" => 31, "Créature magique" => 31,
        "Dragon" => 29, "Extérieur" => 31, "Fée" => 37, "Humanoïde" => 34,
        "Humanoïde monstrueux" => 31, "Mort-vivant" => 34, "Plante" => 34,
        "Vase" => 34, "Vermine" => 32
    ],
    "DV" => [
        "Aberration" => 8, "Animal" => 8, "Créature artificielle" => 10, "Créature magique" => 10,
        "Dragon" => 12, "Extérieur" => 10, "Fée" => 6, "Humanoïde" => 8,
        "Humanoïde monstrueux" => 10, "Mort-vivant" => 8, "Plante" => 8,
        "Vase" => 8, "Vermine" => 8
    ],
    "BBA" => [
        "Aberration" => 0.75, "Animal" => 0.75, "Créature artificielle" => 1.00, "Créature magique" => 1.00,
        "Dragon" => 1.00, "Extérieur" => 1.00, "Fée" => 0.50, "Humanoïde" => 0.75,
        "Humanoïde monstrueux" => 1.00, "Mort-vivant" => 0.75, "Plante" => 0.75,
        "Vase" => 0.75, "Vermine" => 0.75
    ]
];

$alignement=array("Loyal Bon", "Loyal Neutre", "Loyal Mauvais", "Neutre Bon", "Neutre", "Neutre Mauvais", "Chaotique Bon", "Chaotique Neutre", "Chaotique Mauvais");
$BonusCA=["Infime"=>8, "Minuscule"=>4,"Très Petit"=>2,"Petit"=>1,"Moyen"=>0,"Grand"=>1,"Très Grand"=>2, "Gigantesque"=>4,"Colossal"=>8]
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
	
	
	<?php

try
{
	$mysqlClient = new PDO('mysql:host=127.0.0.1;port=3306;dbname=fiche','root', '');
	
	if (empty($_GET)){
	$sqlQueryCarac = 'INSERT INTO `carac` (`id`, `Nom`, `FP`, `Rang_Mythique`, `Type`, `Taille`,`DV`, `Force`, `Dexterite`, `Constitution`, `Intelligence`, `Sagesse`, `Charisme`, `Armure`, `Alignement`,`Particularites`,`Resume`)  
	VALUES (NULL, :Nom, :FP, :Rang_Mythique, :Type, :Taille, :DV, :Force, :Dexterite, :Constitution, :Intelligence, :Sagesse, :Charisme, :Armure, :Alignement, :Particularites, :Resume)';
	$sqlQueryComp = 'INSERT INTO `competences` (`id`, `acrobaties`, `art_de_la_magie`, `artisanat_type_I`, `artisanat_I`, `artisanat_type_II`, `artisanat_II`,`bluff`,`conn_donj`, `conn_folk`, `conn_geo`, `conn_hist`, `conn_ing`, `conn_myst`, `conn_nat`, `conn_nob`, `conn_plans`,`conn_rel`,`deguisement`,`diplomatie`,`discretion`,`dressage`,`equitation`,`escalade`,`escamotage`,`estimation`,`evasion`,`intimidation`,`linguistique`,`natation`,`perception`,`premiers_secours`,`profession_type_I`,`profession_I`,`profession_type_II`,`profession_II`,`psychologie`,`representation_type_I`,`representation_I`, `representation_type_II`,`representation_II`,`representation_type_III`,`representation_III`,`representation_type_IV`,`representation_IV`,`sabotage`,`survie`,`utilisation_d_objets_magiques`,`vol`)  
	VALUES (NULL, :acrobaties, :art_de_la_magie, :artisanat_type_I, :artisanat_I, :artisanat_type_II, :artisanat_II, :bluff ,:conn_donj, :conn_folk, :conn_geo, :conn_hist, :conn_ing, :conn_myst, :conn_nat, :conn_nob, :conn_plans, :conn_rel, :deguisement, :diplomatie , :discretion , :dressage ,:equitation, :escalade, :escamotage, :estimation,:evasion, :intimidation, :linguistique, :natation, :perception, :premiers_secours, :profession_type_I, :profession_I, :profession_type_II, :profession_II, :psychologie, :representation_type_I, :representation_I, :representation_type_II, :representation_II, :representation_type_III, :representation_III, :representation_type_IV, :representation_IV, :sabotage, :survie, :utilisation_d_objets_magiques, :vol)';
	}
	else
	{
	$sqlQueryCarac = 'UPDATE `carac` SET  `Nom` = :Nom, `FP` = :FP, `Rang_Mythique` = :Rang_Mythique, `Type` = :Type, `Taille` = :Taille,`DV`= :DV,`Force` = :Force, `Dexterite` = :Dexterite, `Constitution` = :Constitution,`Intelligence` = :Intelligence, `Sagesse` = :Sagesse, `Charisme` = :Charisme, `Armure` = :Armure, `Alignement` = :Alignement, `Particularites` = :Particularites, `Resume` = :Resume WHERE `carac`.`id` = :id';
	$sqlQueryComp = 'UPDATE `competences` SET `acrobaties`= :acrobaties, `art_de_la_magie`= :art_de_la_magie, `artisanat_type_I` = :artisanat_type_I, `artisanat_I`= :artisanat_I, `artisanat_type_II`= :artisanat_type_II, `artisanat_II`= :artisanat_II,`bluff`= :bluff,`conn_donj`= :conn_donj, `conn_folk`= :conn_folk, `conn_geo`= :conn_geo, `conn_hist` = :conn_hist, `conn_ing`= :conn_ing, `conn_myst`= :conn_myst, `conn_nat`= :conn_nat, `conn_nob`= :conn_nob, `conn_plans`= :conn_plans,`conn_rel`= :conn_rel,`deguisement`= :deguisement,`diplomatie`= :diplomatie,`discretion`= :discretion,`dressage`= :dressage,`equitation`= :equitation,`escalade`= :escalade,`escamotage`= :escamotage,`estimation`= :estimation,`evasion`= :evasion,`intimidation`= :intimidation,`linguistique`= :linguistique,`natation`= :natation,`perception`= :perception,`premiers_secours`= :premiers_secours,`profession_type_I`= :profession_type_I,`profession_I`= :profession_I,`profession_type_II`= :profession_type_II,`profession_II`= :profession_II,`psychologie`= :psychologie,`representation_type_I`= :representation_type_I,`representation_I`= :representation_I, `representation_type_II`= :representation_type_II,`representation_II`= :representation_II,`representation_type_III`= :representation_type_III,`representation_III`= :representation_III,`representation_type_IV`= :representation_type_IV,`representation_IV`= :representation_IV,`sabotage`= :sabotage,`survie`= :survie,`utilisation_d_objets_magiques`= :utilisation_d_objets_magiques,`vol`= :vol WHERE `competences`.`id` = :id';
	}
	
	$insertCarac = $mysqlClient->prepare($sqlQueryCarac);
	$insertComp = $mysqlClient->prepare($sqlQueryComp);

	if (empty($postData["DV"])){
	$DV=$tableau_type_DV[strval($postData["facteur_de_puissance"])][$Type[$postData["type"]]];
	}
	else{
	$DV=$postData["DV"];
	}

	$insertCarac->execute([
    'Nom' => $postData["nom"],
    'FP' => $postData["facteur_de_puissance"],
    'Rang_Mythique' => $postData["rang_mythique"],
    'Type' => $postData["type"],
	'Taille' => $postData["taille"],
	'DV' => $DV,
 	'Force' => $postData["force"],
	'Dexterite' => $postData["dexterite"],
	'Constitution' => $postData["constitution"],
	'Intelligence' => $postData["intelligence"],
	'Sagesse' => $postData["sagesse"],
	'Charisme' => $postData["charisme"],
	'Armure' => $postData["Armure"],
	'Alignement' => $postData["alignement"], 
	'Particularites' => $postData["particularites"],
	'Resume' => $postData["resume"],
	'id' => $id,
	]);
	echo "42";
	$insertComp->execute([
    'acrobaties'=> $postData["acrobaties"], 
	'art_de_la_magie'=> $postData["art_de_la_magie"], 
	'artisanat_type_I'=> $postData["artisanat_type_I"], 
	'artisanat_I'=> $postData["artisanat_I"], 
	'artisanat_type_II'=> $postData["artisanat_type_II"],
	'artisanat_II'=> $postData["artisanat_II"],
	'bluff'=> $postData["bluff"],
	'conn_donj'=> $postData["conn_donj"],
	'conn_folk'=> $postData["conn_folk"], 
	'conn_geo'=> $postData["conn_geo"],
	'conn_hist'=> $postData["conn_hist"],
	'conn_ing'=> $postData["conn_ing"], 
	'conn_myst'=> $postData["conn_myst"],
	'conn_nat'=> $postData["conn_nat"],
	'conn_nob'=> $postData["conn_nob"],
	'conn_plans'=> $postData["conn_plans"],
	'conn_rel'=> $postData["conn_rel"],
	'deguisement'=> $postData["deguisement"],
	'diplomatie'=> $postData["diplomatie"],
	'discretion'=> $postData["discretion"],
	'dressage'=> $postData["dressage"],
	'equitation'=> $postData["equitation"],
	'escalade'=> $postData["escalade"],
	'escamotage'=> $postData["escamotage"],
	'estimation'=> $postData["estimation"],
	'evasion'=> $postData["evasion"],
	'intimidation'=> $postData["intimidation"],
	'linguistique'=> $postData["linguistique"],
	'natation'=> $postData["natation"],
	'perception'=> $postData["perception"],
	'premiers_secours'=> $postData["premiers_secours"],
	'profession_type_I'=> $postData["profession_type_I"],
	'profession_I'=> $postData["profession_I"],
	'profession_type_II'=> $postData["profession_type_II"],
	'profession_II'=> $postData["profession_II"],
	'psychologie'=> $postData["psychologie"],
	'representation_type_I'=> $postData["representation_type_I"],
	'representation_I'=> $postData["representation_I"],
	'representation_type_II'=> $postData["representation_type_II"],
	'representation_II'=> $postData["representation_II"],
	'representation_type_III'=> $postData["representation_type_III"],
	'representation_III'=> $postData["representation_III"],
	'representation_type_IV'=> $postData["representation_type_IV"],
	'representation_IV'=> $postData["representation_IV"],
	'sabotage'=> $postData["sabotage"],
	'survie'=> $postData["survie"],
	'utilisation_d_objets_magiques'=> $postData["utilisation_d_objets_magiques"],
	'vol' => $postData["vol"],
	'id'=>$id,
	]);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>
	
	
	<p>
		Nom : <?php echo $postData["nom"] ?><br>
		Alignement : <?php echo $alignement[$postData["alignement"]]  ?><br>
		FP : <?php echo $postData["facteur_de_puissance"] ?><br>
		Rang Mythique : <?php echo $postData["rang_mythique"] ?><br>
		Type : <?php echo $Type[$postData["type"]] ?><br>
		Taille : <?php echo $postData["taille"] ?><br> 
		<?php
		$nombreDV=$tableau_type_DV[strval($postData["facteur_de_puissance"])][$Type[$postData["type"]]]
		?>
		DV : <?php echo $nombreDV ?><br>
		PV : <?php echo floor($nombreDV*($tableau_type_DV["DV"][$Type[$postData["type"]]]+1)/2)+$postData["rang_mythique"]*$tableau_type_DV["DV"][$Type[$postData["type"]]]+(floor($postData["constitution"]/2)-5)*$nombreDV ?><br>
		BBA : <?php echo floor($nombreDV*$tableau_type_DV["BBA"][$Type[$postData["type"]]]) ?> <br>
		
		Force : <?php echo $postData["force"] .' ('. floor($postData["force"]/2)-5 .')' ?><br> 
		Dextérité : <?php echo $postData["dexterite"] .' ('. floor($postData["dexterite"]/2)-5 .')' ?><br> 
		Constitution : <?php echo $postData["constitution"] .' ('. floor($postData["constitution"]/2)-5 .')' ?><br> 
		Intelligence : <?php echo $postData["intelligence"] .' ('. floor($postData["intelligence"]/2)-5 .')' ?><br> 
		Sagesse : <?php echo $postData["sagesse"] .' ('. floor($postData["sagesse"]/2)-5 .')' ?><br> 
		Charisme : <?php echo $postData["charisme"] .' ('. floor($postData["charisme"]/2)-5 .')' ?><br> 

		CA : <?php echo 10+$postData["Armure"]+$BonusCA[$postData["taille"]] ?><br>
		Particularités : <?php echo $postData["particularites"] ?><br>
		Résumé : <?php echo $postData["resume"] ?><br>
		<!-- <label for="Armure">Armure : <input type="number" name="Armure" id="Armure"><br> -->
		<p id="comp">
<?php echo 'Acrobaties :', $postData["acrobaties"],'<br>'?>
<?php echo 'Art de la magie :' ,$postData["art_de_la_magie"],'<br>'?>
<?php echo 'Art (',$postData["artisanat_type_I"],'): ',$postData["artisanat_I"],'<br>'?>
<?php echo 'Art (',$postData["artisanat_type_II"],') : ',$postData["artisanat_II"],'<br>'?>

<?php echo 'Bluff : ',$postData["bluff"],'<br>'?>
<?php echo 'Connaissances (exploration donjons) : ',$postData["conn_donj"],'<br>'?> 
<?php echo 'Connaissances (folklore local) : ',$postData["conn_folk"],'<br>'?>
<?php echo 'Connaissances (géographie) : ',$postData["conn_geo"],'<br>'?>
<?php echo 'Connaissances (histoire) : ',$postData["conn_hist"],'<br>'?>
<?php echo 'Connaissances (ingénierie) : ',$postData["conn_ing"],'<br>'?>
<?php echo 'Connaissances (mystère) : ',$postData["conn_myst"],'<br>'?>
<?php echo 'Connaissances (nature) : ',$postData["conn_nat"],'<br>'?>
<?php echo 'Connaissances (noblesse) : ',$postData["conn_nob"],'<br>'?>
<?php echo 'Connaissances (plans) : ',$postData["conn_plans"],'<br>'?>
<?php echo 'Connaissances (religions) : ',$postData["conn_rel"],'<br>'?>
<?php echo 'Déguisement : ',$postData["deguisement"],'<br>'?>
<?php echo 'Diplomatie : ',$postData["diplomatie"],'<br>'?>
<?php echo 'Discrétion : ',$postData["discretion"],'<br>'?>
<?php echo 'Dressage : ',$postData["dressage"],'<br>'?>
<?php echo 'Équitation : ',$postData["equitation"],'<br>'?>
<?php echo 'Escalade : ',$postData["escalade"],'<br>'?>
<?php echo 'Escamotage : ',$postData["escamotage"],'<br>'?>
<?php echo 'Estimation : ',$postData["estimation"],'<br>'?>
<?php echo 'Évasion : ',$postData["evasion"],'<br>'?>
<?php echo 'Intimidation : ',$postData["intimidation"],'<br>'?>
<?php echo 'Linguistique : ',$postData["linguistique"],'<br>'?>
<?php echo 'Natation : ',$postData["natation"],'<br>'?>
<?php echo 'Perception : ',$postData["perception"],'<br>'?>
<?php echo 'Premiers secours : ',$postData["premiers_secours"],'<br>'?>
<?php echo 'Profession (',$postData["profession_type_I"],')  : ', $postData["profession_I"],'<br>'?>
<?php echo 'Profession (',$postData["profession_type_II"],')  : ', $postData["profession_II"],'<br>'?>
<?php echo 'Psychologie : ',$postData["psychologie"],'<br>'?>
<?php echo 'Représentation (',$postData["representation_type_I"],') : ', $postData["representation_I"],'<br>'?>
<?php echo 'Représentation (',$postData["representation_type_II"],') : ', $postData["representation_II"],'<br>'?>
<?php echo 'Représentation (',$postData["representation_type_III"],') : ', $postData["representation_III"],'<br>'?>
<?php echo 'Représentation (',$postData["representation_type_IV"],') : ', $postData["representation_IV"],'<br>'?>

<?php echo 'Sabotage : ',$postData["sabotage"],'<br>'?>
<?php echo 'Survie : ',$postData["survie"],'<br>'?>
<?php echo 'Utilisation d\'objets magiques : ',$postData["utilisation_d_objets_magiques"],'<br>'?>
<?php echo 'Vol : ',$postData["vol"],'<br>'?>
</p> 
		
    </p>
</form>




</html>
