<!DOCTYPE html>
<html>
<head>
    <title>Solutions Project Euler</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
</head>
<body>
<h1>Summation of primes</h1>

<h2>Problem 10 </h2>

<div class = "paragraphGrouping">

    <p>The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17. </p>

    <p>Find the sum of all the primes below two million.</p>

    <?php
    //can't figure this out... need sleep!
    $primeNumbers = array(); //our array for putting our primes in
    $isAPrime = true; //is this a prime? used to know when to put a number in the array
    $total = 0; //default number for our total value

    for ($i = 1; $i < 5; $i++) //break this loop up into 4 segments to get around memory issue
    {
        for ($j = 1 + (($i * 500000) - 500000); $j < $i * 500000; $j+=2) //do this 500k at a time
        {                                                                //above we get rid of even numbers
            for ($k = 3; $k < 9; $k++) //lets find out if any of this numbers are divisible by 3-8
            {
                if ($j % $k === 0)
                {
                    $isAPrime = false;
                }
            }
            if ($isAPrime == true)
            {
                $primeNumbers[] = $j;
            }
            $isAPrime = true;
        }
    }

    for ($i = 0; $i < count($primeNumbers); $i++)
    {
        $total += $primeNumbers[$i];
    }

    ?>
    <p>Found: <?php echo $total; ?> </p>
</div>
</body>
</html>