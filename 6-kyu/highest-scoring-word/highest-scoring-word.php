function high($x) {
  $str=explode(' ', $x);
  $point_max=0;
  $high_word="";
  foreach($str as $word)
    {
    $sum=0;
    for($i=0;$i<strlen($word);$i++)
      {
      $sum+=ord($word[$i])-96;
    };
    if($sum>$point_max)
      {
      $point_max=$sum;
      $high_word=$word;
    };
  };
    return $high_word;
}