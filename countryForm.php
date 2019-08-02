<?php
    $ask = require_once('connect.php');

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_set_charset($Connect, 'utf8');

    if (isset($_POST['add'])){
        $row = mysqli_fetch_assoc(mysqli_query($Connect, "SELECT * FROM country WHERE `Страна` = '".$_POST['Страна']."' LIMIT 1"));

        if ($row == NULL){

            $sql='INSERT INTO country (`КодСтраны`, `Страна`) VALUE ("","'.$_POST['Страна'].'")';

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
        <h1>Страны</h1>

        <form action="countryForm.php" method="post">
            <input type="text" pattern="[A-Za-zА-Яа-яЁё]{1,}"  name="Страна" value="" required/>
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
                <th>Страна</th>
            </tr>

            <?php

            $sql = "SELECT `Страна` FROM country";

            $result=mysqli_query($Connect, $sql);

            if (!$result) exit("Error! ".mysqli_error($Connect)."??????");
            else{

                $nrows=mysqli_num_rows($result);

                for ($i = 0; $i < $nrows; $i++){
                    $assoc=mysqli_fetch_assoc($result);
                    echo "
                    <tr style='--t:".(($i+3)/(2 + $nrows/10))."s;'>
                        <td>".($i+1)."</td>
                        <td>".$assoc['Страна']."</td>
                    </tr>";

                }
            }

            ?><div id='bottom_border'></div>
        </table>
    </div>
</body>
</html>