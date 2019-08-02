<?php
    $ask = require_once('connect.php');

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_set_charset($Connect, 'utf8');

    if (isset($_POST['add'])){
        $row = mysqli_fetch_assoc(mysqli_query($Connect, "SELECT * FROM travels WHERE `Дата` = '".$_POST['Дата']."' && `Менеджер` = '".$_POST['Менеджер']."' && `Страна` = '".$_POST['Страна']."' LIMIT 1"));

        if ($row == NULL){

            $sql='INSERT INTO travels (`id_record`, `Дата`, `Менеджер`, `Страна`) VALUE ("","'.$_POST['Дата'].'","'.$_POST['Менеджер'].'","'.$_POST['Страна'].'")';

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
        <h1>Поездки менеджеров</h1>

        <form action="travelsForm.php" method="post">
            Дата: <input type="date" name="Дата" value="2005-12-31" width=200px required/><br>
            Менеджер: <select name="Менеджер"> 
            
            <?php
              $result=mysqli_query($Connect, "SELECT `Фамилия`,`КодМенеджера` FROM managers");
        
              if (!$result) exit("Ошибка выполнения запроса ".mysqli_error($Connect)."??????");
              $nrows=mysqli_num_rows($result);
              for ($i=0;$i<$nrows; $i++)
              { 
                  $assoc=mysqli_fetch_assoc($result);
                  echo "<option value = '".$assoc['КодМенеджера']."'>".$assoc['Фамилия']."</option>";
              }
            ?>

            </select>
            <br>
            Страна: <select name="Страна"> 
            
            <?php
              $result=mysqli_query($Connect, "SELECT * FROM country");
        
              if (!$result) exit("Ошибка выполнения запроса ".mysqli_error($Connect)."??????");
              $nrows=mysqli_num_rows($result);
              for ($i=0;$i<$nrows; $i++)
              { 
                  $assoc=mysqli_fetch_assoc($result);
                  echo "<option value = '".$assoc['КодСтраны']."'>".$assoc['Страна']."</option>";
              }
            ?>

            </select>
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
                <th>Дата</th>
                <th>Менеджер</th>
                <th>Страна</th>
            </tr>

            <?php

            $sql = "SELECT `Дата`, managers.`Фамилия` as `Familia`, country.`Страна` as `strana` FROM travels,managers,country WHERE managers.`КодМенеджера` = travels.`Менеджер` && country.`КодСтраны` = travels.`Страна`";

            $result=mysqli_query($Connect, $sql);

            if (!$result) exit("Error! ".mysqli_error($Connect)."??????");
            else{

                $nrows=mysqli_num_rows($result);

                for ($i = 0; $i < $nrows; $i++){
                    $assoc=mysqli_fetch_assoc($result);
                    echo "
                    <tr style='--t:".(($i+3)/(2 + $nrows/10))."s;'>
                        <td>".($i+1)."</td>
                        <td>".$assoc['Дата']."</td>
                        <td>".$assoc['Familia']."</td>
                        <td>".$assoc['strana']."</td>
                    </tr>";

                }
            }

            ?>
        </table>
        <div id='bottom_border'></div>
    </div>
</body>
</html>