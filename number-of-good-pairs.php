<?php
    /**
     * https://leetcode.com/problems/number-of-good-pairs/
     */

    class Solution
    {
        /**
         * @param Integer[] $nums
         * @return Integer
         */
        function numIdenticalPairs($nums) 
        {
            $len = sizeof($nums);
            $count = 0;
            for ($i = 0; $i < $len; $i++) {
                for ($j = $i + 1; $j < $len; $j++) {
                    if ($nums[$i] === $nums[$j]) $count++;
                }
            }
            
            return $count;
        }
    }