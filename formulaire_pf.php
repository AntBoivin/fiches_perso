<!DOCTYPE html>
<html>
<head>
    <title>Test formulaire</title>
	<link rel="stylesheet" href="fiche.css">
</head>
<body>
	<h1>Test</h1>

	<a href="fiche.php"> Tableau</a>
<form action="fiche_pf.php" method="post">
	<p>
		<label for="Nom">Nom : <input type="texte" name="Nom" id="Nom"><br>
		<label for="Alignement">Alignement : </label>
        <select name="Alignement" id="Alignement">
            <option value="0">Loyal Bon</option>
            <option value="1">Loyal Neutre</option>
            <option value="2">Loyal Mauvais</option>
            <option value="3">Neutre Bon</option>
			<option value="4" selected>Neutre</option>
			<option value="5">Neutre Mauvais</option>
			<option value="6">Chaotique Bon</option>
			<option value="7">Chaotique Neutre</option>
			<option value="8">Chaotique Mauvais</option>
        </select>
		<br>
		<label for="FP">FP : <input type="number" name="FP" id="FP"><br>
		<label for="rMy">Rang Mythique : <input type="number" name="Rang_Mythique" id="rMy"><br>
        <label for="type">Type : </label>
        <select name="Type" id="type">
            <option value="1">Aberration</option>
            <option value="2">Animal</option>
            <option value="3">Créature artificielle</option>
            <option value="4">Créature magique</option>
			<option value="5">Dragon</option>
			<option value="6">Extérieur</option>
			<option value="7">Fée</option>
			<option value="8" selected>Humanoïde</option>
			<option value="9">Humanoïde monstrueux</option>
			<option value="10">Mort-vivant</option>
			<option value="11">Plante</option>
			<option value="12">Vase</option>
			<option value="13">Vermine</option>
        </select>
		<br>
		<label for="Taille">Taille : </label>
        <select name="Taille" id="Taille">
            <option value="Infime">Infime</option>
            <option value="Minuscule">Minuscule</option>
            <option value="Très Petit">Très Petit</option>
            <option value="Petit">Petit</option>
			<option value="Moyen" selected>Moyen</option>
			<option value="Grand">Grand</option>
			<option value="Très Grand">Très Grand</option>
			<option value="Gigantesque" >Gigantesque</option>
			<option value="Colossal">Colossal</option>
        </select>
		<br>
		<!--<label for="DV">DV : <input type="number" name="dés de vie" id="DV"><br>-->
	<p>
	<label for="Sens">Sens : <br>
		<textarea id="Sens" name="Sens" rows="1" cols="33">
		</textarea><br>
	<label for="Aura">Aura : <br>
		<textarea id="Aura" name="Aura" rows="1" cols="33">
		</textarea><br>
	</p>
		<label for="For">Force : <input type="number" name="Force" id="For" value=10><br>
		<label for="Dex">Dextérité : <input type="number" name="Dexterite" id="Dex" value=10><br>
		<label for="Cons">Constitution : <input type="number" name="Constitution" id="Cons" value=10><br>
		<label for="Int">Intelligence : <input type="number" name="Intelligence" id="Int" value=10><br>
		<label for="Sag">Sagesse : <input type="number" name="Sagesse" id="Sag" value=10><br>
		<label for="Cha">Charisme : <input type="number" name="Charisme" id="Cha" value=10><br>
		<label for="BBA">BBA : <input type="number" name="BBA" id="BBA" value=0><br>
	<p>
	</p>	
		<label for="Armure">Total bonus armure  : <input type="number" name="Armure" id="Armure" value=0><br>
		<label for="Contact">dont Armure+Bouclier+Armure naturelle  : <input type="number" name="Contact" id="Contact" value=0><br>
		<label for="Esquive">dont Esquive  : <input type="number" name="Esquive" id="Esquive" value=0><br>
		<label for="Description_bonus_armure">Description bonus armure : <input type="text" name="Description_bonus_armure" id="Description_bonus_armure"><br>
		
		<label for="Bonus_Reflexe">Bonus Initiative  : <input type="number" name="Bonus_Initiative" id="Bonus_Initiative" value=0><br>
		
		<label for="Bonus_Reflexe">Bonus Réflexes  : <input type="number" name="Bonus_Reflexe" id="Bonus_Reflexe" value=0><br>
		<label for="Bonus_Vigueur">Bonus Vigueur  : <input type="number" name="Bonus_Vigueur" id="Bonus_Vigueur" value=0><br>
		<label for="Bonus_Volonte">Bonus Volonté  : <input type="number" name="Bonus_Volonte" id="Bonus_Volonte" value=0><br>
		
		<label for="RD valeur">RD valeur  : <input type="number" name="RD valeur" id="RD valeur" value=0><br>
		<label for="RD">RD  : <input type="text" name="RD" id="RD"><br>
		<label for="Immunite">Immunité : <input type="text" name="Immunite" id="Immunite"><br>
		<label for="Resistance">Résistance  : <input type="text" name="Resistance" id="Resistance"><br>
		<label for="RM">RM  : <input type="number" name="RM" id="RM" value=0><br>
		
		
		
		
		<label for="VD">VD  : <input type="number" name="VD" id="VD" value=0><br>
		<label for="distance_vol">Vol  : <input type="number" name="distance_vol" id="distance_vol" value=0><br>
		<label for="qualite_vol">Qualité de vol  : <input type="text" name="qualite_vol" id="qualite_vol"><br>
		<label for="cac">Corps-à-corps  : <input type="text" name="cac" id="cac"><br>
		<label for="Espace">Espace  : <input type="number" name="Espace" id="Espace" value=0><br>
		<label for="Allonge">Allonge  : <input type="number" name="Allonge" id="Allonge" value=0><br>
		<label for="Attaques_spe">Attaques spéciales  : <input type="text" name="Attaques_spe" id="Attaques_spe"><br>
		
		
		<label for="Concentration_pv">Concentration : <input type="number" name="Concentration_pv" id="Concentration_pv" value=0><br>
		<label for="NLS">NLS : <input type="number" name="NLS" id="NLS" value=0><br>
		<label for="Constant">Constant : <input type="texte" name="Constant" id="Constant"><br> 
		<label for="A_volonte">A volonté : <input type="texte" name="A_volonte" id="A_volonte"><br> 
		<label for="3_jour">3/jour : <input type="texte" name="3_jour" id="3_jour"><br> 
		<label for="1_jour">1/jour : <input type="texte" name="1_jour" id="1_jour"><br>
		<label for="1_mois">1/mois : <input type="texte" name="1_mois" id="1_mois"><br> 
		<label for="1_an">1/an : <input type="texte" name="1_an" id="1_an"><br> 
		
		
		<label for="Classe">Classe: <input type="texte" name="Classe" id="Classe"><br> 
		<label for="Concentration">Concentration : <input type="number" name="Concentration" id="Concentration" value=0><br> 
		<label for="NLS_sorts">NLS : <input type="number" name="NLS_sorts" id="NLS_sorts" value=0><br>
		
		<label for="Niveau_0">Niveau 0 : <input type="texte" name="Niveau_0" id="Niveau_0"><br>
		<label for="Niveau_1">Niveau 1 : <input type="texte" name="Niveau_1" id="Niveau_1"><br> 
		<label for="Niveau_2">Niveau 2 : <input type="texte" name="Niveau_2" id="Niveau_2"><br> 
		<label for="Niveau 3">Niveau 3 : <input type="texte" name="Niveau_3" id="Niveau_3"><br>
		<label for="Niveau_4">Niveau 4 : <input type="texte" name="Niveau_4" id="Niveau_4"><br>
		<label for="Niveau_5">Niveau 5 : <input type="texte" name="Niveau_5" id="Niveau_5"><br>
		<label for="Niveau_6">Niveau 6 : <input type="texte" name="Niveau_6" id="Niveau_6"><br> 
		<label for="Niveau_7">Niveau 7 : <input type="texte" name="Niveau_7" id="Niveau_7"><br>
		<label for="Niveau_8">Niveau 8 : <input type="texte" name="Niveau_8" id="Niveau_8"><br>
		<label for="Niveau_9">Niveau 9 : <input type="texte" name="Niveau_9" id="Niveau_9"><br> 
		
		
		
		<label for="Dons">Dons : <br>
		<textarea id="Dons" name="Dons" rows="5" cols="33">
		</textarea><br>
		
		
		<label for="Langues">Langues : <br>
		<textarea id="Langues" name="Langues" rows="1" cols="33">
		</textarea><br>
		
		
		<label for="Particularites">Particularités : <br><!--<input type="texte" name="Particularites" id="Particularites"><br>-->
		<textarea id="Particularites" name="Particularites" rows="2" cols="33">
		</textarea><br>
		<label for="Environnement">Environnement : <br>
		<textarea id="Environnement" name="Environnement" rows="1" cols="33">
		</textarea><br>
		<label for="Organisation_sociale">Organisation sociale : <br>
		<textarea id="Organisation_sociale" name="Organisation_sociale" rows="5" cols="33">
		</textarea><br>
		<label for="Tresor">Trésor : <br><!--<input type="texte" name="Resume" id="Resume"><br>-->
		<textarea id="Tresor" name="Tresor" rows="5" cols="33">
		</textarea><br>
		<label for="Pouvoirs_speciaux">Pouvoirs spéciaux : <br>
		<textarea id="Pouvoirs_speciaux" name="Pouvoirs_speciaux" rows="5" cols="33">
		</textarea><br>
		<label for="Resume">Résumé : <br><!--<input type="texte" name="Resume" id="Resume"><br>-->
		<textarea id="Resume" name="Resume" rows="5" cols="33">
		</textarea>
		
		
    </p>
	<p id="comp">
