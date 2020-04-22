<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php 
function getkey($input){
	$enkey = str_split($input);
	// var_dump($enkey);
	// die();
	foreach ($enkey as $key => $value) {
		echo "<td>".$value."</td>";
	}
	return $enkey;
}


function encrypt($text,$key){
	$alpha = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
	$alphaUP = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
	$map = array_combine($key, $alpha);
	$mapUP = array_combine($key, $alphaUP);

	for ($i = 0; $i < strlen($text); $i++) {
	    $letter = array_search($text[$i], $map);
	    $letterUP = array_search($text[$i], $mapUP);
	    if (strlen($letter)) {
	    	$text[$i] = strtolower($letter);
	    }
	    if(strlen($letterUP)){
	    	$text[$i] = strtoupper($letterUP);
	    }
	}
	return $text;
}

function partialdecrypt($text,$dekey){
	$key = str_split($dekey);
	$alpha = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
	$alphaUP = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
	$map = array_combine($key, $alpha);
	$mapUP = array_combine($key, $alphaUP);

	for ($i = 0; $i < strlen($text); $i++) {
	    $letter = array_search($text[$i], $map);
	    $letterUP = array_search($text[$i], $mapUP);
	    if (strlen($letter)) {
	    	$text[$i] = strtolower($letter);
	    }
	    elseif(strlen($letterUP)){
	    	$text[$i] = strtoupper($letterUP);
	    }
    	elseif (ctype_alpha($text[$i])) {
	    	$text[$i] = '_';
    	}
	}
	return $text;
}

function countletters($string){
	$low =strtolower($string);
	$alpha = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
	$count = [];
	foreach ($alpha as $key => $value) {
		array_push($count,substr_count($low, $value));
	}
	return $count;
}

function mostoccured($data){
	$sorted = array_slice($data,0);
	$dekey = str_repeat("-", 26);
	sort($sorted);
	$english = ['E','T','A','O','I'];
	$most =array_slice($sorted,21,5);
	$letters=[];
	echo ("<div class=\"6u 12u(3)\"><ul class=\"alt\">");
	$alphaUP = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
	foreach ($most as $key => $value) {
		$index = array_search($value, $data);
		$letter=$alphaUP[$index];
		$l=array_pop($english);
		$dekey[$index]=$l;
		echo '<li>';
		echo $letter,'   -   ',$value,' - substitute -',$l;
		echo '</li>';
		//echo("<li>",$letter,$value"</li>");
	}
	echo ("</ul></div>");
	return $dekey;
}
?>


<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Cryptography</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
<!------------------------ php ------------------------------------------->
			<?php
			$message = "";
			if(isset($_POST['SubmitButton'])){ //check if form was submitted
			  $input = $_POST['inputText']; //get input text
			  if (strlen($input)==26&&ctype_alpha($input)) {
			  	$new = strtoupper($input);
			  	$message = "Key You entered: ".$new;
			  } elseif (strlen($input)>26) {
			  	$message = "Key You entered has invalid lenght: ".$input;
			  	$new = str_repeat(" ", 26);
			  }else {
				$message = "Key You entered is invalid: ".$input;
				$lenght = 26-strlen($input);
				$temp = strtoupper($input);
				$new = $temp.str_repeat(" ", $lenght);
			  }
			}    
			?>
<!------------------------ php ------------------------------------------->

<!----------------------------------- php ----------------------------------------------------->
<?php
	if(isset($_POST['plaintext'])){
	$data = countletters($_POST['plaintext']);
    //var_dump($data);
    //die();
    $dataPoints = array(
    		array("label"=> "A", "y"=> $data[0]),
	    	array("label"=> "B", "y"=> $data[1]),
	    	array("label"=> "C", "y"=> $data[2]),
	    	array("label"=> "D", "y"=> $data[3]),
	    	array("label"=> "E", "y"=> $data[4]),
	    	array("label"=> "F", "y"=> $data[5]),
	    	array("label"=> "G", "y"=> $data[6]),
	    	array("label"=> "H", "y"=> $data[7]),
	        array("label"=> "I", "y"=> $data[8]),
	        array("label"=> "J", "y"=> $data[9]),
	        array("label"=> "K", "y"=> $data[10]),
	        array("label"=> "L", "y"=> $data[11]),
	        array("label"=> "M", "y"=> $data[12]),
	        array("label"=> "N", "y"=> $data[13]),
	        array("label"=> "O", "y"=> $data[14]),
	        array("label"=> "P", "y"=> $data[15]),
	        array("label"=> "Q", "y"=> $data[16]),
	        array("label"=> "R", "y"=> $data[17]),
	        array("label"=> "S", "y"=> $data[18]),
	        array("label"=> "T", "y"=> $data[19]),
	        array("label"=> "U", "y"=> $data[20]),
	        array("label"=> "V", "y"=> $data[21]),
	        array("label"=> "W", "y"=> $data[22]),
	        array("label"=> "X", "y"=> $data[23]),
	        array("label"=> "Y", "y"=> $data[24]),
	    	array("label"=> "Z", "y"=> $data[25])
	    );
    	// var_dump($datapoints);
    	// die();
    }

    ?>
