<?php
    /**
     * https://leetcode.com/problems/subtract-the-product-and-sum-of-digits-of-an-integer/
     */

    class Solution 
    {
        /**
         * @param Integer $n
         * @return Integer
         */
        function subtractProductAndSum($n) 
        {
            $product = 1;
            $sum = 0;
            
            while($n > 0) {
                $mod = $n % 10;
                $product *= $mod;
                $sum += $mod;
                $n = intval($n / 10);
            }
            
            return $product - $sum;
        }
    }