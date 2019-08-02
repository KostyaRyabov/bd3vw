<?php
    $ask = require_once('connect.php');

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_set_charset($Connect, 'utf8');

    if (isset($_POST['add'])){
        $row = mysqli_fetch_assoc(mysqli_query($Connect, "SELECT * FROM gender WHERE `Пол` = '".$_POST['Пол']."' LIMIT 1"));

        if ($row == NULL){
            
            $sql='INSERT INTO gender (`КодПола`, `Пол`) VALUE ("","'.$_POST['Пол'].'")';

            $result=mysqli_query($Connect, $sql);

            if (!$result) exit("Error! ".mysqli_error($Connect)."??????");
        }

        unset($_POST['add']);
    }
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="../styles/design.css">
    <title>Country Form</title>
    <script type="text/javascript" src="scripts/code_frames.js"></script>
</head>
<body>
    <div class="block">
        <h1>Пол</h1>

        <form action="genderForm.php" method="post" onsubmit="alert('submit!');">
            <input type="text" name="Пол" value="" required/>
            <br>
            <input type="submit" name="add" value="ДОБАВИТЬ" />
        </form>
    </div>

    <img class='Loading' src='img/oxygen-loader.gif' width='0px'>


    <div class="block">
        <div id='top_border'></div>
        <table>
            <tr style='--t:1s;'>
                <th>№</th>
                <th>Пол</th>
            </tr>

            <?php

            $sql = "SELECT `Пол` FROM gender";

            $result=mysqli_query($Connect, $sql);

            if (!$result) exit("Error! ".mysqli_error($Connect)."??????");
            else{

                $nrows=mysqli_num_rows($result);

                for ($i = 0; $i < $nrows; $i++){
                    $assoc=mysqli_fetch_assoc($result);
                    echo "
                    <tr style='--t:".(($i+3)/(2 + $nrows/10))."s;'>
                        <td>".($i+1)."</td>
                        <td>".$assoc['Пол']."</td>
                    </tr>";

                }
            }

            ?><div id='bottom_border'></div>
        </table>
    </div>
</body>
</html>