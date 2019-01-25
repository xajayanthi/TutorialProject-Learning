<?php
function fn_display_prime_no()
{

  while(1==1)
  {
          $i=$i+1;
          $ctr = 0;
          for($j=1;$j<=$i;$j++)
          {
                if($i % $j==0)
                {
                      $ctr++;
                }
          }

          if($ctr==2)
          {
               echo $i." is Prime \n";
          }
  }
}

fn_display_prime_no();
?>
