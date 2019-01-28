<?php
function displayPrimeNo()
{
    $iNbrToCheckPrime = 0;
    while (1==1)
    {
        $iNbrToCheckPrime = $iNbrToCheckPrime + 1;
        $isDividableCnt = 0;
        for ($iDivisorNo = 1; $iDivisorNo <= $iNbrToCheckPrime; $iDivisorNo++) {
            if ($iNbrToCheckPrime % $iDivisorNo == 0) {
                $isDividableCnt++;
            }
        }
        if ($isDividableCnt == 2) {
            echo $iNbrToCheckPrime." is Prime number \n";
        }
    }
}

displayPrimeNo();

?>