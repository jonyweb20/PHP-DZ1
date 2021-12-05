<style>
    body {
        background: darkseagreen;
    }

    .block {
        display: flex;
        flex-direction: column;
        width: 50%;
        align-content: center;
        border: 1px solid blueviolet;
        border-radius: 5%;
        margin: 2em;
        padding: 1em;
        background-color: lightslategray;
    }

    .block-list {
        display: inline-block;
    }

    .one {
        color: red;
        font-size: 20px;

    }

    .multi {
        color: blue;
        font-size: 20px;
    }

    span {
        margin-bottom: 1em;
    }

    .table {
        display: flex;
        width: 100%;
        background-color: green;
        padding: 1em;
        border-radius: 5%;
    }

    .table-citrus {
        display: flex;
        width: fit-content;
        background-color: darkgoldenrod;
        padding: 1em;
        border-radius: 5%;
    }
    img {
        display: inline-block;
        /*width: 20%;*/
        border-radius: 40%;
    }
    .img {
        display: flex;
        width: content-box;

        padding: 1em;

    }
    .tr {
        padding-left: 1em;
    }
</style>

<h1>МАССИВЫ</h1>
<!--ЗАДАНИЕ 1-->
<div class="block">
    <?php
    $ar1 = [4, 1, 3, 2, 8, 5, 11, 13, 6, 7];
    echo "<h2>";
    echo "Все элементы массива:";
    foreach ($ar1 as $key => $value) {
        echo $value . ", ";
    }
    echo "</h2>";
    echo "<br>";
    echo "<h2>";
    echo "Четные числа:";
    foreach ($ar1 as $key => $value) {
        $num = $value % 2;
        if ($num === 0) {
            echo $value . ", ";
        }
    }
    echo "</h2>";
    echo "<br>";
    echo "<h2>";
    echo "MAX:" . max($ar1) . ", " . "MIN:" . min($ar1);
    echo "</h2>";
    echo "<br>";
    echo "<h2>";
    echo "Сортированный массив:";
    sort($ar1);
    foreach ($ar1 as $key => $value) {
        echo "$value" . ", ";
    }
    echo "</h2>";
    ?>
</div>

<!--ЗАДАНИЕ 3-->

<div class="block">
    <?php
    $ar2 = [3, 3, 1, 5, 6, 9, 7, 3, 1, 5];
    echo "Все элементы массива:";
    foreach ($ar2 as $key => $value) {
        echo $value . ", ";
    }
    echo "<br>";
    $result = array_count_values($ar2);
    foreach ($result as $key => $val) {
        if ($val === 1) {
            echo "<pre>";
            print_r("<p class='one'>" . "<span style='font-weight:bold'>" . $key . "</span>" . " - " . ($val) . "</p>");
            echo "<pre>";
        } else {
            echo "<pre>";
            print_r("<p class='multi'>" . "<span style='font-weight:bold'>" . $key . "</span>" . " - " . ($val) . "</p>");
            echo "<pre>";
        }

    }
    ?>
</div>
<!--ЗАДАНИЕ 4-->

<div class="block-list">
    <?php
    $arrfruity = [
        "Orange" => [
            "Type" => "Citrus",
            "Price" => 20,
            "Amount" => 2
        ],
        "Banana" => [
            "Type" => "Fruit",
            "Price" => 10,
            "Amount" => 6
        ],
        "Lemon" => [
            "Type" => "Citrus",
            "Price" => 10,
            "Amount" => 7
        ],
        "Apple" => [
            "Type" => "Fruit",
            "Price" => 15,
            "Amount" => 3
        ],
        "Kiwi" => [
            "Type" => "Fruit",
            "Price" => 5,
            "Amount" => 1
        ]
    ];
    ?>
    <h1>ALL</h1>
    <div class="table">
        <?php
        function table($v)
        {
            foreach ($v as $kv => $vm) {
                print_r(
                    "<tr>" . "<td>" . $kv . "</td>" . "<td>" . $vm . "</td>" . "</tr>" . "<br>"
                );
            }
            if (gettype($v["Amount"]) === 'integer' && $v["Amount"] > 0) {
                $sum = $v["Price"] * $v["Amount"];
                print_r("<tr>" . "<td>" . "Total Price" . "</td>" . "<td>" . $sum . "</td>" . "</tr>");
            }

        }

        foreach ($arrfruity as $k => $vt) {
            print_r("<table class='tr'>");
            print_r(
                "<tr>" . "<th>" . $k . "</th>" . "</tr>");
            table($vt);
            print_r("</table>");
        }
        ?>
    </div>
    <h1>CITRUS</h1>
    <div class="table-citrus">
        <?php
        foreach ($arrfruity as $k => $vm) {
            if ($vm["Type"] === "Citrus") {
                print_r("<table class='tr'>");
                print_r(
                    "<tr>" . "<th>" . $k . "</th>" . "</tr>");
                table($vm);
                print_r("</table>");
            }
        }
        ?>
    </div>
    <div class="table-citrus">
        <h1>Total Price:
            <?php
            $total = 0;
            foreach ($arrfruity as $k => $vm) {
                if (gettype($vm["Amount"]) === 'integer' && $vm["Amount"] > 0) {
                    $sum = $vm["Price"] * $vm["Amount"];
                    $total += $sum;
                }
            }
            print_r("<tr>" . "<td>" . $total . "</td>" . "</tr>");
            ?>
        </h1>
    </div>
</div>
<!--ЗАДАНИЕ 5-->
<div class="block">
    <?php
    $ar5 = ["AF" => "Afghanistan", "AN" => "Angola", "BELG" => "Belgium", "NOR" => "Norway", "ROM" => "Romania", "POL" => "Poland", "JAP" => "Japan", "CHIN" => "China", "RUS" => "Russia", "GEORG" => "Georgia"];
    echo "Некоторые страны мира:";
    echo "<select class='form-control' name='country'>";
    $count = 0;
    foreach ($ar5 as $key => $value) {
        if ($value !== "") {
            $count += 1;
            print_r("<option value='$key'>" . $count . ". " . $value . "</option>");
        }
    }
    echo "</select>";
    ?>
</div>

<!--ЗАДАНИЕ 6-->
<div class="block">
    <?php
    $ar6 = [
        "Youtube" => ["image" => 'img/youtube.png',"description"=>"Видеохостинг", "href"=>"https://www.youtube.com"],
        "Facebook" => ["image" => "img/facebook.png", "description"=>"Крупнейшая социальная сеть в мире", "href"=>"https://www.facebook.com/"],
        "Google" => ["image" => "img/google.png", "description"=>"Американская транснациональная корпорация", "href"=>"https://www.google.ru/"],
        "Gmail" => ["image" => "img/gmail.jpg", "description"=>"Бесплатная почтовая служба от компании Google", "href"=>"https://www.gmail.com"]
    ];
    $pattern="/A-Za-z\/A-Za-z\.a-z{3}/";
    foreach ($ar6 as $key => $value) {
        echo "<div class='img'>";
        if (preg_match($pattern,$value[image],$matches)){
print_r("<a href='$value[image]'>$value[description]</a>");
        echo "</div>";
    }
    else{
        print_r("<img src='$value[image]'>");
    }
    }
    ?>
</div>
