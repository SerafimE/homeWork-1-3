<?php
/*
 * Created by PhpStorm.
 * User: Сергей Люляев
 * Date: 27.06.2018
 * Time: 20:08
 */
function number($x)
{
    $first = $second = 1;
    do {
        $third = $first;
        $first += $second;
        $second = $third;
        if (($first == $x) || ($x == 1)) {
            return true;
        } elseif ($first > $x) {
            return false;
        }
    } while ($first < $x);
}

if (isset($_GET['number'])) {
    $num = $_GET['number'];
    $inNumberRow = "Задуманное число " . $num . " входит в числовой ряд";
    $notInNumberRow = "Задуманное число " . $num . " НЕ входит в числовой ряд";
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>1.3(Фибоначчи)</title>
</head>
<body>
<a href="https://ru.wikipedia.org/wiki/%D0%A7%D0%B8%D1%81%D0%BB%D0%B0_%D0%A4%D0%B8%D0%B1%D0%BE%D0%BD%D0%B0%D1%87%D1%87%D0%B8"
   target="_blank"><h1>Числа Фибоначчи</h1></a>
<hr>
<form action="index.php">
    <input type="number" placeholder="Введите число" name="number">
    <button type="submit">Проверить</button>
</form>

<?php if (isset($num)) : ?>
    <p><?php echo(number($num) ? $inNumberRow : $notInNumberRow); ?></p>
<?php endif; ?>

</body>
</html>
