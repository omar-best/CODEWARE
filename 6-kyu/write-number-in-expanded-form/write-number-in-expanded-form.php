function expanded_form(int $n): string {
  $arr_dep=[];
  $len=strlen((string) $n);
  for($i=0;$i<$len;$i++)
    {
    $mod=$n%10;
    $n=intdiv($n,10);
    if($mod!=0)
      {
      array_push($arr_dep,$mod*(10**$i));
    }
  }
  rsort($arr_dep);
  $result = implode(' + ', $arr_dep);
  return  $result;
  
​
​
}