<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-01-30
 * Time: 14:06
 */

function displayPrimeNo()
{
    /** @var  $numberToCheck  Number to be checked whether Prime or not*/
    echo "The PrimeNumbers are \n";

    $primeNumbers = array();

    // $numberToCheck =  1；
    //$numberToCheck =  end($primeNumbers) + 1;
    //reset($primeNumbers);
    $numberToCheck = 2;
    while (true)
    {

        $isDividable = false;
        $limit  = floor(sqrt($numberToCheck));
        foreach ($primeNumbers as $divisorNumber) {
            if ($divisorNumber > $limit) {
                break;
            }
            if ($numberToCheck % $divisorNumber == 0) {
                $isDividable = true;
                break;
            }
        }

        /** Printing Prime numbers */
        if (!$isDividable ) {
            echo $numberToCheck.",\n";
            $primeNumbers[] = $numberToCheck;
        }

        $numberToCheck = $numberToCheck+1;

    }
}
displayPrimeNo();

?>