#!/bin/bash
<?php
/**
https://leetcode.com/problems/first-unique-character-in-a-string

    Example 1:

    Input: s = "leetcode"
    Output: 0

    Example 2:

    Input: s = "loveleetcode"
    Output: 2

    Example 3:

    Input: s = "aabb"
    Output: -1
 */

$solution = new solution();
$solution->firstUniqChar('leetcode');

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $list = str_split($s);
        foreach($list as $num => $candidate) {
            $uniq = true;
            $pos = 0;
            for($pos; $pos <= count($list); $pos++) {
                if ($list[$pos] == $candidate && $pos != $num) {
                    $uniq = false;
                    break;
                }
            }
            if ($uniq) {
                return $num;
            }
        }
        if (!$uniq) return '-1';
    }
}