<label for="Acro">Acrobaties : <input type="number" name="acrobaties" id="Acro" value=0></label><br>
<label for="Adlm">Art de la magie : <input type="number" name="art_de_la_magie" id="Adlm" value=0></label><br>
<label for="Art_type_I">Art : <input type="text" name="artisanat_type_I" id="Art_type_I"> </label>   
<label for="Art_I"><input type="number" name="artisanat_I" id="Art_I" value=0></label><br>
<label for="Art_type_II">Art : <input type="text" name="artisanat_type_II" id="Art_type_II">  </label> 
<label for="Art_II"> <input type="number" name="artisanat_II" id="Art_II" value=0></label><br>
<label for="Bluff">Bluff : <input type="number" name="bluff" id="Bluff" value=0></label><br>
<label for="Conn_donj">Connaissances (exploration donjons) : <input type="number" name="conn_donj" id="Conn_donj" value=0></label><br>    
<label for="Conn_folk">Connaissances (folklore local) : <input type="number" name="conn_folk" id="Conn_folk" value=0></label><br>
<label for="Conn_geo">Connaissances (géographie) : <input type="number" name="conn_geo" id="Conn_geo" value=0></label><br>
<label for="Conn_hist">Connaissances (histoire) : <input type="number" name="conn_hist" id="Conn_hist" value=0></label><br>
<label for="Conn_ing">Connaissances (ingénierie) : <input type="number" name="conn_ing" id="Conn_ing" value=0></label><br>
<label for="Conn_myst">Connaissances (mystère) : <input type="number" name="conn_myst" id="Conn_myst" value=0></label><br>
<label for="Conn_nat">Connaissances (nature) : <input type="number" name="conn_nat" id="Conn_nat" value=0></label><br>
<label for="Conn_nob">Connaissances (noblesse) : <input type="number" name="conn_nob" id="Conn_nob" value=0></label><br>
<label for="Conn_plans">Connaissances (plans) : <input type="number" name="conn_plans" id="Conn_plans" value=0></label><br>
<label for="Conn_rel">Connaissances (religions) : <input type="number" name="conn_rel" id="Conn_rel" value=0></label><br>
<label for="Deg">Déguisement : <input type="number" name="deguisement" id="Deg" value=0></label><br>
<label for="Diplo">Diplomatie : <input type="number" name="diplomatie" id="Diplo" value=0></label><br>
<label for="Dis">Discrétion : <input type="number" name="discretion" id="Dis" value=0></label><br>
<label for="Dres">Dressage : <input type="number" name="dressage" id="Dres" value=0></label><br>
<label for="Equi">Équitation : <input type="number" name="equitation" id="Equi" value=0></label><br>
<label for="Escal"> Escalade : <input type="number" name="escalade" id="Escal" value=0></label><br>
<label for="Escam">Escamotage : <input type="number" name="escamotage" id="Escam" value=0></label><br>
<label for="Estim">Estimation : <input type="number" name="estimation" id="Estim" value=0></label><br>
<label for="Evas">Évasion : <input type="number" name="evasion" id="Evas" value=0></label><br>
<label for="Intim">Intimidation : <input type="number" name="intimidation" id="Intim" value=0></label><br>
<label for="Ling">Linguistique : <input type="number" name="linguistique" id="Ling" value=0></label><br>
<label for="Nat">Natation : <input type="number" name="natation" id="Nat" value=0></label><br>
<label for="Perc">Perception : <input type="number" name="perception" id="Perc" value=0></label><br>
<label for="Secours">Premiers secours : <input type="number" name="premiers_secours" id="Secours" value=0></label><br>
<label for="Prof_type_I">Profession : <input type="text" name="profession_type_I" id="Prof_type_I">  </label>  
<label for="Prof_I">  <input type="number" name="profession_I" id="Prof_I" value=0></label><br>
 <label for="Prof_type_II">Profession : <input type="text" name="profession_type_II" id="Prof_type_II">   </label> 
