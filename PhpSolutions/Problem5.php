<!DOCTYPE html>
<html>
<head>
    <title>Solutions Project Euler</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
</head>
<body>

<h1>Smallest multiple</h1>

<h2>Problem 5</h2>

<div class = "paragraphGrouping">

    <p>2520 is the smallest number that can be
        divided by each of the numbers from 1 to 10 without any remainder.</p>

    <p>What is the smallest positive number that is evenly divisible by
        all of the numbers from 1 to 20? </p>

    <?php
    //I have no idea how to do this more efficiently
    //Increasing by a number we're already given cuts down
    //on the time it spends running
    $num1 = 2520; $solutionFound = false;
    do
    {
        $num1 += 2520;
        for ($i = 2; $i <= 19; $i++)
        {
            if ($num1 % $i === 0)
            {
                $solutionFound = true;
            }
            else
            {
                $solutionFound = false;
                break;
            }
        }
    }while(!$solutionFound);
    ?>
    <p>Found: <?php echo $num1; ?> </p>
</div>
</body>
</html>