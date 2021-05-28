<?php
    /**
     * https://leetcode.com/problems/shuffle-the-array/
     */

    class Solution
    {
        /**
         * @param Integer[] $nums
         * @param Integer $n
         * @return Integer[]
         */
        function shuffle($nums, $n) 
        {
            $arrs = array_chunk($nums, $n);
            $result = [];
            foreach ($arrs[0] as $key => $val) {
                array_push($result, $val);
                if (isset($arrs[1][$key])) array_push($result, $arrs[1][$key]);
            }
            
            return $result;
        }
    }