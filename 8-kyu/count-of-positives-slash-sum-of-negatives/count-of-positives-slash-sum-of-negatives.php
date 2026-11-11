function countPositivesSumNegatives($input) {
  
    $count=0;
    $sum=0;
    if(empty($input))
      {
       return[];
    }
  foreach ($input as $value)
    {
      if($value>0)
        {
          $count++;
      }
    else{
      if($value != 0)
        $sum+=$value;
    }
  }
  
  
  return array($count,$sum);
}