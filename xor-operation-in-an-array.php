<?php
    /**
     * https://leetcode.com/problems/xor-operation-in-an-array/
     */

    class Solution 
    {
        /**
         * @param Integer $n
         * @param Integer $start
         * @return Integer
         */
        function xorOperation($n, $start) 
        {
            $value = 0;
            
            for ($i = 0; $i < $n; $i++) {
                $num = $start + 2 * $i;
                $value = ($i > 0) ? $value ^ $num : $num;
            }
            
            return $value;
        }
    }