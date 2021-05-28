<?php
    /**
     * https://leetcode.com/problems/decode-xored-array/
     */

    class Solution 
    {
        /**
         * @param Integer[] $encoded
         * @param Integer $first
         * @return Integer[]
         */
        function decode($encoded, $first) 
        {
            $arr = [$first];
            
            foreach ($encoded as $val) {
                $first = $val ^ $first;
                array_push($arr, $first);
            }
    
            return $arr;
        }
    }