<label for="Prof_II">  <input type="number" name="profession_II" id="Prof_II" value=0></label><br>
<label for="Psycho">Psychologie : <input type="number" name="psychologie" id="Psycho" value=0></label><br>
<label for="Rep_type_I">Représentation : <input type="text" name="representation_type_I" id="Rep_type_I"> </label>
<label for="Rep_I">  <input type="number" name="representation_I" id="Rep_I" value=0></label><br>
<label for="Rep_type_II">Représentation : <input type="text" name="representation_type_II" id="Rep_type_II">  </label>  
<label for="Rep_II">  <input type="number" name="representation_II" id="Rep_II" value=0></label><br>
<label for="Rep_type_III">Représentation : <input type="text" name="representation_type_III" id="Rep_type_III">   </label>
<label for="Rep_III">  <input type="number" name="representation_III" id="Rep_III" value=0></label><br>
<label for="Rep_type_IV">Représentation : <input type="text" name="representation_type_IV" id="Rep_type_IV"> </label>  
<label for="Rep_IV">  <input type="number" name="representation_IV" id="Rep_IV" value=0></label><br>
<label for="Sabot">Sabotage : <input type="number" name="sabotage" id="Sabot" value=0></label><br>
<label for="Survie">Survie : <input type="number" name="survie" id="Survie" value=0></label><br>
<label for="Utilisation">Utilisation d'objets magiques : <input type="number" name="utilisation_d_objets_magiques" id="Utilisation" value=0></label><br>
<label for="Vol">Vol : <input type="number" name="vol" id="Vol" value=0></label><br>	 
</p> 
	
	
	<input type="submit" value="Envoyer">
</form>




</html>
