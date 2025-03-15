<?php
/**
 * Function to check if a string is a palindrome.
 *
 * @param string $str Input string to check
 * @return bool Returns true if the string is a palindrome, false otherwise
 */
function isPalindrome($str) {
    // Remove non-alphanumeric characters and convert to lowercase
    $filteredStr = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($str));
    
    // Compare the filtered string with its reverse
    return $filteredStr === strrev($filteredStr);
}

// Test Case for Palindrome
$testStr = "A man, a plan, a canal: Panama";
echo "Testing Palindrome Check:\n";
echo "Input: \"$testStr\"\n";
echo "Result: " . (isPalindrome($testStr) ? "✅ Palindrome" : "❌ Not a Palindrome") . "\n\n";

/**
 * Function to find the second largest number in an array.
 *
 * @param array $arr Input array of numbers
 * @return int|null Returns the second largest number, or null if not applicable
 */
function secondLargest($arr) {
    $size = count($arr);
    if ($size < 2) {
        return null; // Not enough elements
    }

    // Find the largest number
    $largest = max($arr);

    // Find the second largest number
    $secondLargest = null;
    foreach ($arr as $num) {
        if ($num < $largest && ($secondLargest === null || $num > $secondLargest)) {
            $secondLargest = $num;
        }
    }

    return $secondLargest;
}

$testArr = [10, 20, 4, 45, 99];
echo "Testing Second Largest Number Finder:\n";
echo "Input Array: " . implode(", ", $testArr) . "\n";
$secondLargest = secondLargest($testArr);
echo "Result: " . ($secondLargest !== null ? "✅ Second Largest: $secondLargest" : "❌ No second largest number") . "\n";
?>
