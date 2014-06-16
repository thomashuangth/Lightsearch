<?php
if($_GET["url"] != "url") header('Location: '.$_GET["url"])
?>

<html>
	<head>
		<title>Lightsearch</title>
		<link type="text/css" href="css\style.css" rel="stylesheet"/>
		<script type="text/javascript" src="javascript/jscript_one.js"></script>
		<link rel="icon" href="favicon.png" type="image/icon">
	</head>
	<body>
		<div class="resultathead">
			<a href="index.php">
				<div class="logo">
					<img src="images/logo.png" alt="LightSearch">
					<h3>LightSearch</h3>
				</div>
			</a>
			<form action="resultat.php" method="GET">
				<div class="option">
					Résultats par page :<br>
					<img src="images/settings.png" alt="option" height="20">
					<select name="resultatperpage" onchange="this.form.submit()">
						<option value="10">10 par page</option>
						<option value="20">20 par page</option>
						<option value="30">30 par page</option>
					</select>
				</div>
				<div class="resultatsearch">
					<ul id="result">
					</ul>
					<input id="searchbar" name="search" type="search" placeholder="Recherche..." autocomplete="off" onkeyup="searchWebsite()" value="<?php echo $_GET["search"] ?>" autofocus>
					<button onclick="goSearch()">Chercher
						<input type="hidden" id="url" name="url" value="url">
					</button>
				</div>
			</form>
		</div>
		<div class="allresult">
			<ul>
				<?php
				require_once 'required.php';
				$resultatperpage = 0;

				if(!$_GET['resultatperpage']) $resultatperpagechoice = 10;
				else $resultatperpagechoice = $_GET['resultatperpage'];

				if(!$_GET['page']) $page = 0;
				else $page = $_GET['page']*$resultatperpagechoice-$resultatperpagechoice;

				$resultController = ControllerFactory::getResultController();
	
				$description = $_GET["search"];
				$words = explode(" ", $description);
				for($i=0; $i<count($words); $i++){
					$words[$i] = "*".$words[$i]."*";
				}

				$description1 = implode(" ",$words);
				$words = explode(" ", $description);
				for($i=0; $i<count($words); $i++){
					$words[$i] = "+*".$words[$i]."*";
				}

				$title = implode(" ",$words);
				
				$results = $resultController->retrieveResult($description1, $title);
				echo "<p>Nous avons trouvé ".sizeof($results)." résultats</p>";
				$pageresult = 0;
				foreach($results as $result) {
					if($resultatperpage == $resultatperpagechoice) break;
					if($page <= $pageresult)
					{
						echo '
							<li>
								<h3><a href="'.$result->getUrl().'">'.$result->getTitle().'</a></h3>
								<div class="link"><a href="'.$result->getUrl().'">'.$result->getUrl().'</a></div>
								<div class="description">'.$result->getDescription().'</div>
							</li>
						';
						$resultatperpage++;
					}
					$pageresult++;
				}
				?>
			</ul>
		</div>
		<div class="page">
			<?php
			echo "Page : ";
			for($i = 1; $i < ceil(sizeof($results)/$resultatperpagechoice)+1; $i++)
			{
				echo " ";
				echo "<a href='resultat.php?page=".$i."&resultatperpage=".$_GET['resultatperpage']."&search=".$_GET['search']."'>$i</a>";
			}
			?>
		</div>
	</body>
</html>