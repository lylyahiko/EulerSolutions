<!DOCTYPE html>
<html>
<head>
    <title>Solutions Project Euler</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>


<h1>Solutions to the problems</h1> <p></p><p></p>
<h1>Multiples of 3 and 5</h1>
<h2>Problem 1</h2>
<div class = "paragraphGrouping">
    <p>If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9.
        The sum of these multiples is 23. Find the sum of all the multiples of 3 or 5 below 1000.</p>

    <?php
    $total=0;

    $time = microtime(1);

    for ($i = 0; $i < 1000; $i++) {
        if(($i % 3 === 0 || $i % 5 === 0) && $i > 0)
        {
            $total += $i;
        }
    }

    echo $total. " " . (microtime(1) - $time) . "\n\n";
    ?>

    <hr>

    <?php
    $time = microtime(1);
    $total = 0;
    $limit = 1000 - 1;
    function sumOfX($num, $limit){
        $count = floor($limit/$num);
        $temp = ($num + ($num * $count));
        $sumOfX = $temp * $count/2.0;
        return $sumOfX;
    }

    $sumOfThree = sumOfX(3, $limit);
    $sumOfFive = sumOfX (5, $limit);

    echo ($sumOfThree + $sumOfFive - sumOfX(15,$limit)) . " " . (microtime(1) - $time);

	?>
</div>
</body>
</html>