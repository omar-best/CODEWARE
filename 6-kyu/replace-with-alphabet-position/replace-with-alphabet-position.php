function alphabet_position(string $s): string {
  $keep='';
  for($i=0;$i<strlen($s);$i++)
    {
     if(ctype_alpha($s[$i]))
       {
       $alph= (string)(ord(strtolower($s[$i]))-96);
       $keep.=$alph.' ';
      
     }
  }
  
  return trim($keep);
}