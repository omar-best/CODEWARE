<?php
  
function disemvowel(string $s): string  {
   $array=['a','o','u','i','e'];
  $keep="";
  for($i=0;$i<strlen($s);$i++)
    {
      
    if(!in_array(strtolower($s[$i]), $array, false))
      {
      $keep.=$s[$i];
    }
  }
     return $keep;
}
​