function partsSums($ls) {
  $total = array_sum($ls);
  $arr_sum = [$total];
​
  foreach ($ls as $num) {
    $total -= $num;
    $arr_sum[] = $total;
  }
​
  return $arr_sum;
}