<?php
function displayPrimeNo()
{
    /** @var  $numberToCheck  Number to be checked whether Prime or not*/
    $numberToCheck = 0;
    echo "The PrimeNumbers are \n";
    while (true)
    {
        $numberToCheck = $numberToCheck+1;
        /** Even numbers are not prime;
        Check only the odd numbers whether it is prime*/
        if ($numberToCheck ==1 or $numberToCheck == 2) {
            $isDividable = false;
        }
        if ($numberToCheck % 2 != 0) {
            $isDividable = false;
            $sqrtNumber  = floor(sqrt($numberToCheck));
            for ($divisorNumber = 2; $divisorNumber <= $sqrtNumber; $divisorNumber+=1) {
                if ($numberToCheck % $divisorNumber == 0) {
                    $isDividable = true;
                    break;
                }
            }
            /** Printing Prime numbers */
            if (!$isDividable ) {
                echo $numberToCheck."\n";
            }

        }

    }
}
displayPrimeNo();

?>
