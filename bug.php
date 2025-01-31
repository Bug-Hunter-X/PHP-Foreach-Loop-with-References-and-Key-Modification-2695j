function foo(array &$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$arr = [1, 2, 3];
foo($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

function bar(array $arr) {
  foreach ($arr as $key => &$value) {
    $arr[$key] = $value++;
  }
}

$arr = [1, 2, 3];
bar($arr);
print_r($arr); // Output: Array ( [0] => 1 [1] => 2 [3] => 4 )