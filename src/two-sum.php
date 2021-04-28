<?php

/**
Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Output: Because nums[0] + nums[1] == 9, we return [0, 1].
Example 2:

Input: nums = [3,2,4], target = 6
Output: [1,2]
Example 3:

Input: nums = [3,3], target = 6
Output: [0,1]
 */

$solution = new Solution();
echo $solution->twoSum([2,7,11,15], 9);

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $clone_nums = $num;
        foreach($nums as $pos => $num) {
            $i = $pos + 1;
            for($i; $i < count($nums); $i++) {
                if ($target == ($num + $nums[$i])) {
                    return [$pos, $i];
                }
            }
        }
    }
}