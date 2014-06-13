<html>
	<head>
		<title>Lightsearch</title>
		<link type="text/css" href="css\style.css" rel="stylesheet"/>
		<script type="text/javascript" src="javascript/jscript_one.js"></script>
		<link rel="icon" href="favicon.png" type="image/icon">
	</head>
	<body>
		<div class="resultathead">
			<div class="option">
				Résultats par page :<br>
				<select name="resultperpage">
					<option value="10">10 par page</option>
					<option value="20">20 par page</option>
					<option value="30">30 par page</option>
				</select>
			</div>
			<a href="index.php">
				<div class="logo">
					<img src="images/logo.png" alt="LightSearch">
					<h3>LightSearch</h3>
				</div>
			</a>
			<div class="resultatsearch">
				<form action="resultat.php" method="GET">
					<input id="searchbar" name="search" type="search" placeholder="Recherche..." autocomplete="off" onkeyup="searchWebsite()" value="<?php echo $_GET["search"] ?>">
					<button onclick="searchWebsite()">Search</button>
				</form>
				<ul id="result">
				</ul>
			</div>
		</div>
		<div class="allresult">
			<ul>
				<?php
				require_once 'required.php';
	
				$resultController = ControllerFactory::getResultController();
				$description = $_GET["search"];				
				$words = explode(" ", $description);

				for($i=0; $i<count($words); $i++){
					$words[$i] = "*".$words[$i]."*";
				}
				$description = implode(" ",$words);
				$results = $resultController->retrieveResult($description);

				foreach($results as $result) { 
					echo '
						<li>
							<h3><a href="'.$result->getUrl().'">'.$result->getTitle().'</a></h3>
							<div class="link">'.$result->getUrl().'</div>
							<div class="description">'.$result->getDescription().'</div>
						</li>

					';
				}
				
				?>
			</ul>
		</div>


	</body>
</html>