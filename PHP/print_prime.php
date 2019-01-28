<?php
function displayPrimeNo()
{
    /** @var  $numberToCheck  Number to be checked whether Prime or not*/
    $numberToCheck = 0;
    while (true)
    {
        $numberToCheck ++;
        $isDividable = false;
        for ($divisorNumber = 2; $divisorNumber < $numberToCheck; $divisorNumber++) {
            if ($numberToCheck % $divisorNumber == 0) {
                $isDividable = true;
                break;
            }
        }
        if (!$isDividable ) {
            echo $numberToCheck." is Prime number \n";
        }
    }
}

displayPrimeNo();

?>