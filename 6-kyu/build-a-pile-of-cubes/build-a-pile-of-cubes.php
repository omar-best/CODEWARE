function findNb($m) {
  $inc=0;
  $sum=0;
    while(true)
      {
      $sum+=$inc*$inc*$inc;
      if($m==$sum)  return $inc;
      if($sum > $m) return -1;
        $inc++; 
    }
}