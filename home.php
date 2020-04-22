     <?php
     
    $dataPoints = array(
    	array("label"=> "A", "y"=> 10),
    	array("label"=> "B", "y"=> 265),
    	array("label"=> "C", "y"=> 214),
    	array("label"=> "D", "y"=> 264),
    	array("label"=> "E", "y"=> 225),
    	array("label"=> "F", "y"=> 122),
    	array("label"=> "G", "y"=> 137),
    	array("label"=> "H", "y"=> 140),
        array("label"=> "I", "y"=> 187),
        array("label"=> "J", "y"=> 187),
        array("label"=> "K", "y"=> 87),
        array("label"=> "L", "y"=> 87),
        array("label"=> "M", "y"=> 187),
        array("label"=> "N", "y"=> 187),
        array("label"=> "O", "y"=> 187),
        array("label"=> "P", "y"=> 18),
        array("label"=> "Q", "y"=> 111),
        array("label"=> "R", "y"=> 117),
        array("label"=> "S", "y"=> 187),
        array("label"=> "T", "y"=> 117),
        array("label"=> "U", "y"=> 87),
        array("label"=> "V", "y"=> 187),
        array("label"=> "W", "y"=> 17),
        array("label"=> "X", "y"=> 17),
        array("label"=> "Y", "y"=> 117),
    	array("label"=> "Z", "y"=> 130)
    );
    	
    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
    <script>
    window.onload = function () {
     
    var chart = new CanvasJS.Chart("chartContainer", {
    	animationEnabled: true,
    	theme: "light2", // "light1", "light2", "dark1", "dark2"
    	title: {
    		text: "Character Frequency Chat"
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
     
    }
    </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="js/canvasjs.min.js"></script>
    </body>
    </html>                              