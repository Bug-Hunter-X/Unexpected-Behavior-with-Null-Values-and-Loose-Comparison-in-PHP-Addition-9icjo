function foo(a, b) {
  if (a === null || b === null) {
    return null; 
  }
  return a + b;
}

$result = foo(null, 5);
var_dump($result); // Output: NULL
$result = foo(5, null);
var_dump($result); // Output: NULL
$result = foo(null, null);
var_dump($result); // Output: NULL
$result = foo(5, 5);
var_dump($result); //Output: int(10)