<!DOCTYPE html>
<html>
<head>
    <title>Solutions Project Euler</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
</head>
<body>

You are given the following information, but you may prefer to do some research for yourself.
<ul>
    <li>1 Jan 1900 was a Monday.</li>
    <li>Thirty days has September,</li>
    <li>April, June and November.</li>
    <li>All the rest have thirty-one,</li>
    <li>Saving February alone,</li>
    <li>Which has twenty-eight, rain or shine.</li>
    <li>And on leap years, twenty-nine.
            A leap year occurs on any year evenly divisible by 4, but not on a century
            unless it is divisible by 400. How many Sundays fell on the first of the
            month during the twentieth century (1 Jan 1901 to 31 Dec 2000)?</li>
</ul>

<?php
    //dates with 30 9-Sept 11- November 4-April 6-June
    //months with 28 2-feb 28 on leap year
    //year % 4 == 0 if year % 400 == 0

    $dateStartYear = 1900;  //1 Jan 1900 is start date
    $dateStartMonth = 1;    //^^
    $dateStartDay = 1;      //^^
    $sundayCount = 0;       //This hold the number of sundays our loop finds
    $counting = 0;          //use this variable to hold our count
    $yearCount = 1000;      //In case I ever need change my number quickly
    //I need to pass an entire year before I start counting

    for ($i = 0; $i < $yearCount; $i++)
    {
        for ($j = 0; $j < 12; $j++)
        {
            if ($j === 1 || $j === 3 || $j === 5 || $j === 7 || $j === 8 || $j === 10 || $j === 12)
            {
                for ($k= 0; $k < 31; $k++)
                {

                }
            }

            if ($j === 4 || $j === 6 || $j === 9 || $j === 11)
            {

            }
            if ($j === 2)
            {

            }
        }
    }

?>

</body>
</html>