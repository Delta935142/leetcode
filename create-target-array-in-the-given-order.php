<?php
    /**
     * https://leetcode.com/problems/create-target-array-in-the-given-order/
     */

    class Solution 
    {
        /**
         * @param Integer[] $nums
         * @param Integer[] $index
         * @return Integer[]
         */
        function createTargetArray($nums, $index) 
        {
            $arr = [];
            
            foreach ($nums as $key => $num) {
                array_splice($arr, $index[$key], 0, $num);
            }
            
            return $arr;
        }
    }