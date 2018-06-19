<?php

function number($x) {
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
    $inNumberRow = "задуманное число " . $num . " входит в числовой ряд";
    $notInNumberRow = "задуманное число " . $num . " НЕ входит в числовой ряд";
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>1-3</title>
    <style>
        * {
            font-size: 32px;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<form action="index.php">
    <input type="number" placeholder="Введите число" name="number" required>
    <button type="submit">Проверить</button>
</form>

<?php if (isset($num)) : ?>
    <p><?php echo (number($num) ? $inNumberRow : $notInNumberRow); ?></p>
<?php endif; ?>

</body>
</html>
