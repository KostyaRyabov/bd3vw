<?php
    $ask = require_once('connect.php');

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_set_charset($Connect, 'utf8');

    if (isset($_GET['del'])){
        unset($_GET['менеджер']);
        unset($_GET['del']);
    }
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="../styles/design.css">
    <title>Ask1</title>
    <script type="text/javascript" src="scripts/code_frames.js"></script>
</head>
<body>
    <div class="block">
        <h1>Страны - менеджер</h1>

        <form action="Ask1.php" method="get">
            <input type="text" onchange="form.submit()" name="менеджер" value= <?php if (isset($_GET['менеджер'])) echo htmlspecialchars($_GET['менеджер'])." />"; else echo "''/>"; ?>
            <br>
            <input type="submit" name="del" value=" <<< " />
        </form>
    </div>

    
    <img class='Loading' src='img/oxygen-loader.gif' width='0px'>


    <div class="block">
        <div id='top_border'></div>
        <?php
            if (isset($_GET['менеджер'])){
	            $sql = "SELECT country.`Страна` FROM country, travels, managers WHERE managers.`КодМенеджера` = travels.`Менеджер` && managers.`Фамилия` = '".$_GET['менеджер']."' && country.`КодСтраны` = travels.`Страна`";

	            $result=mysqli_query($Connect, $sql);

	            if (!$result) exit("Error! ".mysqli_error($Connect)."??????");
	            else{
	            	$nrows=mysqli_num_rows($result);
	                
	            	if ($nrows != 0){
		                echo "<table>
			            <tr style='--t:2s;'>
			                <th>№</th>
			                <th>Страны</th>
			            </tr>";

		                for ($i = 0; $i < $nrows; $i++){
		                    $assoc=mysqli_fetch_assoc($result);
		                    echo "
		                    <tr style='--t:".(($i+3)/(2 + $nrows/10))."s;'>
		                        <td>".($i+1)."</td>
		                        <td>".$assoc['Страна']."</td>
		                    </tr>";
		                }

		                echo "</table>";
	            	}
	            }
        	}
            ?><div id='bottom_border'></div>
    </div>
</body>
</html>