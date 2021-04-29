<?php
/**
 * https://leetcode.com/problems/palindrome-number/
 *
Example 1:

Input: x = 121
Output: true
Example 2:

Input: x = -121
Output: false
Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
Example 3:

Input: x = 10
Output: false
Explanation: Reads 01 from right to left. Therefore it is not a palindrome.
Example 4:

Input: x = -101
Output: false
 */

$solution = new Solution();
echo $solution->isPalindrome();

/**
 * Class Solution
 */
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0) return false;
        $nums = str_split($x);
        $len = count($nums);
        if ($len == 1) return true;
        $middle = (int)$len/2;
        $pos_r = ($len%2 == 0) ? $middle : $middle + 1;
        $pos_l = $middle - 1;
        for($pos_l; $pos_l >= 0; $pos_l--) {
            if ($nums[$pos_l] != $nums[$pos_r]) {
                return false;
            }
            $pos_r++;
        }
        return true;
    }
}