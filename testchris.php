<html>
	<head>
		<title>Lightsearch</title>
		<link type="text/css" href="css\style.css" rel="stylesheet"/>
		<link rel="icon" href="favicon.png" type="image/icon">
	</head>
	<body>
		<div id="logo"></div>
		<h1>LightSearch</h1>
		<div class="searchsection">
			LightSearch for you :
			<form name="search" action="testchris.php" method="POST">
				<input id="searchbar" name="keywords" type="text" placeholder="Recherche...">
			</form>
		</div>
	</body>
</html>

<hr/> 

<?php $keyword = $GET_('keyword');
$recherche = explode('', $keyword);
$query = "SELECT * FROM website WHERE ";


foreach ($recherche as $item){

i++;

if($i == 1)
	$query .= "keywords LIKE '%$item%' ";
else
	$query .= "OR keyworkds LIKE '%$item%' ";

}

mysql_connect("localhost", "root", "");
mysql_select_db("lightsearch1_db");

$query = mysql_query($query);
$nombreresultat = mysql_num_rows($query);


if($nombreresultat >0){

while($row = mysql_fetch_associ($query)){
   $id = $row['id'];
   $title = $row['title'];
$description = $row['description'];
$keywords = $row['keywords'];
$url = $row['url'];

echo "<h2><a href='$url'>$title</a></h2>
$description <br /><br / >";


 }


}


else 

echo " Pas de resultats trouves pour <b>$keyword</b>";

?>

