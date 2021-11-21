<form action="page1.php">
    <h1>Практика 2.Условия</h1>
    <h2>Задание 1</h2>
    <h3>Определение четное введеное значение или нет</h3>
    <div class="formIn">
        <label for="valOne">Значение 1:</label>
        <input id="valOne" name="valueOne" type="text" placeholder="введите число" style="margin: 1em">
    </div>
    <div class="formIn">
        <button name="button" type="submit" style="background-color: coral"> Отправить</button>
    </div>
</form>

<?php
if (isset($_GET['button'])) {
    echo '<pre>';
    $num = $_GET['valueOne'];
    if ($num % 2 === 0) {
        echo "Ваше число четное";
    } else echo "Ваше число нечетное";
    echo '</pre>';
}
?>

<form action="page1.php">
    <h2>Задание 2</h2>
    <h3>Определение какое из введеных значений больше</h3>
    <div class="formIn">
        <label for="valTwo">Значение 1:</label>
        <input id="valTwo" name="valTwo" type="text" placeholder="введите число 1" style="margin: 1em">
    </div>
    <div class="formIn">
        <label for="valThree">Значение 2:</label>
        <input id="valThree" name="valThree" type="text" placeholder="введите число 2" style="margin: 1em">
    </div>
    <div class="formIn">
        <button name="button" type="submit" style="background-color: coral">Отправить</button>
    </div>
</form>
<?php
$num = $_GET['valTwo'];
$num1 = $_GET['valThree'];
if ($num > $num1) {
    echo "Значение " . $num . " больше " . $num1;
} else echo "Значение " . $num1 . " больше " . $num;
?>

<form action="page1.php">
    <h2>Задание 3</h2>
    <h3>Изменение знака числа при его отрицательном значении</h3>
    <div class="formIn">
        <label for="valFour">Значение 1:</label>
        <input id="valFour" name="valFour" type="text" placeholder="введите число" style="margin: 1em">
    </div>
    <div class="formIn">
        <button name="button" type="submit" style="background-color: coral">Отправить</button>
    </div>
</form>
<?php
$num = $_GET['valFour'];
if ($num < 0) {
    echo "Т.к. значение " . $num . " отрицательное, поменяем знак на противоположный " . -$num;
}
?>


<form action="page1.php">
    <h2>Задание 4</h2>
    <h3>Вывести квадрат числа в диапазоне от А до В</h3>
    <div class="formIn">
        <label for="valFive">Значение 1:</label>
        <input id="valFive" name="valFive" type="text" placeholder="введите число" style="margin: 1em">
    </div>
    <div class="formIn">
        <label for="valA">Значение A:</label>
        <input id="valA" name="valA" type="text" placeholder="введите число " style="margin: 1em">
    </div>
    <div class="formIn">
        <label for="valB">Значение B:</label>
        <input id="valB" name="valB" type="text" placeholder="введите число " style="margin: 1em">
    </div>
    <div class="formIn">
        <button name="button" type="submit" style="background-color: coral">Отправить</button>
    </div>
</form>
<?php
$num = $_GET['valFive'];
$numa = $_GET['valA'];
$numb = $_GET['valB'];
if ($numa < $numb) {
    if ($num < $numa) {
        $min = $numa - $num;
        echo "Число меньше минимального на " . $min;
    } else if ($num > $numb) {
        $max = $num - $numb;
        echo "Число больше максимального на " . $max;
    } else {
        $sqarV = $num * $num;
        echo "Квадрат числа " . $num . " равен " . $sqarV;
    }
} else if ($numb < $numa) {
    if ($num < $numb) {
        $min = $numb - $num;
        echo "Число меньше минимального на " . $min;
    } else if ($num > $numa) {
        $max = $num - $numa;
        echo "Число больше максимального на " . $max;
    } else {
        $sqarV = $num * $num;
        echo "Квадрат числа " . $num . " равен " . $sqarV;
    }
}
?>


<form action="page1.php">
    <h2>Задание 5</h2>
    <h3>Вывод тега заголовка</h3>
    <div class="formIn">
        <label for="valSizeTitle">Значение от 1 до 6:</label>
        <input id="valSizeTitle" name="valSizeTitle" type="text" placeholder="введите число" style="margin: 1em">
    </div>
    <div class="formIn">
        <button name="button" type="submit" style="background-color: coral">Отправить</button>
    </div>
</form>
<?php
$num = $_GET['valSizeTitle'];
if ($num >= 1 && $num <= 6) {
    echo "<h" . $num . ">Заголовок " . $num . "-го порядка</h" . $num . ">";
} else
    echo "Заголовка такого уровня не существует";
?>


