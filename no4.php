<?php 
// PHP program to find LCM of two numbers 
  
// Recursive function to  
// return gcd of a and b 
function gcd( $a, $b) 
{ 
      
    // base case 
    if ($a == $b) 
        return $a; 
  
    // a is greater 
    if ($a > $b) 
        return gcd($a - $b, $b); 
    return gcd($a, $b - $a); 
} 
  
// Function to return LCM 
// of two numbers 
function lcm( $a, $b) 
{ 
    return ($a * $b) / gcd($a, $b); 
} 
  
    // Driver Code 
    $a = 5;  
    $b = 6; 
    echo "LCM of ",$a, " and "
         ,$b, " is ", lcm($a, $b); 
  
// This code is contributed by anuj_67. 
?> 