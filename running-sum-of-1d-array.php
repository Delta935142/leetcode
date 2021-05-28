<?php
    /**
     * https://leetcode.com/problems/running-sum-of-1d-array/
     */

    class Solution
    {
        /**
         * @param Integer[] $nums
         * @return Integer[]
         */
        function runningSum($nums) 
        {
            $arr = [];
            $sum = 0;

            foreach ($nums as $num) {
                $sum += $num;
                $arr[] = $sum;
            }
            
            return $arr;
        }
    }