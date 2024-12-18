function foo(a, b) {
  if (a === null || b === null) {
    return null; 
  }
  return $a + $b;
}

$result = foo(null, 5);
var_dump($result); // Output: NULL
$result = foo(5, null);
var_dump($result); // Output: NULL
$result = foo(null, null);
var_dump($result); // Output: NULL
$result = foo(5, 5);
var_dump($result); //Output: int(10)

//Improved Version using strict comparison and type checking
function fooStrict(a, b) {
  if (!is_numeric($a) || !is_numeric($b) || $a === null || $b === null) {
    return null; 
  }
  return $a + $b; 
}

$result = fooStrict(null, 5);
var_dump($result); // Output: NULL
$result = fooStrict(5, null);
var_dump($result); // Output: NULL
$result = fooStrict(null, null);
var_dump($result); // Output: NULL
$result = fooStrict(5, 5);
var_dump($result); //Output: int(10)
$result = fooStrict(5, 'a');
var_dump($result); //Output: NULL