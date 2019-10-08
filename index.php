<html>
<head>
    <title>variables_and_operators</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./stylesheet.css">
</head>

<body>
    <?php
        $zins = 0.05;
        $time = 10;
        $creditsum = 200000;

        $annuitaet = $creditsum * $zins * pow(1 + $zins, $time) / (pow(1 + $zins, $time) - 1);

        echo $annuitaet;
    ?>
</body>
</html>


