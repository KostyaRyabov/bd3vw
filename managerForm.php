<?php
    $ask = require_once('connect.php');

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_set_charset($Connect, 'utf8');

    if (isset($_POST['add'])){
        $row = mysqli_fetch_assoc(mysqli_query($Connect, "SELECT * FROM managers WHERE `Фамилия` = '".$_POST['Фамилия']."' && `Возраст` = '".$_POST['Возраст']."' && `Язык` = '".$_POST['Язык']."' && `Пол` = '".$_POST['Пол']."' LIMIT 1"));

        if ($row == NULL){

            $sql='INSERT INTO managers (`КодМенеджера`, `Фамилия`, `Возраст`, `Язык`, `Пол`) VALUE ("","'.$_POST['Фамилия'].'","'.$_POST['Возраст'].'","'.$_POST['Язык'].'","'.$_POST['Пол'].'")';

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
        <h1>Менеджеры</h1>

        <form action="managerForm.php" method="post">
            Фамилия: <input type="text" pattern="[A-Za-zА-Яа-яЁё]{1,}" name="Фамилия" value="" required/><br>
            Возраст: <input type="number" max="150" min="0" name="Возраст" value="" required/><br>
            Язык: <input type="text" name="Язык" value="" pattern="[A-Za-zА-Яа-яЁё]{1,}"  required /><br>
            Пол: <select name="Пол"> 
            
            <?php
              $result=mysqli_query($Connect, "SELECT * FROM gender");
        
              if (!$result) exit("Ошибка выполнения запроса ".mysqli_error($Connect)."??????");
              $nrows=mysqli_num_rows($result);
              for ($i=0;$i<$nrows; $i++)
              { 
                  $assoc=mysqli_fetch_assoc($result);
                  echo "<option value = '".$assoc['КодПола']."'>".$assoc['Пол']."</option>";
              }
            ?>

            </select>
            <br>
            <input type="submit" name="add" value="ДОБАВИТЬ"/>
        </form>
    </div>

    <img class='Loading' src='img/oxygen-loader.gif' width='0px'>


    <div class="block">
        <div id='top_border'></div>
        <table>
            <tr style='--t:1s;'>
                <th>№</th>
                <th>Фамилия</th>
                <th>Возраст</th>
                <th>Язык</th>
                <th>Пол</th>
            </tr>

            <?php

            $sql = "SELECT `Фамилия`,`Возраст`,`Язык`, gender.`Пол` FROM managers, gender WHERE gender.`КодПола` = managers.`Пол`";

            $result=mysqli_query($Connect, $sql);

            if (!$result) exit("Error! ".mysqli_error($Connect)."??????");
            else{

                $nrows=mysqli_num_rows($result);

                for ($i = 0; $i < $nrows; $i++){
                    $assoc=mysqli_fetch_assoc($result);
                    echo "
                    <tr style='--t:".(($i+3)/(2 + $nrows/10))."s;'>
                        <td>".($i+1)."</td>
                        <td>".$assoc['Фамилия']."</td>
                        <td>".$assoc['Возраст']."</td>
                        <td>".$assoc['Язык']."</td>
                        <td>".$assoc['Пол']."</td>
                    </tr>";

                }
            }

            ?><div id='bottom_border'></div>
        </table>
    </div>
</body>
</html>