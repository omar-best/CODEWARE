function findNeedle($haystack) {
  foreach($haystack as $index => $value)
    {
       if($value === "needle")
         {
          return "found the needle at position ".$index;
       }    
  }
}