<form action="page1.php">
    <h2>Задание 6</h2>
    <h3>Определение времени года, месяца и часть месяца</h3>
    <div class="formIn">
        <label for="valDay">Введите день от 1 до 31:</label>
        <input id="valDay" name="valDay" type="text" placeholder="введите число" style="margin: 1em">
    </div>
    <div class="formIn">
        <label for="valMonth">Введите месяц от 1 до 12:</label>
        <input id="valMonth" name="valMonth" type="text" placeholder="введите число" style="margin: 1em">
    </div>
    <div class="formIn">
        <button name="button" type="submit" style="background-color: coral">Отправить</button>
    </div>
</form>
<?php
$day = $_GET['valDay'];
$month = $_GET['valMonth'];
$FirstH = "Первая половина месяца";
$SecondH = "Вторая половина месяца";
function month($month)
{
    switch ($month) {
        case 1:
            return array("январь", "зима");
        case 2:
            return array("февраль", "зима");
        case 3:
            return array("март", "весна");
        case 4:
            return array("апрель", "весна");
        case 5:
            return array("май", "весна");
        case 6:
            return array("июнь", "лето");
        case 7:
            return array("июль", "лето");
        case 8:
            return array("август", "лето");
        case 9:
            return array("сентябрь", "осень");
        case 10:
            return array("октябрь", "осень");
        case 11:
            return array("ноябрь", "осень");
        case 12:
            return array("декабрь", "зима");
    }
}


if ($month > 0 && $month <= 12) {
    $mon = month($month);
    if ($day <= 31 && $day > 0) {
        if ($mon[0] === "февраль") {
            if ($day <= 29) {
                echo "День = " . $day . " Месяц = " . $month;
                if ($day <= 14) {
                    echo "<br>" . "Сейчас " . $mon[1] . ", " . $mon[0] . ". " . $FirstH;
                } else {
                    echo "<br>" . "Сейчас " . $mon[1] . ", " . $mon[0] . ". " . $SecondH;
                }
            } else {
                echo "День = " . $day . " Месяц = " . $month;
                echo "В " . $mon[0] . " не может быть " . $day . "дней";
            }
        }
        if ($mon[0] == "апрель" || $mon[0] == "июнь" || $mon[0] == "сентябрь" || $mon[0] == "ноябрь") {
            if ($day <= 15) {
                echo "День = " . $day . " Месяц = " . $month . "<br>";
                echo "Сейчас " . $mon[1] . ", " . $mon[0] . ". " . $FirstH;
            } else {
                echo "День = " . $day . " Месяц = " . $month;
                echo "<br>" . "Сейчас " . $mon[1] . ", " . $mon[0] . ". " . $SecondH;
            }
        } else {
            if ($day <= 15) {
                echo "<br>" . "Сейчас " . $mon[1] . ", " . $mon[0] . ". " . $FirstH;
            } else {
                echo "<br>" . "Сейчас " . $mon[1] . ", " . $mon[0] . ". " . $SecondH;
            }
        }
    } else echo "Столько дней нет природе";
} else echo "Столько месяцев нет природе";
?>


<form action="page1.php">
    <h2>Задание 7</h2>
    <h3>Конвертер единиц памяти</h3>
    <div class="formIn">
        <label for="valMem">Введите объем памяти:</label>
        <input id="valMem" name="valMemory" type="text" placeholder="введите число" style="margin: 1em">
    </div>
    <div class="formIn">
        <select name="sel-param" id="sel-1">
            <option value="B" id="par-B">B</option>
            <option value="kB" id="par-kB">kB</option>
            <option value="MB" id="par-MB">MB</option>
            <option value="TB" id="par-TB">TB</option>
        </select>
    </div>
    <div class="formIn">
        <button name="button-1" type="submit" style="background-color: coral; margin: 1em">Отправить</button>
    </div>

</form>
<?php
$memoryData = $_GET['valMemory'];
$memoryInByte = $_GET["sel-param"];
$valueOut = 0;

    if(isset($_GET['button-1']) && isset($_GET['valMemory'])) {
        switch ($memoryInByte) {

            case 'B':
                $valueOut = $memoryData;
                break;
            case 'kB':
                $valueOut = $memoryData/1024;
                break;
            case 'MB':
                $valueOut = $memoryData/1048576;
                break;
            case 'GB':
                $valueOut = $memoryData/1073741824;
                break;
        }
        echo '<div style="border: 1px solid #003A66; margin: 1em"' . ">" . $memoryData . "B = ".$valueOut . $memoryInByte . '</div>';
    }
    else {
        echo '<div style="border: 1px solid #003A66; margin: 1em"' . ">" . "Такого значения нет" . '</div>';
    }
?>