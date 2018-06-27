# homeWork-1-3


<pre><code>
&lt;?php
/*
 * Created by PhpStorm.
 * User: Сергей Люляев
 * Date: 27.06.2018
 * Time: 14:08
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
        } elseif ($first &gt; $x) {
            return false;
        }
    } while ($first &lt; $x);
}

if (isset($_GET['number'])) {
    $num = $_GET['number'];
    $inNumberRow = &quot;Задуманное число &quot; . $num . &quot; входит в числовой ряд&quot;;
    $notInNumberRow = &quot;Задуманное число &quot; . $num . &quot; НЕ входит в числовой ряд&quot;;
}
?&gt;

&lt;!doctype html&gt;
&lt;html lang=&quot;ru&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot;
          content=&quot;width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0&quot;&gt;
    &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;ie=edge&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;./css/style.css&quot;&gt;
    &lt;title&gt;1.3(Фибоначчи)&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;a href=&quot;https://ru.wikipedia.org/wiki/&quot;target=&quot;_blank&quot;&gt;&lt;h1&gt;Числа Фибоначчи&lt;/h1&gt;&lt;/a&gt;&lt;hr&gt;

&lt;form action=&quot;index.php&quot;&gt;
    &lt;input type=&quot;number&quot; placeholder=&quot;Введите число&quot; name=&quot;number&quot;&gt;
    &lt;button type=&quot;submit&quot;&gt;Проверить&lt;/button&gt;
&lt;/form&gt;

&lt;?php if (isset($num)) : ?&gt;
    &lt;p&gt;&lt;?php echo(number($num) ? $inNumberRow : $notInNumberRow); ?&gt;&lt;/p&gt;
&lt;?php endif; ?&gt;

&lt;/body&gt;
&lt;/html&gt;
    </code></pre>
