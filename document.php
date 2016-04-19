<DOCTYPE! html>
<html>
<head>
<meta charset="utf-8">

<title>Fichier XML</title> 
</head>
<body>

 
 <table>
 <?php
 	$xml = simplexml_load_file("classe.xml");
 	foreach ($xml as $simploniens) {
 	

 		    echo "<tr><td>" .$simploniens->nom. " " .$simploniens->prenom. "</td>", 
 		    "<td>" .$simploniens->date_naissance. "</td></td></tr>";
  			} 

  	foreach ($simploniens as $date) {
  			sort(array)
  	}

?> 
</table>


</body>
</html> 
