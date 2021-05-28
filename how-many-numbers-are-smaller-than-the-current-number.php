<?php
    /**
     * https://leetcode.com/problems/how-many-numbers-are-smaller-than-the-current-number/
     */

    class Solution
    {
        /**
         * @param Integer[] $nums
         * @return Integer[]
         */
        function smallerNumbersThanCurrent($nums) 
        {
            $len = sizeof($nums);
            $arr = [];
            
            for ($i = 0; $i < $len; $i++) {
                $count = 0;
                for ($j = 0; $j < $len; $j++) {
                    if ($i != $j && $nums[$j] < $nums[$i]) $count++;
                }
                $arr[] = $count;
            }
            
            return $arr;
        }
    }