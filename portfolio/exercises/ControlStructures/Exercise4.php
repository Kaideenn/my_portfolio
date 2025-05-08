<?php
   $WorkingHours = 9000;
   $year = 6;
   $failurePerYear = 24;

   if($WorkingHours >= 10000 || $year >= 7 || $failurePerYear >= 25){
     echo "The Machine must be replace";
   }else{
     echo "The Machine is in good conditions";
   }
?>