<?php

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
        if ($len%2 == 0) {
            $pos_r = (int)$len/2;
            $pos_l = $pos_r - 1;
            for($pos_l; $pos_l <= 0; $pos_l--) {
                if ($pos_l != $pos_r) {
                    return false;
                }
                $pos_r++;
            }
        } else {

        }
        return true;
    }
}