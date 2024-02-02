<?php
    function factorial($n) {
        // Base case: If $n is 0 or 1, return 1
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            // Recursive case: Multiply $n by the factorial of ($n - 1)
            return $n * factorial($n - 1);
        }
    }
    
    // Example usage:
    $number = 5;
    $result = factorial($number);
    echo "Factorial of $number is $result"; // Output: Factorial of 5 is 120
    
?>