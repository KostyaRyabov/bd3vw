<!DOCTYPE HTML>

    <html>
    <head>
		<link rel="stylesheet" type="text/css" href="../styles/design.css">
        <title>Menu</title>

        <script type="text/javascript" src="scripts/code.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head>
    <body>
        <header>
        	Отчет

        	<img class="info" src="img/info.png" height="32px">
        	<div class="task">
        		<h1>задание</h1>
        		<p>Создайте базу данных База_Группа_Фамилия в своей папке
Структура базы:</p>
         
<p>Для заполнения таблиц БД используйте следующие данные : </p>
<table class="shema">
<tr><td>Дата</td><td>Пол</td><td>Оценка</td><td>Фамилия</td><td>Возраст</td><td>Страна</td><td>Язык</td></tr>
<tr><td>03.01.05</td><td>мужской</td><td>5</td><td>Иванов</td><td>20</td><td>Италия</td><td>английский</td><td></tr>
<tr><td>15.01.05</td><td>женский</td><td>4</td><td>Петрова</td><td>19</td><td>Франция</td><td>французский</td><td></tr>
<tr><td>02.02.05</td><td>женский</td><td>3</td><td>Сидорова</td><td>21</td><td>Италия</td><td>немецкий</td><td></tr>
<tr><td>02.03.05</td><td>мужской</td><td>5</td><td>Иванов</td><td>20</td><td>Германия</td><td>английский</td><td></tr>
<tr><td>14.02.05</td><td>женский</td><td>3</td><td>Сидорова</td><td>21</td><td>Венгрия</td><td>немецкий</td><td></tr>
<tr><td>04.04.05</td><td>женский</td><td>4</td><td>Петрова</td><td>19</td><td>Италия</td><td>французский</td><td></tr></table>
<p>-	Для организации связи с подчиненными таблицами используйте мастер подстановки.</p>
<p>-	Для заполнения таблиц создайте автоформы (количество форм должно быть равно количеству таблиц). При заполнении под-чиненных таблиц предусмотреть возможность выбора нужных значений в полях подстановки из выпадающих списков меню. </p>
<p>-	Создайте следующие запросы:</p>
<p>1)	В какие страны ездил данный менеджер (запрос с параметром)</p>
<p>2)	Какими языками владеют менеджеры, посетившие Италию;</p>
<p>3)	Пол и фамилия менеджера, посетившего Венгрию;</p>
<p>4)	Список менеджеров, совершивших поездки в феврале и марте 2005 года.</p>
<p>-	Создайте отчет (с группировкой и сортировкой данных) по поездкам менеджеров.</p>

        	</div>
    	</header>

        
        <input type="checkbox" class="io__form" id="io__form1" name="cb" onchange="SetUrl(this.checked, 'if1','travelsForm.php');Reload(this.checked)">
        <label for="io__form1" class="fog" id="z6"></label>
        <div class="Redact__block">
                <iframe scrolling="auto" id="if1" frameborder="0" class="form__window" src=""></iframe>
                <label for="io__form1" class="down button">назад</label>
        </div>

        <input type="checkbox" class="io__form" id="io__form2" name="cb" onchange="SetUrl(this.checked, 'if2','managerForm.php')">
        <label for="io__form2" class="fog" id="z6"></label>
        <div class="Redact__block">
                <iframe scrolling="auto" frameborder="0" class="form__window"  id="if2" src=""></iframe>
                <label for="io__form2" class="down button">назад</label>
        </div>

        <input type="checkbox" class="io__form" id="io__form3" name="cb" onchange="SetUrl(this.checked, 'if3','countryForm.php')">
        <label for="io__form3" class="fog" id="z6"></label>
        <div class="Redact__block">
                <iframe scrolling="auto"  frameborder="0" class="form__window"  id="if3" src=""></iframe>
                <label for="io__form3" class="down button">назад</label>
        </div>

        <input type="checkbox" class="io__form" id="io__form4" name="cb" onchange="SetUrl(this.checked, 'if4','genderForm.php')">
        <label for="io__form4" class="fog" id="z6"></label>
        <div class="Redact__block">
                <iframe scrolling="auto"  frameborder="0" class="form__window"  id="if4" src=""></iframe>
                <label for="io__form4" class="down button">назад</label>
        </div>




        <input type="checkbox" class="io__form" id="io__ask1" name="cb" onchange="SetUrl(this.checked, 'if5','Ask1.php')">
        <label for="io__ask1" class="fog" id="z6"></label>
        <div class="Redact__block">
                <iframe scrolling="auto"  frameborder="0" class="form__window"  id="if5" src=""></iframe>
                <label for="io__ask1" class="down button">назад</label>
        </div>

        <input type="checkbox" class="io__form" id="io__ask2" name="cb" onchange="SetUrl(this.checked, 'if6','Ask2.php')">
        <label for="io__ask2" class="fog" id="z6"></label>
        <div class="Redact__block">
                <iframe scrolling="auto" frameborder="0" class="form__window" id="if6" src=""></iframe>
                <label for="io__ask2" class="down button">назад</label>
        </div>

        <input type="checkbox" class="io__form" id="io__ask3" name="cb" onchange="SetUrl(this.checked, 'if7','Ask3.php')">
        <label for="io__ask3" class="fog" id="z6"></label>
        <div class="Redact__block">
                <iframe scrolling="auto"  frameborder="0" class="form__window" id="if7" src=""></iframe>
                <label for="io__ask3" class="down button">назад</label>
        </div>

        <input type="checkbox" class="io__form" id="io__ask4" name="cb" onchange="SetUrl(this.checked, 'if8','Ask4.php')">
        <label for="io__ask4" class="fog" id="z6"></label>
        <div class="Redact__block">
                <iframe scrolling="auto"  frameborder="0" class="form__window" id="if8" src=""></iframe>
                <label for="io__ask4" class="down button">назад</label>
        </div>




        <input type="checkbox" class="io__menu" id="io__menu">
        <label for="io__menu" class="fog" id="z3"></label>
        <label for="io__menu" class="menu__icon">
            <div class="icon__content">
                Menu
                <div class="line" id="l1"></div>
                <div class="line" id="l2"></div>
            </div>
        </label>
        <div class="menu_block">
            <h3>Формы: </h3>

            <div>
                <label for="io__form1" class="button">Поездки менеджеров</label>
                <label for="io__form2" class="button">Менеджеры</label>
                <label for="io__form3" class="button">Страны</label>
                <label for="io__form4" class="button">Пол</label>
            </div>

            <h3>Запросы: </h3>

            <div>
                <label for="io__ask1" class="button">В какие страны ездил данный менеджер (запрос с параметром)?</label>
                <label for="io__ask2" class="button">Какими языками владеют менеджеры, посетившие Италию?</label>
                <label for="io__ask3" class="button">Пол и фамилия менеджера, посетившего Венгрию?</label>
                <label for="io__ask4" class="button">Список менеджеров, совершивших поездки в феврале и марте 2005 года?</label>
            </div>

            <div style="font-size: 16px; text-align: right; margin-top: 50px;">Made by Kostya Ryabov</div>
        </div>

        <div class="content" id="main">
            
            <?php
                $ask = require_once('connect.php');

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_set_charset($Connect, 'utf8');

                echo "<div id='top_borderM'></div><img class='Loading' src='img/oxygen-loader.gif' width='0px'><table>
                <tr style='--t:0.6s;'>
                    <th>№</th>
                    <th>Дата</th>
                    <th>Пол</th>
                    <th>Менеджер</th>
                    <th>Возраст</th>
                    <th>Страна</th>
                    <th>Язык</th>
                </tr>";

                $sql = "SELECT `Дата`, gender.`Пол` as `pol`, managers.`Фамилия` as `Familia`, `Возраст`, country.`Страна` as `strana`, `Язык` FROM travels,managers,country,gender WHERE managers.`КодМенеджера` = travels.`Менеджер` && country.`КодСтраны` = travels.`Страна` && managers.`Пол` = gender.`КодПола` ORDER BY `Дата` ASC";

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
                            <td>".$assoc['pol']."</td>
                            <td>".$assoc['Familia']."</td>
                            <td>".$assoc['Возраст']."</td>
                            <td>".$assoc['strana']."</td>
                            <td>".$assoc['Язык']."</td>
                        </tr>";
                    }

                    echo "</table><div id='bottom_borderM'></div><br><br>";
                }

                ?>
        </div>
    </body>
</html>