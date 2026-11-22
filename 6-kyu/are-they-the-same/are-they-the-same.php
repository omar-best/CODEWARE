function comp($a1, $a2) {
  
  if(!is_array($a1) || !is_array($a2)) return false;
    
     rsort($a1);
     rsort($a2);
​
for($i=0;$i<count($a1);$i++)
  {
​
    
     if(count($a1)==count($a2)  )
        {
        if($a2[$i]!=pow($a1[$i],2)) return false;
​
        }
       else return false;
    };
    
  return true;
}