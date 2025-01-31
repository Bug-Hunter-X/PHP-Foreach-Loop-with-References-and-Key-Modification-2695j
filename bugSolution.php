function foo(array &$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

function barCorrected(array $arr) {
  foreach ($arr as $key => $value) {
    $arr[$key]++;
  }
}

$arr = [1, 2, 3];
foo($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$arr = [1, 2, 3];
barCorrected($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )