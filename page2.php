<form action="page2.php">
    <h1>Практика 3.Циклы</h1>
    <h2>Задание 1</h2>
    <h3>Вывести первые 10 четных чисел</h3>
    <div class="formIn">
        <label for="valOne">Укажите начало отсчета:</label>
        <input id="valOne" name="valueOne" type="text" placeholder="введите число" style="margin: 1em">
    </div>
    <div class="formIn">
        <button name="button" type="submit" style="background-color: coral"> Отправить</button>
    </div>
</form>

<?php
$valUser = $_GET['valueOne'];
$but = $_GET['button'];
$inkrim = 1;

if ($valUser % 2 !== 1) {
    while ($inkrim <= 11) {
        /* echo $valUser. "\n"; */
        /*$fontsize = inkrim*5;
        print_r($fontsize);*/
        echo '<span style="' . "font-size: " . $valUser . 'px; ' . 'color:green";' . ">" . $valUser . "</" . "span>" . "\n";
        $sum += $valUser;
        $valUser += 2;
        $inkrim++;
    }
    echo "<br>" . "Сумма всех значений = " . $sum;
    echo "<br>" . "Среднее значение = " . $sum / 10;

} else {
    echo "число отрицательное";
}
?>


<form action="page2.php">
    <h2> Задание 2 </h2>
    <h3>Является ли число простым</h3>
    <div class="formIn">
        <label for="id-2">Укажите число:</label>
        <input id="id-2" name="valueTwo" type="text" placeholder="введите число" style="margin: 1em">
    </div>
    <div class="formIn">
        <button name="button" type="submit" style="background-color: coral"> Отправить</button>
    </div>
</form>

<?php
$valUserTwo = $_GET['valueTwo'];
$count = 0;
for ($i = 1; $i < $valUserTwo; $i++) {
    $val = $valUserTwo % $i;
    if ($val === 0 && $i !== 2) {
        echo "Ваше число " . $valUserTwo . " непростое";
        break;
    } else {
        ++$count;
    }
}
echo "\n" . $count . "\n";
if ($count = 1) {
    echo "Ваше число " . $valUserTwo . " простое";
}
?>

<style>
    .circle {
        position: absolute;
        top: 50px;
        left: 50px;
        border: 1px solid red;
        border-radius: 50%;
    }
</style>
<form action="page2.php">

    <h2> Задание 3 </h2>
    <h3>Скрипт который строит заданное количество элипсов</h3>
    <div class="formIn">
        <label for="id-3">Укажите число:</label>
        <input id="id-3" name="valueThree" type="text" placeholder="введите число" style="margin: 1em">
    </div>
    <div class="formIn">
        <button name="button" type="submit" style="background-color: coral"> Нарисовать</button>
    </div>
</form>

<?php
$valueThree = $_GET['valueThree'];
$valWandH = 20;
echo '<div style="' . 'position:' . 'relative">';
for ($i = 1; $i <= $valueThree; $i++) {
    echo '<div class="' . 'circle"' . ' style="' . "width: " . $valWandH . 'px; ' . "height: " . $valWandH . 'px; ' . 'color:green"' . ">" . "</" . "div>" . "\n";
    $valWandH += 15;
}
echo "</" . "div>";
?>


<form action="page2.php">
    <h2> Задание 4 </h2>
    <h3>Найти количество 4-значных чисел, в которых</h3>
</form>

<?php
for ($i = 1000; $i < 10000; $i++) {
    $Z = floor($i / 1000);
    $Y = floor($i / 100) - ($Z * 10);
    if ($Z === $Y) {
        $C = ($i / 10) - ($Z * 100) - ($Y * 10);
        /*$C = (int)substr($i, -2);*/
        if ($C === $Z) {
            $N = (int)substr($i, -1);
            echo $Z." ".$Y." ".$C." ".$N."<br>";
            if ($N === $Z) {

                echo "Верое значение " . $i . "<br>";
            }
        }
    }
}
?>

<form action="page2.php">

    <h2> Задание 5 </h2>
    <h3>Перевести число из десятичной в двоичную систему
        счисления</h3>
    <div class="formIn">
        <label for="id-4">Укажите число:</label>
        <input id="id-4" name="valueFour" type="text" placeholder="введите число" style="margin: 1em">
    </div>
    <div class="formIn">
        <button name="button" type="submit" style="background-color: coral">Конвертировать</button>
    </div>
</form>

<?php
$valueFour = $_GET['valueFour'];
$x=0;
$y=1;
echo "<p>В двоичной форме: ";
while ($y>=1){
    $x=(int)$valueFour%2;
    $y=((int)$valueFour/2);
    echo $x." ";
    if ($x!==0){
        $y-=0.5;
        $valueFour=$y;
        continue;
    }
    $valueFour=$y;
}
echo "</p>";
?>


<form action="page2.php">
    <h2> Задание 6 </h2>
    <h3>Вывести на экран шахматную доску элементом «таблица»</h3>
    <div class="formIn">
        <button name="button" type="submit" style="background-color: coral">Вывести шахматную доску</button>
    </div>
</form>

<?php
if (isset($_GET['button'])) {
    echo '<div' . 'style="' . "width=50%" . '">';
    echo "<table>.<caption>Таблица № 1</caption>";
    for ($i = 1; $i <= 8; $i++) {
        echo "<tr>";
        for ($j=1;$j<=8;$j++){
            $h=$i%2;
            $v=$j%2;
            if ($h!==0 && $v!==0){
                echo "<th style='background-color: white; width: 40px; height: 40px;'>";
                echo "</th>";
            }
            elseif ($h===0 && $v===0){
                echo "<th style='background-color: white; width: 40px; height: 40px;'>";
                echo "</th>";
            }
            else
                echo "<th style='background-color: black; width: 40px; height: 40px;'>";
                echo "</th>";
        }
      echo "</tr>";
  }
    echo "</table></div>";
}
