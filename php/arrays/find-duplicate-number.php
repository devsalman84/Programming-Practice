<?php
$array = [1,2,3,1,2];
$length = count($array);
$temp = [] ;

for($i = 0; $i < $length; $i++){
   for ($j=0; $j < $i; $j++) { 
      if ($array[$i] == $array[$j]) {
         $temp[] = $array[$j];
         break;
      }
   }
}
print_r($temp);
echo '<br>';
echo implode(',', $temp);
?> 