<!----------------------------------- php ----------------------------------------------------->




	</head>
	<body>

		<!-- Header -->
<!-- 			<header id="header">
				<h1><a href="index.html">Cryptography</a></h1>
				<nav id="nav">
					<ul>
						
					</ul>
				</nav>
			</header> -->

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Cryptography</h2>
						<p>by Lakith Rambukkanage</p>
					</header>					

				</div>
			</section>

			<section>
				<div class="container">
				<form action="" method="post">
					<div class="12u$">
						<textarea name="plaintext" id="plaintext" placeholder="Enter your Plaintext" rows="10"></textarea>
					</div>
					<br>
				  <input type="text" placeholder="Enter Key with 26 characters" name="inputText"/>
				  <br>
				  <input type="submit" name="SubmitButton" class="button special" value="Use Key" />
				</form>
				</div>
			</section>
<!------------------------ php ------------------------------------------->
			<div class="container">
			<h2>
			<?php  
			echo $message;
			?>
			</h2>
			</div>
			<br>
<!------------------------ php ------------------------------------------->

			<section>
				<div class="container">
					<table class=alternateTable>
						<tr>
							<td>Plain text alphabet:
							<td>A</td>
							<td>B</td>
							<td>C</td>
							<td>D</td>
							<td>E</td>
							<td>F</td>
							<td>G</td>
							<td>H</td>
							<td>I</td>
							<td>J</td>
							<td>K</td>
							<td>L</td>
							<td>M</td>
							<td>N</td>
							<td>O</td>
							<td>P</td>
							<td>Q</td>
							<td>R</td>
							<td>S</td>
							<td>T</td>
							<td>U</td>
							<td>V</td>
							<td>W</td>
							<td>X</td>
							<td>Y</td>
							<td>Z</td>
						</tr>
						<tr>
							<td>Cipher text alphabet (key):</td>
							<?php
							//funtion to td
							if(isset($_POST['inputText'])){
								if ($new!=null) {
								$enkey = getkey($new);
								}
							}
							
							?>
						</tr>
					</table>
				</div>
			</section>
<!-- ---------------------------------php---------------------------------------------------------- -->
<?php 
	echo "<div class=\"container\"><div class=\"row\"><div class=\"6u 12u(3)\"><br><h3>Plaintext</h3></div><div class=\"6u 12u(3)\"><br><h3>Ciphertext</h3></div></div>";
	echo "<div class=\"container\"><div class=\"row\" >";
	if(isset($_POST['plaintext'])&&isset($input)){ //check if form was submitted
		echo "<div class=\"6u 12u(3)\" style=\"height: 400px;overflow: scroll;\" >";
		echo $_POST['plaintext'];
		echo "</div>";
		if (count($enkey)==26) {
		echo "<div class=\"6u 12u(3)\" style=\"height: 400px;overflow: scroll;\" >";
		$cryptotext=encrypt($_POST['plaintext'],$enkey);
		echo ($cryptotext);
		echo "</div>";
		}
	}
	echo "</div></div>";
 ?>
