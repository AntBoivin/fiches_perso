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
		<label for="Nom">Nom : <input type="texte" name="nom" id="Nom"><br>
		<label for="alignement">Alignement : </label>
        <select name="alignement" id="alignement">
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
		<label for="FP">FP : <input type="number" name="facteur_de_puissance" id="FP"><br>
		<label for="rMy">Rang Mythique : <input type="number" name="rang_mythique" id="rMy"><br>
        <label for="type">Type : </label>
        <select name="type" id="type">
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
		<label for="taille">Taille : </label>
        <select name="taille" id="taille">
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
	</p>
		<label for="For">Force : <input type="number" name="force" id="For" value=10><br>
		<label for="Dex">Dextérité : <input type="number" name="dexterite" id="Dex" value=10><br>
		<label for="Cons">Constitution : <input type="number" name="constitution" id="Cons" value=10><br>
		<label for="Int">Intelligence : <input type="number" name="intelligence" id="Int" value=10><br>
		<label for="Sag">Sagesse : <input type="number" name="sagesse" id="Sag" value=10><br>
		<label for="Cha">Charisme : <input type="number" name="charisme" id="Cha" value=10><br>
	<p>
	</p>	
		<label for="Armure">Armure : <input type="number" name="Armure" id="Armure"><br>
		<label for="Particularites">Particularités : <br><!--<input type="texte" name="particularites" id="Particularites"><br>-->
		<textarea id="Particularites" name="particularites" rows="5" cols="33">
		</textarea><br>
		<label for="Resume">Résumé : <br><!--<input type="texte" name="resume" id="Resume"><br>-->
		<textarea id="Resume" name="resume" rows="5" cols="33">
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
