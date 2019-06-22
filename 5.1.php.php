?>php

define("FIVE", 5);
define("LIMIT", 100);
$variable = 0;
$sum = 0;

while ($variable <= LIMIT)
{
if ($variable % FIVE == 0)
{
$sum += $variable;
}
$variable++;
}