<!----------------------------------- graph --------------------------- -->
<?php if(isset($cryptotext)){
		$data2 = countletters($cryptotext);
    	$dataPoints2 = array(
    		array("label"=> "A", "y"=> $data2[0]),
	    	array("label"=> "B", "y"=> $data2[1]),
	    	array("label"=> "C", "y"=> $data2[2]),
	    	array("label"=> "D", "y"=> $data2[3]),
	    	array("label"=> "E", "y"=> $data2[4]),
	    	array("label"=> "F", "y"=> $data2[5]),
	    	array("label"=> "G", "y"=> $data2[6]),
	    	array("label"=> "H", "y"=> $data2[7]),
	        array("label"=> "I", "y"=> $data2[8]),
	        array("label"=> "J", "y"=> $data2[9]),
	        array("label"=> "K", "y"=> $data2[10]),
	        array("label"=> "L", "y"=> $data2[11]),
	        array("label"=> "M", "y"=> $data2[12]),
	        array("label"=> "N", "y"=> $data2[13]),
	        array("label"=> "O", "y"=> $data2[14]),
	        array("label"=> "P", "y"=> $data2[15]),
	        array("label"=> "Q", "y"=> $data2[16]),
	        array("label"=> "R", "y"=> $data2[17]),
	        array("label"=> "S", "y"=> $data2[18]),
	        array("label"=> "T", "y"=> $data2[19]),
	        array("label"=> "U", "y"=> $data2[20]),
	        array("label"=> "V", "y"=> $data2[21]),
	        array("label"=> "W", "y"=> $data2[22]),
	        array("label"=> "X", "y"=> $data2[23]),
	        array("label"=> "Y", "y"=> $data2[24]),
	    	array("label"=> "Z", "y"=> $data2[25])
    	);
    } ?>
<!----------------------------------- graph --------------------------- -->
<!----------------------------------- graph --------------------------- -->
<br>
	<script>
    window.onload = function () {
     
    var chart = new CanvasJS.Chart("chartContainer", {
    	animationEnabled: true,
    	theme: "light2", // "light1", "light2", "dark1", "dark2"
    	title: {
    		text: "Character Frequency of Plaintext Alphabet"
    	},
    	axisY: {
    		title: "Frequency of Letters",
    		includeZero: false
    	},
    	data: [{
    		type: "column",
    		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    	}]
    });
    chart.render();

    var chart2 = new CanvasJS.Chart("chartContainer2", {
    	animationEnabled: true,
    	theme: "light2", // "light1", "light2", "dark1", "dark2"
    	title: {
    		text: "Character Frequency of Ciphertext Alphabet"
    	},
    	axisY: {
    		title: "Frequency of Letters",
    		includeZero: false
    	},
    	data: [{
    		type: "column",
    		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
    	}]
    });
    chart2.render();
     
    }
    </script>
<br>
			<section>
				<div class="container">
					<div id="chartContainer" style="height: 370px; width: 100%;"></div>
				    <script src="js/canvasjs.min.js"></script>
				</div>
		    </section>

		    <section>
				<div class="container">
					<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
				    <script src="js/canvasjs.min.js"></script>
				</div>
		    </section>
		    <section>
		    	<div>
		    		<?php 
		    		if(isset($data)&&isset($data2)){
		    			echo "<div class=\"row\"><div class=\"6u 12u(3)\"><br><h3>Plain alphabet Top five Occurance</h3></div><div class=\"6u 12u(3)\"><br><h3>Cipher alphabet Top five Occurance</h3></div></div>";
			    		echo "<div class=\"container\"><div class=\"row\">";
			    		mostoccured($data);
			    		$dekey=mostoccured($data2);
			    		echo "<div><h3>Partial encrypt key based on the Letter Frequency of English : E,T,A,O,I substituted for most Occuring letters:</h3>",$dekey,"</div>";
			    		echo "</div></div>";
			    		echo "<div><br><h3>Partially Decrypted Text </h3></div>";
			    		echo "<div class=\"container\" style=\"height: 400px;overflow: scroll;\" >";
			    		echo partialdecrypt($cryptotext,$dekey);
			    		echo "</div>";
			    	}

		    		?>
		    	</div>
		    </section>

    <br>
    <br>
	<p>Charts Credits</p>
	<p>"JavaScript Column Charts & Graphs | CanvasJS", CanvasJS, 2020. [Online]. Available: https://canvasjs.com/html5-javascript-column-chart/. [Accessed: 21- Apr- 2020]. </p>
	<p>Template Credits</p>
	<p>"Transit by TEMPLATED", TEMPLATED, 2020. [Online]. Available: https://templated.co/transit. [Accessed: 21- Apr- 2020].<p>
	</body>
</html>
