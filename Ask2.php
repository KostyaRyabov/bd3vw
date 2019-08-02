<?php
    $ask = require_once('connect.php');

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_set_charset($Connect, 'utf8');
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="../styles/design.css">
    <title>Ask1</title>
    <script type="text/javascript" src="scripts/code_frames.js"></script>
</head>
<body>
    <div class="block">
        <h1>Языки в Италии</h1>
    </div>

    
    <img class='Loading' src='img/oxygen-loader.gif' width='0px'>


    <div class="block">
        <div id='top_border'></div>
        <?php
	        $sql = "SELECT managers.`Фамилия`, managers.`Язык` FROM country, travels, managers WHERE managers.`КодМенеджера` = travels.`Менеджер` && country.`КодСтраны` = travels.`Страна` && country.`Страна` = 'Италия'";

	        $result=mysqli_query($Connect, $sql);

	        if (!$result) exit("Error! ".mysqli_error($Connect)."??????");
	        else{
	        	$nrows=mysqli_num_rows($result);
	                
	        	if ($nrows != 0){
		            echo "<table>
			        <tr style='--t:1s;'>
			            <th>№</th>
			            <th>менеджер</th>
			            <th>языки</th>
			        </tr>";

		            for ($i = 0; $i < $nrows; $i++){
		                $assoc=mysqli_fetch_assoc($result);
		                echo "
		                <tr style='--t:".(($i+3)/(2 + $nrows/10))."s;'>
		                    <td>".($i+1)."</td>
		                    <td>".$assoc['Фамилия']."</td>
		                    <td>".$assoc['Язык']."</td>
		                </tr>";
		            }

		            echo "</table>";
	            	}
	            }
            ?><div id='bottom_border'></div>
    </div>
</body>
</html>